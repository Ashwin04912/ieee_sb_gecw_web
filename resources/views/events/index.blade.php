@extends('layouts.app')

@section('content')
    <!-- Include Bootstrap 5 CSS and JS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> --}}

    <div class="m-5 p-5">
        <h1 class="pt-5">Events</h1>
        <hr>
        <div class="pt-3"></div>

        @foreach ($datas as $data)
            <div class="card mb-4"> <!-- Add margin bottom for spacing between cards -->
                <div class="row g-0"> <!-- Use g-0 to remove gutter spacing between rows -->
                    <div class="col-md-7 px-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->title }}</h4> <!-- Display unique title for each card -->
                            <p class="card-text">
                                {{ $data->description }}
                            </p>
                            <br>
                            <div class="container">
                                <div class="d-flex">
                                    <i class="fas fa-calendar-alt me-3" style="font-size: 20px;"></i> <!-- Calendar icon -->
                                    <div>
                                        <span class="date-text">{{$data->date}}</span> <!-- Date text formatted -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel start -->
                    <div class="col-md-5">
                        <div id="CarouselTest{{ $data->id }}" class="carousel slide" data-bs-ride="carousel">
                            <!-- Unique ID for each carousel -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" style="height: 393px; object-fit: cover;"
                                        src="{{ asset('uploads/images/events/' . $data->image1) }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height: 393px; object-fit: cover;"
                                        src="{{ asset('uploads/images/events/' . $data->image2) }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height: 393px; object-fit: cover;"
                                        src="{{ asset('uploads/images/events/' . $data->image3) }}" alt="Third slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#CarouselTest{{ $data->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- End of carousel -->
                </div>
            </div>
        @endforeach
    </div>

    @include('layouts.footer')
@endsection
