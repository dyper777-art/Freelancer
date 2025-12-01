@extends('frontend.layout.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5 justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2><span>Welcome to </span><span class="accent">Impact</span></h2>
                    <p>Connect with skilled freelancers ready to bring your ideas to life.
                Hire experts for design, development, writing, marketing, and more—all in one place.</p>
                    <div class="d-flex">

                        @auth
                            <a class="btn-get-started">Welcome {{ Auth::user()->name }}</a>
                        @endauth

                        @guest
                            <a href="{{ route('login.form') }}" class="btn-get-started">Get Started</a>
                        @endguest

                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-heart"></i></div>
                            <h4 class="title"><a  class="stretched-link">Licensing you can trust</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a  class="stretched-link">Secure rights. Smart software</a>
                            </h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-bricks"></i></div>
                            <h4 class="title"><a  class="stretched-link">Clear terms. Confident use</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a  class="stretched-link">Protecting creators. Empowering
                                    users</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

    </section>
    <!-- /Hero Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Services</h2>
        </div><!-- End Section Title -->


        <div class="container">

            <div class="row gy-4">

                @foreach ($products as $product)
                    <x-service-card :product="$product"></x-service-card>
                @endforeach

            </div>
        </div>


    </section>
    <!-- /Team Section -->

    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <div class="text-center">
                <a href="#" class="buy-btn" style="background-color: #008374;">More</a>
            </div>
        </div><!-- End Section Title -->

    </section>
@endsection
