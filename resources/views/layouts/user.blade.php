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
       
            <nav class="navbar navbar-expand-lg navbar-light bg-light my-nav" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        
          <div class="container-fluid">
            @yield('content')
        </div>

    </body>
</html>