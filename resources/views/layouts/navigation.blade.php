<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery here -->
    <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>


<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container-fluid ScrollCss" id="ScrollJq">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="100" height="100"
                class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="1.5em" height="1.5em" viewBox="0 0 48 48">
                    <linearGradient id="ULyvxr9k_jV3hToEf4Ujga_6uJdcB0tVRwZ_gr1" x1="12.066" x2="34.891" y1=".066" y2="22.891" gradientUnits="userSpaceOnUse"><stop offset=".237" stop-color="#3bc9f3"></stop><stop offset=".85" stop-color="#1591d8"></stop></linearGradient><path fill="url(#ULyvxr9k_jV3hToEf4Ujga_6uJdcB0tVRwZ_gr1)" d="M43,15H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,14.1,44.1,15,43,15z"></path><linearGradient id="ULyvxr9k_jV3hToEf4Ujgb_6uJdcB0tVRwZ_gr2" x1="12.066" x2="34.891" y1="12.066" y2="34.891" gradientUnits="userSpaceOnUse"><stop offset=".237" stop-color="#3bc9f3"></stop><stop offset=".85" stop-color="#1591d8"></stop></linearGradient><path fill="url(#ULyvxr9k_jV3hToEf4Ujgb_6uJdcB0tVRwZ_gr2)" d="M43,27H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,26.1,44.1,27,43,27z"></path><linearGradient id="ULyvxr9k_jV3hToEf4Ujgc_6uJdcB0tVRwZ_gr3" x1="12.066" x2="34.891" y1="24.066" y2="46.891" gradientUnits="userSpaceOnUse"><stop offset=".237" stop-color="#3bc9f3"></stop><stop offset=".85" stop-color="#1591d8"></stop></linearGradient><path fill="url(#ULyvxr9k_jV3hToEf4Ujgc_6uJdcB0tVRwZ_gr3)" d="M43,39H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,38.1,44.1,39,43,39z"></path>
                    </svg>
            </span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
            style="background-color: transparent">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                    style="background-color: red"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'selected' : '' }}">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'about.us' ? 'selected' : '' }}">
                        <a class="nav-link text-light" href="{{ route('about.us') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Societies
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Computer Society</a></li>
                            <li><a class="dropdown-item" href="#">Women In Engineering</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'events' ? 'selected' : '' }}">
                        <a class="nav-link text-light" href="{{ route('events') }}">Events</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Execom
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Computer Society</a></li>
                            <li><a class="dropdown-item" href="#">Women In Engineering</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'achievements' ? 'selected' : '' }}">
                        <a class="nav-link text-light" href="{{ route('achievements') }}">Achievements</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>



<script>
  $(window).scroll(function () {
      if ($(window).scrollTop() >= 150) {
          $('#ScrollJq').css('background', 'black');
      } else {
          $('#ScrollJq').css('background', 'transparent');
      }
  });

    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000); // The number 1000 is the duration of the scroll in milliseconds
            }
        });
    });

</script>
