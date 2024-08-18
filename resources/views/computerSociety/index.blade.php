@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/computer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="{{ asset('assets/aos/aos.js') }}"></script>


    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
          <img src="{{ asset('assets/images/hero-bg-light.webp') }}" alt="">
        </div>
        <div class="container text-center">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">Welcome to <span>Computer societies</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for success<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Get Started</a>
             
            </div>
            {{-- <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300"> --}}
          </div>
        </div>
  
      </section><!-- /Hero Section -->


                 <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Unleashing Potential with Creative Strategy</h3>
            <p class="fst-italic">
                IEEE Computer Society is the leading provider of technical information, community services and personalized services to the world's computing and computer science professionals. IEEE Computer Society strives to be essential to the global technical community and computer professionals everywhere and be universally recognized for the contributions of technical professionals in researching, developing, and applying technology to improve global conditions.            
            
            </p>
         
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{ asset('assets/images/IEEE-CS_LogoTM_black.png') }}" class="img-fluid" alt="">
              </div>
              
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->.
              

      
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
@endsection
