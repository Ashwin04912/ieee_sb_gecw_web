@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/computer.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}"> -->

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section"  class="hero section" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="hero-bg">
      <img src="{{ asset('assets/images/hero-bg-light.webp') }}" alt="">
    </div>
    <div class="container text-center">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up">Welcome to <span>Computer society</span></h1>
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

    <div id="about_section" class="pt-5 mt-5">
    <section class="">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side: Image -->
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="img-box text-center">
                        <img src="{{ asset('assets/images/csociety_logo.png') }}" alt="CSGECW Logo" class="img-fluid custom-logo" style="max-width: 80%; height: auto;">
                    </div>
                </div>
                <!-- Right Side: About Us Text -->
                <div class="col-md-6 col-12">
                    <div class="detail-box">
                        <h2 class="mb-3" style="font-size: 2.5rem; font-weight: bold;">
                            About <span style="color: #0078D4;">Us</span>
                        </h2>
                        <p  style=" font-size: 1.2rem; line-height: 1.8; color: #555; text-align: justify;">
                            The Computer Society of GEC Wayanad is a vibrant community dedicated to fostering interest and excellence in computer science and technology. We provide a platform for students to explore the latest trends in technology, enhance their programming skills, and collaborate on innovative projects. Through workshops, coding competitions, guest lectures, and hackathons, we aim to cultivate a culture of learning and innovation. Whether you're a beginner or an experienced programmer, the Computer Society provides a supportive environment to explore your interests, network with peers, and prepare for a successful career in technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- exicom section --}}

<div class=" m-5 pt-5">
<h1 class="fw-bold pt-5 ">Meet Our Team..</h1>
<hr>
<div class="row justify-content-center pt-3">
  @foreach ($datas as $data)
  <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
    <div class="profile-card text-center">
      <img src="{{ asset('uploads/images/csexecoms/' . $data->image) }}" alt="Profile Image" class="img-fluid">
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

  <!-- About Us Section -->





  <!-- end about section -->


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
