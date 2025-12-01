<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
    <div class="member">
        <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
        <h4>{{ $product->user->name }}</h4>
        <h4>{{ $product->name }}</h4>
        <span>${{ $product->price }}</span>
        <span>{{ $product->description }}</span>
        <div class="social">
           <a href="{{ route('product.show', $product->id) }}">
                <i class="bi bi-eye"></i>
            </a>
            <form method="POST" action="{{ route('cart.add', $product->id) }}" id="add-to-cart-{{ $product->id }}">
                @csrf
                <a href="#" onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();">
                    <i class="bi bi-cart"></i>
                </a>
            </form>
        </div>
    </div>
</div>

