@extends('layouts.app')


@section('content')
    


  
    <div class="container mt-5" >
        <div class="row pt-5">
            <h2 class="pt-5 justify-content-center align-items-center" >ACHIEVEMENTS</h2>
        </div>
       
       
  
     <div class="container-fluid mt-5">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://ieeesbcea.com/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-13-at-00.52.26-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    
        
        

 
    @include('layouts.footer')
    @endsection

