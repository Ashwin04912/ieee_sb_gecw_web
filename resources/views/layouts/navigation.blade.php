<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script> 
 <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">


<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
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
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Societies
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-light" href="#">Computer Society</a></li>
              <li><a class="dropdown-item text-light" href="#">Women In Engineering</a></li>
              <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Achievements</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Execom
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-light" href="#">Computer Society</a></li>
              <li><a class="dropdown-item text-light" href="#">Women In Engineering</a></li>
              <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>