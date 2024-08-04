<section class="bsb-hero-5 px-3 bsb-overlay" style="background-image: url('https://e1.pxfuel.com/desktop-wallpaper/281/572/desktop-wallpaper-10-chill-horizon-anime-thumbnail.jpg');">
     
<nav class="navbar navbar-margin-top navbar-expand-lg navbar-light hi">
    <div class="container-fluid">
        <img src="{{ asset('assets/logo.png') }}" height="110px" width="110px" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'selected' : '' }}">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'about.us' ? 'selected' : '' }}">
                    <a class="nav-link" href="{{ route('about.us') }}">About Us</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'events' ? 'selected' : '' }}">
                    <a class="nav-link" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Execom
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Achievements</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Achievements</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Societies
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Computer Society</a></li>
                        <li><a class="dropdown-item" href="#">Women In Engineering</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    
    <div class="container">
      <div class="row justify-content-md-center align-items-center">
        <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
          <h2 class="display-1 text-white text-center fw-bold mb-4">Dream of Success</h2>
          <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center">
            <span class="col-12 col-sm-10 col-md-8 col-xxl-7">There are three ways to ultimate success: The first way is to be kind. The second way is to be kind. The third way is to be kind.</span>
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn bsb-btn-2xl btn-outline-light">Free Consultation</button>
          </div>
        </div>
      </div>
    </div>
  

</section>