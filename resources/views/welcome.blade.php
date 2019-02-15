<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> 
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script> 
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
       <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
       
        
    </head>
    <body>
       
            
       <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::asset('image/red-dead-redemption-2.jpg') }}" alt="red dead redemption 2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('image/fifa-19.jpg') }}" alt="FIFA 19" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('image/Resident-Evil-2.jpg') }}" alt="Resident Evil 2" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
            
       
    </body>
</html>
