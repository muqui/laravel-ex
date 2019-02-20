@extends('layouts.user')
@section('content')
        
       <div id="demo" class="carousel slide my-carousel" data-ride="carousel">

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
<div class="catalogo container-fluid text-center ">
  <div class ="row">
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/1.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/2.jpg') }}"  class="img-fluid" alt="">
        </a>
    </div>  
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/3.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>  
  
    <div class ="col-4 col-md-2 col-sm-4">
      <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/5.jpg') }}" class="img-fluid" alt="">
        </a>
    </div >
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/6.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/6.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>   
        
  </div>
  <div class ="row">
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/1.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/2.jpg') }}"  class="img-fluid" alt="">
        </a>
    </div>  
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/3.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>  
  
    <div class ="col-4 col-md-2 col-sm-4">
      <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/5.jpg') }}" class="img-fluid" alt="">
        </a>
    </div >
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/6.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>
    <div class ="col-4 col-md-2 col-sm-4">
       <a href="#" class="img-fluid">
          <img src="{{ URL::asset('image/6.jpg') }}" class="img-fluid" alt="">
        </a>
    </div>   
        
  </div>
</div>   

@endsection
