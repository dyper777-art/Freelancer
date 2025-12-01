@extends('frontend.layout.master')

@section('content')
    <x-top-padding></x-top-padding>

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
@endsection
