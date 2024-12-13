@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/computer.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}"> -->

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">
    <div class="hero-bg">
      <img src="{{ asset('assets/images/hero-bg-light.webp') }}" alt="">
    </div>
    <div class="container text-center">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up">Welcome to <span>Antenna Propogation Society</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Innovating the Future, Empowering the World.<br></p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="#about_section" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->
  <div id="about_section">
    <section class="about_section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Side: Image -->
          <div class="col-md-6 col-12 mb-4 mb-md-0">
            <div class="img-box text-center">
              <img src="{{ asset('/assets/images/aps_logo.png') }}" alt="CSGECW Logo" class="img-fluid custom-logo">
              <style>
                            
                            </style>
            </div>
          </div>
          <!-- Right Side: About Us Text -->
          <div class="col-md-6 col-12">
            <div class="detail-box">
              <h2>About <span>Us</span></h2>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                the middle of text.
              </p>
              <p>
                Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- end about section -->

  {{-- exicom section --}}

  <div class="m-5 pt-5">
    <h1 class="pt-5">Meet Our Team..</h2>
      <hr>
      <div class="row justify-content-center pt-3">
        @foreach ($datas as $data)
        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
          <div class="profile-card text-center">
            <img src="{{ asset('uploads/images/apsexecoms/' . $data->image) }}" alt="Profile Image"
              class="img-fluid">
            <div class="card-body">
              <h5 class="card-title">{{ $data->name }}</h5>
              <p class="card-text">{{ $data->title }}</p>
              <div class="social-icons d-flex justify-content-center">
                <a href="{{ $data->github }}"><i class="fab fa-github"></i></a>
                <a href="{{ $data->insta }}"><i class="fab fa-instagram"></i></a>
                <a href="{{ $data->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  @include('layouts.footer')

  {{-- /exicom section --}}

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
    });
  </script>
  @endsection