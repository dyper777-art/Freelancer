@extends('frontend.layout.master')

@section('content')
    <x-top-padding></x-top-padding>

    <!-- Team Section -->
    <section id="services" class="services section hero">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>YOUR CART</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($cartItems as $cartItem)
                    <x-cart :cartItem="$cartItem"></x-cart>
                @endforeach

            </div>
        </div>

        @if ($cartItems->isEmpty())
            <div class="container">

                <div class="row gy-4 mt-5 mb-5">

                    <div class="col-lg-12 col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item row d-flex gap-1">

                            <div class="col-lg-4 col-md-4 justify-content-center align-items-center d-flex">
                                <h3>YOUR CART ARE EMPTY</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="container">

                <div class="row gy-4 mt-4">


                    <div class="col-lg-12 col-md-12 aos-init aos-animate d-flex justify-content-end" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="service-item row d-flex gap-1">


                            <div class="col-lg-12 col-md-12 justify-content-center align-items-center d-flex">
                                <a href="#" onclick="showBakongQR()" class="btn btn-get-started"
                                    data-bs-toggle="modal" data-bs-target="#bakongModal">
                                    Check Out
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endif

    </section>

    <div class="modal fade" id="bakongModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Bakong Payment QR</h5>
                </div>

                <div class="modal-body text-center">
                    <img id="qrImage" alt="Bakong QR Code" style="width:250px; height:250px;">
                    <p class="mt-3" id="paymentAmount">Total Amount: $0</p>
                    <p class="mt-3">Scan with Bakong App to Pay</p>
                    <button class="btn btn-success" id="pay-manually-btn">Pay Manually</button>
                </div>

            </div>
        </div>
    </div>


    <script>
        let pollingInterval;

        function showBakongQR() {

            console.log(123);

            fetch('{{ route('checkout.generateQR') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    document.getElementById('qrImage').src = data.qrUrl;
                    document.getElementById('paymentAmount').innerText = 'Total Amount: $ ' + data.amount;

                    const modalEl = document.getElementById('bakongModal');
                    const modal = new bootstrap.Modal(modalEl);
                    modal.show();

                    // Start polling
                    if (pollingInterval) clearInterval(pollingInterval);
                    pollingInterval = setInterval(async () => {
                        console.log(data.md5);
                        try {
                            const resp = await fetch('{{ route('checkout.checkPayment') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    md5: data.md5 // or pass from generateQR response
                                })
                            });

                            const result = await resp.json();

                            if (result.paid) {
                                clearInterval(pollingInterval);
                                modal.hide();
                                window.location.href = "{{ route('home') }}?payment=success";
                            }
                        } catch (err) {
                            console.error('Polling error:', err);
                        }
                    }, 4000);

                })
                .catch(err => {
                    console.error(err);
                    alert('Failed to generate QR code: ' + err.message);
                });
        }

        // Cancel polling
        document.getElementById('cancelPaymentBtn')?.addEventListener('click', () => {
            clearInterval(pollingInterval);
        });
    </script>

    <script>
        document.getElementById('pay-manually-btn').addEventListener('click', async function() {
            if (!confirm("Are you sure you want to mark this order as paid manually?")) return;

            const modalEl = document.getElementById('bakongModal');
            const modal = new bootstrap.Modal(modalEl);

            try {
                const resp = await fetch('{{ route('checkout.manualPayment') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                const result = await resp.json();

                if (result.paid) { // match your controller JSON key
                    clearInterval(pollingInterval); // if using polling
                    modal.hide();
                    window.location.href = "{{ route('home') }}?payment=success";
                } else {
                    alert('Error: ' + (result.error || 'Something went wrong'));
                }
            } catch (err) {
                console.error(err);
                alert('Network or server error');
            }
        });
    </script>
@endsection
