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
        <h1 data-aos="fade-up">Welcome to <span>Women In Engineering</span></h1>
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
              <img src="{{ asset('/assets/images/wie_logo.png') }}" alt="CSGECW Logo" class="img-fluid custom-logo">
            </div>
          </div>
          <!-- Right Side: About Us Text -->
          <div class="col-md-6 col-12">
            <div class="detail-box">
            <h2 class="mb-3">
              About <span style="color: #0078D4;">Us</span>
            </h2>
              <p>
                IEEE WIE AG GECW is an affinity group under the IEEE Student Branch at Government Engineering College Wayanad, dedicated to empowering women in engineering and technology. Its mission is to provide a supportive community and resources to female students, increasing their technical knowledge and confidence to succeed in their engineering careers. By offering a network of like-minded women, access to tools and mentorship, and opportunities for growth, IEEE WIE AG GECW aims to make a positive impact on the lives of its members, helping them to achieve their full potential and become leaders in their fields.
                WIE stands as a prominent global organization committed to championing women researchers and inspiring young women worldwide to embarking on carrers in engineering
                IEEE WIE AG GECW provides graduate students with exceptional project opportunities, enabling them to gain hands-on experience and a realistic perspective on the careers they're building. By working on real-world projects in a supportive environment, members can develop practical skills, build confidence, and shine in their future endeavors.
              </p>
              <!-- <p>
                Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- end about section -->

  {{-- exicom section --}}

  <div class="m-5 pt-5">
    <h1 class="fw-bold pt-5">Meet Our Team..</h2>
      <hr>
      <div class="row justify-content-center pt-3">
        @foreach ($datas as $data)
        <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
          <div class="profile-card text-center">
            <img src="{{ asset('uploads/images/wieexecoms/' . $data->image) }}" alt="Profile Image"
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