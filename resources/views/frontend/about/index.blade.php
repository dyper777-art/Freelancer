@extends('frontend.layout.master')

@section('content')

    <x-top-padding></x-top-padding>

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p>Connecting talented freelancers with clients worldwide to create amazing projects.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <h3>Empowering Freelancers & Clients Alike</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>We provide a platform where freelancers can showcase their skills, find meaningful projects, and grow their careers. Clients can discover talented professionals to bring their ideas to life.</p>
            <p>Our mission is to make freelancing seamless and rewarding by offering intuitive tools for project management, secure payments, and effective collaboration between freelancers and clients around the world.</p>
          </div>
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Join a community of skilled professionals and forward-thinking clients, all working together to achieve outstanding results.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Find the perfect freelance talent for your projects.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Showcase your skills and get hired by clients worldwide.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Manage projects efficiently with secure payments and clear communication.</span></li>
              </ul>
              <p>
                Whether you’re a freelancer or a client, our platform is designed to make freelancing simple, productive, and rewarding. Explore opportunities, connect with professionals, and bring your ideas to life.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- About Section -->

@endsection
