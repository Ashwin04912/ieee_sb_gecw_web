@extends('layouts.app')

@section('content')

<div class="m-5 p-5">

    <h1 class="pt-5 ">ACHIEVEMENTS</h2>
        <hr>
    
   
    <div class="container-fluid mt-5">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-6 col-md-12 col-lg-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 600px;">
                        <img src="https://ieeesbcea.com/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-13-at-00.52.26-4.jpg" class="card-img-top zoom-image" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            @endfor
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
