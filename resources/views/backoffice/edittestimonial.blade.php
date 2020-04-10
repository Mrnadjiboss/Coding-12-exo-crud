<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css2/app.css ">
    <link rel="stylesheet" href="/css/style.css ">
    <title>Document</title>
</head>
<body>

    <div style="">
        <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Testimonial edit</h1>
    </div>
    
    <form class="container" action="/backoffice/{{$testimonials -> id}}/updatetestimonial" method="POST">
        @csrf
          <div class="form-group">
            <label for="">Nom </label>
          <input type="text" value="{{$testimonials-> name}}" class="form-control" name="name" id=""placeholder="Enter service name">
          </div>
          <div class="form-group">
          <label for="">job</label>
            <input type="text" value="{{$testimonials-> job}}" class="form-control" name="job" id="" placeholder="Enter Description">
            <label for="">img_path</label>
            <input type="text" value="{{$testimonials-> img_path}}" class="form-control" name="img_path" id="" placeholder="Enter Description"> 
            <input type="text" value="{{$testimonials-> text}}" class="form-control" name="text" id="" placeholder="Enter Description">

            {{-- <P name = "text"> {{$testimonials -> text}} </P> --}}


            <img src="{{$testimonials-> img_path}}" alt="">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
</body>
</html>