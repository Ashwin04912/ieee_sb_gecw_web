<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container m-4">

        <form action="{{ route('execom.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-5">Add New Execom</h1>

            @if (session()->has('error'))
                <div class="alert alert-error">
                    {{ session()->get('error') }}
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Name of the person</label>
                <input type="text" class="form-control" id="name" name="name" placeholder=""
                    value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Execome role</label>
                <input type="text" class="form-control" id="title" name="title" placeholder=""
                    value="{{ old('title') }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <br>
            <div class="mb-3">
                <label class="form-label">Social Media</label>

                <div class="row">
                    <div class="col-sm-1">
                        <label for="github" class="form-label">Github: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="github" name="github" placeholder="https://github.com/person"
                            value="{{ old('github') }}">
                        @error('github')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-1">
                        <label for="insta" class="form-label">Instagram: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="insta" name="insta" placeholder="https://instagram.com/person"
                            value="{{ old('insta') }}">
                        @error('insta')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-1">
                        <label for="linkedin" class="form-label">Linkedin: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/person"
                            value="{{ old('linkedin') }}">
                        @error('linkedin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @if (session()->has('error'))
                <div class="alert alert-error">
                    {{ session()->get('error') }}
                </div>
            @endif
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
