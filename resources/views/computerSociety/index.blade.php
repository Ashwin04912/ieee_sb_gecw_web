@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/computer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="{{ asset('assets/aos/aos.js') }}"></script>






    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="{{ asset('assets/images/hero-bg-light.webp') }}" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Welcome to <span>Computer societies</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for
                        success<br></p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about_section" class="btn-get-started">Get Started</a>

                    </div>
                    <div class="img-box">
                        <img src="{{ asset('assets/images/slider-img.png') }}" class="img-fluid hero-img" alt=""
                            data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            
                        
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                           
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

       <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset ('assets/images/IEEE-CS_LogoTM_black.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are CSGECW
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <p>
              Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

        {{-- exicom section --}}


        <h1 class="pt-5">Meet our Execom</h1>
        <div class="row justify-content-center">
            @for ($i = 0; $i < 16; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                    <div class="profile-card text-center">
                        <img src="{{ asset('assets/images/ashwin.jpg') }}" alt="Profile Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Ashwin</h5>
                            <p class="card-text">Freelance Developer</p>
                            <div class="social-icons d-flex justify-content-center">
                                <a href="#"><i class="fab fa-github"></i></a>


                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        @include('layouts.footer')

        {{-- /exicom section --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                AOS.init();
            });
        </script>
    @endsection
