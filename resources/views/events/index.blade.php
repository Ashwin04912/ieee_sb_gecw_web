@extends('layouts.app')

@section('content')

<!-- Include Bootstrap 5 CSS and JS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> --}}

<div class="container pt-5 mt-5 py-3">
    <h1 class="pt-5">Events</h1>
    <hr>
    <div class="pt-3"></div>

    @for ($i = 0; $i < 5; $i++) <!-- Adjust the loop counter to generate more or fewer cards -->
        <!-- Card Start -->
        <div class="card mb-4"> <!-- Add margin bottom for spacing between cards -->
            <div class="row g-0"> <!-- Use g-0 to remove gutter spacing between rows -->
                <div class="col-md-7 px-3">
                    <div class="card-body">
                        <h4 class="card-title">Flutter Workshop {{$i + 1}}</h4> <!-- Display unique title for each card -->
                        <p class="card-text">
                            Fusce in tempor lorem. Donec turpis felis, efficitur quis sollicitudin at, venenatis sed metus. Duis a elit blandit mauris placerat dapibus. Donec malesuada, velit et commodo fringilla, ligula sem pulvinar purus, at fermentum velit mi eu erat. Nullam aliquam dui congue, luctus velit eu, dapibus tortor. Cras ligula neque, vulputate dictum finibus eget, volutpat ut nulla. Duis ut ex aliquet, elementum nisi in, efficitur lorem. Maecenas orci dui, lacinia et congue non, hendrerit sed est. Ut non est ipsum. Ut nulla nibh, gravida a tincidunt gravida, porta non turpis.
                        </p>
                        <br>
                        <div class="container">
                            <div class="d-flex">
                                <i class="fas fa-calendar-alt me-3" style="font-size: 20px;"></i> <!-- Calendar icon -->
                                <div>
                                    <span class="date-text">August 10, 2024</span> <!-- Date text -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel start -->
                <div class="col-md-5">
                    <div id="CarouselTest{{$i}}" class="carousel slide" data-bs-ride="carousel"> <!-- Unique ID for each carousel -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#CarouselTest{{$i}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#CarouselTest{{$i}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#CarouselTest{{$i}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://picsum.photos/450/300?image=1072" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos/450/300?image=855" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos/450/300?image=355" alt="Third slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#CarouselTest{{$i}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#CarouselTest{{$i}}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- End of carousel -->
            </div>
        </div>
        <!-- End of card -->
    @endfor

</div>

@include('layouts.footer')
@endsection
