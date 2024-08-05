<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
<script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">

<nav class="navbar navbar-margin-top navbar-expand-lg navbar-light hi shadow-lg" style="z-index: auto;">
    <div class="container-fluid fixed-top mt-0">
        <img src="{{ asset('assets/logo.png') }}" class="im-logo" height="110px" width="110px" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'selected' : '' }}">
                    <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'about.us' ? 'selected' : '' }}">
                    <a class="nav-link text-light" href="{{ route('about.us') }}">About Us</a>
                </li>
                
                <li class="nav-item {{ Route::currentRouteName() == 'events' ? 'selected' : '' }}">
                    <a class="nav-link text-light" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle data-bs-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Societies
                    </a>
                    <ul class="dropdown-menu" style="background-color: transparent;">
                        <li><a class="dropdown-item text-light" style="background-color: transparent;" href="#">Computer Society</a></li>
                        <li><a class="dropdown-item text-light" style="background-color: transparent;" href="#">Women In Engineering</a></li>
                        <li><a class="dropdown-item text-light" style="background-color: transparent;" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Achievements</a>
                </li>
                <li class="nav-item dropdown"  >
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Execom
                    </a>
                    <ul class="dropdown-menu"  style="background-color: transparent">
                        <li><a class="dropdown-item  text-light"  style="background-color: transparent"  href="#">Computer Society</a></li>
                        <li><a class="dropdown-item text-light"  style="background-color: transparent" href="#">Women In Engineering</a></li>
                        <li><a class="dropdown-item text-light"  style="background-color: transparent" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>