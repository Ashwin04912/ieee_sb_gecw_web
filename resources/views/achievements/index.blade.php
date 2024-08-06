@include('layouts.app')
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IEEE SB GECW - Achievements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>
    <div class="container pt-5 my_container">
        <h2 align="center">ACHIEVEMENTS</h2>
        <div class=" d-flex justify-content-center">
            <hr style="width: 300px">
        </div>
        <br>

        <div class="row">
            @include('achievements.001_exampleLinus')
            @include('achievements.002_exampleElephant')
            @include('achievements.002_exampleElephant')
        </div>
        <div class="row">
            @include('achievements.000_emptyCard')
            @include('achievements.000_emptyCard')
            @include('achievements.000_emptyCard')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @include('layouts.footer')
</body>

</html>
