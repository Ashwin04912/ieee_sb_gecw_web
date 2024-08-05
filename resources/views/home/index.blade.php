@extends('layouts.app')
@section('content')
<section class="bsb-hero-5 bsb-overlay img-fluid position-relative"
    style="background-image: url('{{ asset('assets/dummy-bg.jpg') }}'); height :104vh">


   {{-- @extends('layouts.navigation') --}}

    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                <h2 class="display-1 text-white text-center fw-bold mb-4">Dream of Success</h2>
                <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center">
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7">There are three ways to ultimate success: The first
                        way is to be kind. The second way is to be kind. The third way is to be kind.</span>
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn bsb-btn-2xl btn-outline-light">Get Started</button>
                </div>
            </div>
        </div>
    </div>


</section>
    

@include('layouts.footer')
@endsection 