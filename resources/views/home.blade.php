@extends('welcome')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{ URL('images/img5.jpg') }}"class="d-block w-100"  height="540px"/>
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-info">Enjoy Wonderful Experience</h1>
        <p class="text-black">Learn ,Enhance & Improve your Skills in <span class="text-warning">E-Learn</span> environment</p>
        <button class="btn btn-warning">View Courses</button>
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ URL('images/img7.jpg') }}" class="d-block w-100" height="540px"/>
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-info">Enjoy Wonderful Experience</h1>
        <p class="text-black">Learn ,Enhance & Improve your Skills in <span class="text-warning">E-Learn</span> environment</p>
        <button class="btn btn-warning">View Courses</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL('images/img6.jpg') }}" class="d-block w-100" height="540px"/>
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-info">Enjoy Wonderful Experience</h1>
        <p class="text-black">Learn ,Enhance & Improve your Skills in <span class="text-warning">E-Learn</span> environment</p>
        <button class="btn btn-warning">View Courses</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection