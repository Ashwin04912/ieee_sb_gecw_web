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
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Execom
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Computer Society</a></li>
                            <li><a class="dropdown-item" href="#">Women In Engineering</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Achievements</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('#ScrollJq').css('background', 'black');
        } else {
            $('#ScrollJq').css('background', 'transparent');
        }
    });
</script>


