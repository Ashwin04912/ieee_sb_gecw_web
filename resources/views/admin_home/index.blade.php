<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: black;
            color: white;
            padding: 10px;
        }

        .header .logo {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .header .logout-button {
            background-color: white;
            color: black;
            border: none;
            padding: 5px 15px;
            font-size: 16px;
            cursor: pointer;
        }

        .header .logout-button:hover {
            background-color: #f8f9fa;
        }

        .offcanvas-header {
            background-color: black;
            color: white;
        }

        .offcanvas-body a {
            color: black;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 0;
            display: block;
        }

        .offcanvas-body a:hover {
            background-color: #f1f1f1;
            padding-left: 10px;
        }
    </style>
</head>
<body>

    <header class="header d-flex justify-content-between align-items-center">
        <div class="logo d-flex align-items-center">
            <button class="btn btn-outline-light me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                ☰
            </button>
            <img src="http://127.0.0.1:8000/assets/images/sb_logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top"> <!-- Reduced logo size -->
        </div>

        <form method="POST" action="{{ route('logout') }}" class="m-0">
            @csrf
            <button type="submit" class="logout-button">
                {{ __('Log Out') }}
            </button>
        </form>
    </header>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Admin Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#societies">Societies</a>
            <a href="#events">Events</a>
            <a href="#execom">Execom</a>
            <a href="#achievements">Achievements</a>
            <a href="#gallery">Gallery</a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="button">Edit</button>
            <button class="btn btn-outline-success" type="button">Save</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
