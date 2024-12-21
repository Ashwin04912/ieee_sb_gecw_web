@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/computer.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}"> -->

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section"  style="height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="hero-bg">
      <img src="{{ asset('assets/images/hero-bg-light.webp') }}" alt="">
    </div>
    <div class="container text-center">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up">Welcome to <span>Microwave Theory and Technology Society</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Innovating the Future, Empowering the World.<br></p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="javascript:void(0);" class="btn-get-started" onclick="scrollToSection('about_section')">Get Started</a>
        </div>
      </div>
    </div> 
  </section><!-- /Hero Section -->

  <div class="container mt-5 d-flex flex-wrap justify-content-center gap-4">
  <!-- Mission Box -->
  <div class="mission-box p-4 shadow-lg rounded-3 col-12 col-md-5" style="background: #f9f9f9; transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="100">
    <div class="text-center mb-4">
      <i class="fas fa-bullhorn fa-3x text-primary" style="animation: fadeInUp 1s ease;"></i>
    </div>
    <h2 class="text-center text-dark" style="font-size: 2.5rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
      Our Mission
    </h2>
    <p class="text-dark text-center" style="font-size: 1.2rem; line-height: 1.6; animation: fadeInUp 1.2s ease;">
      Our mission is to create a collaborative platform that empowers students to innovate and build meaningful connections with peers, faculty, and industry leaders.
    </p>
  </div>

  <!-- Vision Box -->
  <div class="vision-box p-4 shadow-lg rounded-3 col-12 col-md-5" style="background: #f9f9f9; transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="200">
    <div class="text-center mb-4">
      <i class="fas fa-eye fa-3x text-primary" style="animation: fadeInUp 1s ease;"></i>
    </div>
    <h2 class="text-center text-dark" style="font-size: 2.5rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
      Our Vision
    </h2>
    <p class="text-dark text-center" style="font-size: 1.2rem; line-height: 1.6; animation: fadeInUp 1.2s ease;">
      Our vision is to inspire innovation and leadership by fostering a culture of creativity and collaboration, driving positive change in society.
    </p>
  </div>

<!-- About Section -->
<div id="about_section">
  <section class="about_section py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Side: Image -->
        <div class="col-md-6 mb-4 mb-md-0 text-center">
          <div class="img-box">
            <img src="{{ asset('/assets/images/mtts_logo.png') }}" alt="MTT-S Logo" class="img-fluid custom-logo" style="animation: fadeInUp 1s ease;">
          </div>
        </div>
        <!-- Right Side: About Us Text -->
        <div class="col-md-6">
          <div class="detail-box">
          <h2 class="mb-3" style="font-size: 2.5rem; font-weight: bold;">
                            About <span style="color: #0078D4;">Us</span>
                        </h2>
            <p style="text-align: justify; font-size: 1rem; line-height: 1.8; animation: fadeInUp 1.2s ease;">
              IEEE MTT-S is a translational society promoting microwave theory and its applications, 
              from RF, microwave, mmWave to terahertz frequencies. The IEEE Microwave Theory and Technology Society 
              (MTT-S) GECW provides access to current information, opportunities to network with peers, 
              and enhancement of the global value of your profession. We create stunning feedback to generate new impacts 
              in professional development, conferences, mentorship, marketing, and technical workshops.
            </p>
            <!-- Latest Achievements -->
            <div class="achievements mt-4">
              <h4 class="mb-3" style="animation: fadeInUp 1s ease;">Latest Achievements</h4>
              <ul class="list-unstyled pl-2" style="font-size: 0.95rem; animation: fadeInUp 1.2s ease;">
                <li class="mb-2">🌟 STEM Project: TV Installation at Valad GHSS</li>
                <li class="mb-2">🌟 Field Visit to CUSAT</li>
                <li class="mb-2">🌟 Talk Session: Electromagnetic Selective Structures</li>
                <li class="mb-2">🌟 AI in Wireless Communication: A New Horizon</li>
                <li class="mb-2">🌟 Inauguration of IEEE APS & MTTS Student Branch Chapter</li>
                <li class="mb-2">🌟 Practical Applications of Electromagnetic Waves in Daily Life</li>
                <li class="mb-2">🌟 Multiple Antennas in Terminal Devices: A Revolutionary Approach</li>
                <li class="mb-2">🌟 Visit to ADAM: Exploring New Dimensions in Technology</li>
                <li>🌟 LPSC Visit: Witnessing Space Exploration Advancements</li>
              </ul>
            </div>
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
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
          <div class="profile-card text-center">
            <img src="{{ asset('uploads/images/mttsexecoms/' . $data->image) }}" alt="Profile Image"
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
</div>

  @include('layouts.footer')

  {{-- /exicom section --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
    });

    function scrollToSection(sectionId) {
      const section = document.getElementById(sectionId);
      section.scrollIntoView({ behavior: 'smooth' });
    }
  </script>
  @endsection