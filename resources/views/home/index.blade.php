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

    <div class="row">
        <div class="col-md-6  ">
            <div class="order-2 order-lg-2  content aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <h3>About IEEE SB GECW.</h3>
                <p class="fst-italic">IEEE Student Branch GEC Wayanad through unexplored territory, offering a stunning outlook and dedication to excellence build up the achivements , regional opportunities ,conferences, programs …
                    IEEE SB creates the professional innovation in technical fields .
                    As a outlook student branch offers ways to connect and collaborate in tech era to patchup the innovation, inspiration and interaction .</p>
                <ul>


                    <li><i class=""></i>Recieved outstanding student branch award 2023(Malabar hub)</li>
                    <li><i class=""></i>IEEE Regional exemplary student branch award 2022</li>
                    <li><i class=""></i>IEEE Malabar subsection Most vibrant IEEE student branch award 2022</li>
                    <li><i class=""></i> 2<sup>nd</sup> Darrel Chong Award 2022 -For Sight Camp</li>
                    <li><i class=""></i> 2<sup>nd</sup> Inspiring IEEE SIGHT Branch Award for the year 2023</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 "><img
                src="https://images.pexels.com/photos/2422290/pexels-photo-2422290.jpeg?cs=srgb&dl=pexels-jopwell-2422290.jpg&fm=jpg"
                class="img-fluid" alt="..."></div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/mtts_logo.png') }}" class="img-fluid image-container" alt="MTTS Logo">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/csociety_logo.png') }}" class="img-fluid image-container" alt="CSociety Logo">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/aps_logo.png') }}" class="img-fluid image-container p-5" alt="APS Logo">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/wie_logo.png') }}" class="img-fluid image-container p-5" alt="WIE Logo">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/sight_logo.png') }}" class="img-fluid image-container p-3" alt="SIGHT Logo">
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