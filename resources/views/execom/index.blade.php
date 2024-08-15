@extends('layouts.app')

@section('content')
    <div class="container pt-5 mt-5">
        <h1 class="pt-5">EXECOM</h2>
            <hr>

            <div class="row justify-content-center">
                @for ($i = 0; $i < 16; $i++)
                    <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                        <div class="profile-card text-center">
                            <img src="{{ asset('assets/images/ashwin.jpg') }}" alt="Profile Image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Ashwin</h5>
                                <p class="card-text">Freelance Developer</p>
                                <div class="social-icons d-flex justify-content-center">
                                    <a href="#"><i class="fab fa-github"></i></a>


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
