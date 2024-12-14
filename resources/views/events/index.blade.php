@extends('layouts.app')

@section('content')
    <div class="entire mt-5 pt-5">
        <style>
            .entire{
                margin-left: 30px;
                margin-right: 30px;
            }
        </style>
      
        <h1 class="fw-bold pt-5">Events</h1>
        <hr>
        <div class="row justify-content-center pt-4">
            @foreach ($datas as $data)
                <div class="card mb-5 border-0 shadow-sm rounded-3">
                    <div class="row g-0 align-items-center">
                        <!-- Text Section -->
                        <div class="col-md-6 px-4 py-4 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-3 text-primary">{{ $data->title }}</h4>
                                <p class="card-text text-muted mb-4" style="line-height: 1.6; text-align: justify;">
                                    {{ $data->description }}
                                </p>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt me-2 text-danger"></i>
                                    <span class="text-secondary fw-semibold">{{ $data->date }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- Image Carousel Section -->
                        <div class="col-md-6">
                            <div id="CarouselTest{{ $data->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner rounded-3">
                                    @if($data->image1)
                                        <div class="carousel-item active">
                                            <img src="{{ asset('uploads/images/events/' . $data->image1) }}" 
                                                 class="d-block w-100" 
                                                 alt="First slide" 
                                                 style="height: 350px; object-fit: cover;">
                                        </div>
                                    @endif
                                    @if($data->image2)
                                        <div class="carousel-item">
                                            <img src="{{ asset('uploads/images/events/' . $data->image2) }}" 
                                                 class="d-block w-100" 
                                                 alt="Second slide" 
                                                 style="height: 350px; object-fit: cover;">
                                        </div>
                                    @endif
                                    @if($data->image3)
                                        <div class="carousel-item">
                                            <img src="{{ asset('uploads/images/events/' . $data->image3) }}" 
                                                 class="d-block w-100" 
                                                 alt="Third slide" 
                                                 style="height: 350px; object-fit: cover;">
                                        </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
@endsection
