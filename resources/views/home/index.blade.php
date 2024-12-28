@extends('layouts.app')
@section('content')

<!-- Background Image Section -->
<x-background_home_image image="assets/images/dummy-bg.jpg">
    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7 text-center">
                <h2 class="display-1 text-white fw-bold mb-4" style="font-family: 'Poppins', sans-serif; animation: fadeInUp 1s ease;">
                    Dream of Success
                </h2>
                <p class="lead text-white mb-5 d-flex justify-content-sm-center" style="font-size: 1.1rem; animation: fadeInUp 1.2s ease;">
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7">
                        There are three ways to ultimate success: The first way is to be kind. The second way is to be kind. The third way is to be kind.
                    </span>
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" onclick="$('.about_us')[0].focus()" class="btn btn-outline-light btn-lg rounded-pill shadow-lg hover-scale animate__animated animate__pulse">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</x-background_home_image>

<div class="container mt-5 d-flex flex-wrap justify-content-center gap-4">
    <!-- Mission Box -->
    <div class="mission-box p-4 shadow-lg rounded-3 col-12 col-md-5" style="background: #f9f9f9; transition: transform 0.3s ease; width: 100%; max-width: 600px;" data-aos="fade-up" data-aos-delay="100">
        <div class="text-center mb-4">
            <i class="fas fa-bullhorn fa-3x text-primary" style="animation: fadeInUp 1s ease;"></i>
        </div>
        <h2 class="text-center text-dark" style="font-size: 1.8rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
            Our Mission
        </h2>
        <p class="text-dark text-center" style="line-height: 1.8; font-size: 1.1rem; animation: fadeInUp 1.2s ease;">
            Our mission is to create a collaborative platform that empowers students to innovate and build meaningful connections with peers, faculty, and industry leaders.
        </p>
    </div>

    <!-- Vision Box -->
    <div class="vision-box p-4 shadow-lg rounded-3 col-12 col-md-5" style="background: #f9f9f9; transition: transform 0.3s ease; width: 100%; max-width: 600px;" data-aos="fade-up" data-aos-delay="200">
        <div class="text-center mb-4">
            <i class="fas fa-eye fa-3x text-primary" style="animation: fadeInUp 1s ease;"></i>
        </div>
        <h2 class="text-center text-dark" style="font-size: 1.8rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
            Our Vision
        </h2>
        <p class="text-dark text-center" style="line-height: 1.8; font-size: 1.1rem;animation: fadeInUp 1.2s ease;">
            Our vision is to inspire innovation and leadership by fostering a culture of creativity and collaboration, driving positive change in society.
        </p>
    </div>



    <!-- About IEEE SB GECW Section -->
    <div class="container mt-5 about_us" tabindex="0" data-aos="fade-up">
        <div class="row align-items-center">
            <!-- Left Content Section -->
            <div class="col-md-6 order-2 order-md-1">
                <div class="content aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="mb-4 text-primary" style="font-weight: bold; font-size: 1.8rem; animation: fadeInUp 1s ease;">
                        About IEEE SB GECW
                    </h3>
                    <p class="" style="text-align: justify; line-height: 1.8; font-size: 1.1rem; color: #555; animation: fadeInUp 1.2s ease;">
                        IEEE Student Branch GEC Wayanad explores unexplored territories, offering a stunning outlook and dedication
                        to excellence. We aim to build achievements, regional opportunities, conferences, and programs.
                        IEEE SB creates professional innovation in technical fields and offers ways to connect and collaborate
                        in the tech era, patching together innovation, inspiration, and interaction.
                    </p>
                    <!-- Achievements List -->
                    <ul class="list-unstyled" style="font-size: 1.1rem; line-height: 2; animation: fadeInUp 1.3s ease;">
                        <li><i class="fas fa-award" style="color: #FFD700;"></i> Received Outstanding Student Branch Award 2023 (Malabar Hub)</li>
                        <li><i class="fas fa-trophy" style="color: #FFD700;"></i> IEEE Regional Exemplary Student Branch Award 2022</li>
                        <li><i class="fas fa-star" style="color: #FFD700;"></i> IEEE Malabar Subsection Most Vibrant IEEE Student Branch Award 2022</li>
                        <li><i class="fas fa-medal" style="color: #FFD700;"></i> 2<sup>nd</sup> Darrel Chong Award 2022 - For Sight Camp</li>
                        <li><i class="fas fa-certificate" style="color: #FFD700;"></i> 2<sup>nd</sup> Inspiring IEEE SIGHT Branch Award for the year 2023</li>
                    </ul>
                </div>
            </div>
            <!-- Right Image Section -->
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <div class="img-box text-center">
                    <img src="https://images.pexels.com/photos/2422290/pexels-photo-2422290.jpeg?cs=srgb&dl=pexels-jopwell-2422290.jpg&fm=jpg" class="img-fluid rounded shadow-lg" alt="IEEE SB GECW Team" style="max-width: 100%; height: auto; transition: transform 0.3s;" data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
    </div>

    <!-- Partner Logos Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Partner Logos -->
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="{{route('mtts.index')}}" class="hover-scale" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/mtts_logo.png') }}" class="img-fluid image-container" alt="MTTS Logo">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="{{route('computer.index')}}" class="hover-scale" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/images/csociety_logo.png') }}" class="img-fluid image-container" alt="CSociety Logo" style=" height: auto; width: 550px;">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="{{route('aps.index')}}" class="hover-scale" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/images/aps_logo.png') }}" class="img-fluid image-container p-5" alt="APS Logo">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="{{route('wie.index')}}" class="hover-scale" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/images/wie_logo.png') }}" class="img-fluid image-container p-5" alt="WIE Logo">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <a href="{{route('sight.index')}}" class="hover-scale" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('assets/images/sight_logo.png') }}" class="img-fluid image-container p-3" alt="SIGHT Logo">
                </a>
            </div>
        </div>

    </div>

    <!-- Propose an Event Section -->
    <div class="container mt-5 row">
    <!-- Left Content (Description) -->
    <div class="col-lg-8">
        <h3 class="text-primary fw-bold mb-3" style="font-family: 'Poppins', sans-serif; animation: fadeInUp 1s ease;">
            Propose an Event
        </h3>
        <p class="text-dark mb-4" style="font-size: 1.2rem; line-height: 1.8; animation: fadeInUp 1.2s ease; color: #6c757d;">
            Have a brilliant idea for an event? Share it with us! We value your creativity and enthusiasm in making a difference.
            Let’s work together to bring your vision to life.
        </p>
    </div>

    <!-- Right Content (Button) -->
    <div class="col-lg-4 d-flex justify-content-end align-items-center">
    <form action="{{ route('eventProposal.index') }}" method="GET">
        <button type="submit"
                class="btn btn-primary btn-lg rounded-pill shadow-lg propose-btn"
                style="animation: fadeInUp 1.3s ease;">
            Propose Now
        </button>
    </form>
</div>


</div>

</div>


<!-- Footer Section -->
@include('layouts.footer')

@endsection

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hover-scale:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    /* //propose button hover effect */

    /* Button Hover Effect */
    .propose-btn {
        background: linear-gradient(90deg, #007bff, #00b4ff);
        border: none;
        color: white;
        transition: all 0.3s ease-in-out;
    }

    .propose-btn:hover {
        background: linear-gradient(90deg, #00b4ff, #007bff);
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 123, 255, 0.3);
    }

    /* Animation Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>