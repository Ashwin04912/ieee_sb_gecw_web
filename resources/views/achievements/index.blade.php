@extends('layouts.app')

@section('content')

<div class="m-5 p-5">
    <h1 class="pt-5 ">ACHIEVEMENTS</h1>
    <hr>

    <div class="container-fluid mt-5">
        <div class="row">
            @foreach ($datas as $achievement)
                <div class="col-6 col-md-12 col-lg-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 600px;">
                        <img src="{{ asset('uploads/images/achievements/' . $achievement->image) }}" class="card-img-top zoom-image" alt="Achievement Image">
                        <div class="card-body">
                            <p class="card-text">{{ $achievement->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection

<style>
    .card {
        overflow: hidden; /* Ensures content doesn’t spill out of the card */
    }

    hr {
        border: 0;
        height: 3px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }

    .container h1 {
        font-family: 'Raleway';
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: -1px;
        font-size: 50px;
    }

    .zoom-image {
        transition: transform 0.3s ease; /* Smooth transition for zoom effect */
    }

    .card:hover .zoom-image {
        transform: scale(1.1); /* Adjust the scale value as needed */
    }
</style>
