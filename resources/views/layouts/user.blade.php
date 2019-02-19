<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> 
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script> 
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>  
         

    </head>
    <body>
       
            <nav class="navbar navbar-expand-lg  bg-light my-nav " >
  <a class="navbar-brand fuente-verde" href="#">Navbar</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Menu</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
      <li class="nav-item">
        <a class="nav-link  fuente-verde" href="#">XBOX ONE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">PS4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">XBOX 360</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">PS3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">WII U</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">SWITCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">3DS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">VITA</a>
      </li>
       <li class="nav-item">
        <a class="nav-link   fuente-verde" href="#">OTROS</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        
          <div class="container-fluid ">
            @yield('content')
        </div>


<div class="container-fluid  text-white ">
  <div class="row   align-items-end pie  ">
    <div class="col-12 col-md-4 col-sm-4  ">
      <p class="text-center">
        Dirección Calle 0000, Tel. 000 000 00
      </p>  
      <p class="text-center">
        coronanavarro@gmail.com
      </p>       
    </div>  
    <div class="col-12 col-md-4 col-sm-4  ">
      <p class="text-center">
        Alberto Corona 2019.
      </p>  
           
    </div>
    <div class="col-12 col-md-4 col-sm-4   ">
      <p class="text-center">
        Terminos y condiciones
      </p>  
           
    </div>
  </div>
</div>




    </body>
</html>