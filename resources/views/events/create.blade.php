
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container m-4">


      <form action="{{route('events.store')}}" method="post" enctype="multipart/form-data">
        @csrf
<h1 class="mb-5">Add New Events </h1>
        <div class="mb-3">
          <label for="" class="form-label">Title</label>
          <input type="text" class="form-control" id="" name="title" placeholder="Enter a title">
         @error('title')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Description</label>
          <input type="text" class="form-control" id="" name="title" placeholder="Enter a description">
         @error('description')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      
        <div class="mb-3">
        <label for="">First Image</label>
        <input type="file" class="form-control" name="image1">
        @error('image1')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="mb-3">
          <label for="">Second Image</label>
          <input type="file" class="form-control" name="image2">
          @error('image2')
            <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          <div class="mb-3">
            <label for="">Third Image</label>
            <input type="file" class="form-control" name="image3">
            @error('image3')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

        <button class="submit">submit</button>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>