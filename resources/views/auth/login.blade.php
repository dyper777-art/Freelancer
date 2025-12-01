@extends('frontend.layout.master')

@section('content')
    <x-top-padding></x-top-padding>

    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>LOGIN</h2>
            <a href="{{ route('register') }}"><i class="bi bi-arrow-right">&nbsp;&nbsp;Create Account</i></a>
        </div><!-- End Section Title -->

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row gx-lg-0 gy-4">


                @if($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif


                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3>Open Hours:</h3>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="{{ route('login') }}" method="post" class="sign-form aos-init aos-animate"
                        data-aos="fade" data-aos-delay="100">
                        @csrf
                        <div class="row d-flex align-items-center justify-content-center gy-4">


                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="" data-sharkid="__1" data-sharklabel="email" required>
                                <shark-icon-container data-sharkidcontainer="__1"
                                    style="position: absolute;"></shark-icon-container>
                            </div>

                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Your Password"
                                    required="" data-sharkid="__2" required>
                            </div>


                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>

                                <button type="submit">Login</button>
                            </div>




                        </div>
                    </form>



                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>

@endsection
