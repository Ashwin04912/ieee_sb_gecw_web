@extends('layouts.app')
@section('content')
    

<x-background_home_image image="assets/images/dummy-bg.jpg">
<div class="container">
            <div class="row justify-content-md-center align-items-center" >
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
                    <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a justo id velit
                        interdum finibus dapibus vel velit. Pellentesque eu ante eget est sollicitudin vestibulum sed sit
                        amet orci. Sed a nunc nisl. Duis sodales nisl arcu. Donec tincidunt tellus eu tortor condimentum
                        pellentesque. Donec ut pretium urna, in interdum purus. Curabitur eu malesuada sem, at tempus nisl.
                        Aliquam euismod erat et est placerat, vel tempus urna finibus. Vivamus ac turpis sed enim
                        pellentesque efficitur in non lacus. Praesent a nisl vitae erat tincidunt congue. Proin porta, lorem
                        et maximus dictum, augue elit pretium sem, sit amet vestibulum turpis justo.</p>
                    <ul>


                        <li><i class=""></i> Outstanding Student Branch IEEE India Council 2022.</li>
                        <li><i class=""></i> IEEE Region 10 Exemplerary Student Branch Award 2022.</li>
                        <li><i class=""></i> Darrel Chong Bronze Medal for the activity Student Development Program
                            (SDP).</li>
                        <li><i class=""></i> 2<sup>nd</sup> Largest in IEEE Kerala Section.</li>
                        <li><i class=""></i> 2<sup>nd</sup> Largest Computer Societ and Power and Energy Society
                            Chapters Globally Membership-wise.</li>
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
