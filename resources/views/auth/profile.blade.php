@extends('frontend.layout.master')

@section('content')
    <x-top-padding></x-top-padding>

    <section id="services" class="services section">


      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Our Services</h2>
         <form id="myForm" action="{{ route('logout') }}" class="sign-form" method="post">
            @csrf
             <a href="#" onclick="document.getElementById('myForm').submit();" class="btn btn-danger">
                Logout
            </a>
        </form>
      </div><!-- End Section Title -->

      <div class="container">


        <div class="row gy-4 justify-content-center d-flex">

          <div class="col-lg-12 col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative d-flex flex-column">

              <h3>User Name : {{ Auth::user()->name }}</h3>
              <h3>Email : {{ Auth::user()->email }}</h3>
              <h3>Created At : {{ Auth::user()->created_at }}</h3>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>


@endsection
