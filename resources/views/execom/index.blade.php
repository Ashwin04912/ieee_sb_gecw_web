@extends('layouts.app')

@section('content')
 <div class="container">
    <h2 class="pt-5 pb-5 text-center">EXECOM</h2>
    </div>
    <div class="row justify-content-center">
        @for ($i = 0; $i < 16; $i++)
        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
            <div class="profile-card text-center">
                <img src="{{asset('assets/images/ashwin.jpg') }}" alt="Profile Image" class="img-fluid">
                <div class="card-body">
                    <h5 class="card-title">Ashwin</h5>
                    <p class="card-text">Freelance Developer</p>
                    <div class="social-icons d-flex justify-content-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
 </div>

    


@include('layouts.footer')

@endsection
