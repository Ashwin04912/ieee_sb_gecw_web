@extends('layouts.app')

@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->



<!-- Page Content -->
<div class="m-5 pt-5">
    <h1 class="pt-5 mt-5">Photo/Gallery</h1>
    <hr>

    <div class="row mt-5">
        @php

        @endphp

        @foreach ($datas as $data)
            <div class="col-lg-3 col-md-6 col-xs-12 thumb">
                <a href="{{ asset('uploads/images/gallery/' . $data->image) }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('uploads/images/gallery/' . $data->image) }}" class="zoom img-fluid" alt="Image">
                </a>
            </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')

@endsection
