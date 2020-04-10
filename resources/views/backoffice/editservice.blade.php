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
        <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Service edit</h1>
    </div>
    
    <form class="container" action="/backoffice/{{$services -> id}}/updateservice" method="POST">
        @csrf
          <div class="form-group">
            <label for="">Nom du Service</label>
          <input type="text" value="{{$services-> name}}" class="form-control" name="name" id=""placeholder="Enter service name">
          </div>
          <div class="form-group">
            <label for="">Description du service</label>
            <input type="text" value="{{$services-> desc}}" class="form-control" name="desc" id="" placeholder="Enter Description">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
</body>
</html>

