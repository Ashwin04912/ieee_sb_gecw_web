@extends('layouts.app')
@section('content')


<x-background_home_image image="assets/images/dummy-bg.jpg">
    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                <h2 class="display-1 text-white text-center fw-bold mb-4">Dream of Success</h2>
                <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center">
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7">There are three ways to ultimate success: The first
                        way is to be kind. The second way is to be kind. The third way is to be kind.</span>
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" onclick="$('.about_us')[0].focus()"
                        class="btn bsb-btn-2xl btn-outline-light">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</x-background_home_image>


{{-- @extends('layouts.navigation') --}}




</section>


<div class="container mt-5 about_us" tabindex="0">
  <div class="row align-items-center">
    <!-- Left Content Section -->
    <div class="col-md-6 order-2 order-md-1">
      <div class="content aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
        <h3 class="mb-4" style="color: #0078D4; font-weight: bold; font-size: 1.8rem;">
          About IEEE SB GECW
        </h3>
        <p class="fst-italic" style="text-align: justify; line-height: 1.8; font-size: 1rem; color: #555;">
          IEEE Student Branch GEC Wayanad explores unexplored territories, offering a stunning outlook and dedication 
          to excellence. We aim to build achievements, regional opportunities, conferences, and programs. 
          IEEE SB creates professional innovation in technical fields and offers ways to connect and collaborate 
          in the tech era, patching together innovation, inspiration, and interaction.
        </p>
        <!-- Achievements List -->
        <ul class="list-unstyled" style="font-size: 1rem; line-height: 2;">
          <li>
            <i class="fas fa-award" style="color: #FFD700;"></i> 
            Received Outstanding Student Branch Award 2023 (Malabar Hub)
          </li>
          <li>
            <i class="fas fa-trophy" style="color: #FFD700;"></i> 
            IEEE Regional Exemplary Student Branch Award 2022
          </li>
          <li>
            <i class="fas fa-star" style="color: #FFD700;"></i> 
            IEEE Malabar Subsection Most Vibrant IEEE Student Branch Award 2022
          </li>
          <li>
            <i class="fas fa-medal" style="color: #FFD700;"></i> 
            2<sup>nd</sup> Darrel Chong Award 2022 - For Sight Camp
          </li>
          <li>
            <i class="fas fa-certificate" style="color: #FFD700;"></i> 
            2<sup>nd</sup> Inspiring IEEE SIGHT Branch Award for the year 2023
          </li>
        </ul>
      </div>
    </div>
    <!-- Right Image Section -->
    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
      <div class="img-box text-center">
        <img 
          src="https://images.pexels.com/photos/2422290/pexels-photo-2422290.jpeg?cs=srgb&dl=pexels-jopwell-2422290.jpg&fm=jpg" 
          class="img-fluid rounded shadow-lg" 
          alt="IEEE SB GECW Team" 
          style="max-width: 100%; height: auto;"
        >
      </div>
    </div>
  </div>
</div>

<!-- Add FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{route('mtts.index')}}"> <img src="{{ asset('assets/images/mtts_logo.png') }}" class="img-fluid image-container" alt="MTTS Logo"></a>
           
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{route('computer')}}"><img src="{{ asset('assets/images/csociety_logo.png') }}" class="img-fluid image-container" alt="CSociety Logo"></a>
            
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{route('aps.index')}}"> <img src="{{ asset('assets/images/aps_logo.png') }}" class="img-fluid image-container p-5" alt="APS Logo"></a>
           
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{route('wie.index')}}"><img src="{{ asset('assets/images/wie_logo.png') }}" class="img-fluid image-container p-5" alt="WIE Logo"></a>
            
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{route('sight.index')}}"><img src="{{ asset('assets/images/sight_logo.png') }}" class="img-fluid image-container p-3" alt="SIGHT Logo"></a>
            
        </div>
    </div>
</div>



<div class="col">
    <h2 style="height: 200px"></h2>
</div>
</div>

{{-- footer section --}}
@include('layouts.footer')
@endsection