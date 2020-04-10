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

    <div class="container-fluid">
        <nav class="navbar navbar-light bg-primary">
            
            <p class="text-dark h1 text-center">Database Editor</p>
          </nav>
    </div>
    <hr>

    <div class="container">
        
        
    </div>
    
    @foreach ($intro ->slice(0,1) as $intros)
    <div class="container">
        <img src= {{$intros -> img_path}} alt="">
        <a href="/backoffice/{{$intros -> id}}/delete" class="btn btn-lg btn-warning">delete</a> 
       
    </div>
     @endforeach

<hr>
<hr>

<nav class="navbar navbar-light bg-primary">
    <button class="btn btn-primary btn-outline-success text-dark">entrer</button>
    <p class="text-dark h1 text-center">services</p>
  </nav>

  @foreach ($services as $service)
  <div class="container">
      <p>{{$service -> name}} </p>
      <p>{{$service -> desk}} </p>
  </div>
  <a href="/backoffice/{{$service -> id}}/edit" class="btn btn-lg btn-warning">edit</a>
  
  <a href="/backoffice/{{$service -> id}}/deleteService" class="btn btn-lg btn-warning">delete</a>
   @endforeach
<hr>
<hr>
   <nav class="navbar navbar-light bg-primary">
    <button class="btn btn-primary btn-outline-success text-dark">entrer</button>
    <p class="text-dark h1 text-center">portfolio</p>
  </nav>

  @foreach ($portfolios as $portfolio)
  <div class="container">
  <img src="{{$portfolio -> img_path}}" alt="">
  </div>
  <a href="/backoffice/{{$portfolio -> id}}/deletePortfolio" class="btn btn-lg btn-warning">delete</a>
<a href="/backoffice/{{$portfolio -> id}}/editportfolio" class="btn btn-lg btn-warning">edit</a>
   @endforeach

   <hr>
<hr>
   <nav class="navbar navbar-light bg-primary">
    <button class="btn btn-primary btn-outline-success text-dark">entrer</button>
    <p class="text-dark h1 text-center">testimonials</p>
  </nav>

  @foreach ($testimonials as $testimonial)
  <div class="container">
  <img src="{{$testimonial -> img_path}}" alt="">
  <p>{{$testimonial -> jobTitle}}</p>
  <p>{{$testimonial -> name}}</p>
  <p>{{$testimonial -> text}}</p>
  <p></p>
  </div>
  <a href="/backoffice/{{$testimonial -> id}}/edittestimonial" class="btn btn-lg btn-warning">edit</a>
  <a href="/backoffice/{{$testimonial -> id}}/deleteTestimonial " class="btn btn-lg btn-warning">delete</a>
   @endforeach


   <nav class="navbar navbar-light bg-primary">
    <button class="btn btn-primary btn-outline-success text-dark">entrer</button>
    <p class="text-dark h1 text-center">team</p>
  </nav>

  @foreach ($teams as $team)
  <div class="container">
  <img src="{{$team -> img_path}}" alt="">
  <p> {{$team -> name}} </p>
  <p> {{$team -> jobTitle}} </p>

  </div>
  <a href="/backoffice/{{$team -> id}}/editteam" class="btn btn-lg btn-warning">edit</a>
  <a href='/backoffice/{{$team -> id}}/deleteTeam' class="btn btn-lg btn-warning">delete</a>
   @endforeach
 
 @yield('content')
    

    
</body>
</html>