@extends('frontend.layout.master')

@section('content')
    <x-top-padding></x-top-padding>

    <section id="services" class="services section">


      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Our Service</h2>
      </div><!-- End Section Title -->

      <div class="container">


        <div class="row gy-4 justify-content-center d-flex">

          <div class="col-lg-12 col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative d-flex flex-column">

              <h3 class="d-flex">Product Name : {{ $product->name }}></h3>
              <img class="mb-5" style="max-width:500px" src="{{ asset($product->image) }}">
              <h3>Product Price  : {{ $product->price }}</h3>
              <h3>Product Description : </h3>
              <h3>{{ $product->description }}</h3>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>


@endsection
