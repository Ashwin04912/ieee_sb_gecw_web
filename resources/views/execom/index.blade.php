@extends('layouts.app')

@section('content')
    <div class="m-5 pt-5">
        <h1 class="pt-5">EXECOM</h2>
            <hr>
            <div class="row justify-content-center p-4 m-5">
                @foreach ($datas as $data)
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                        <div class="profile-card text-center">
                            <img src="{{ asset('uploads/images/execoms/' . $data->image) }}" alt="Profile Image"
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
@endsection
