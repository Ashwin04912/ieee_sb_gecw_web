<nav class="navbar navbar-margin-top navbar-expand-lg navbar-light hi">
    <div class="container-fluid">
        <img src="{{ asset('assets/logo.jpeg') }}" height="110px" width="110px" alt="" srcset="">
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
