
@extends('app')

@section('content')
<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio1.png') }}" alt="Chania" width="50%" height="200px">

      </div>

      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio2.jpg') }}" alt="Chania" width="50%" height="200px">
      </div>
    
      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio3.jpg') }}" alt="Chania" width="50%" height="200px">
      </div>

      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio4.jpg') }}" alt="Chania" width="50%" height="200px">
      </div>

      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio5.jpg') }}" alt="Chania" width="50%" height="200px">
      </div>

      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio6.jpg') }}" alt="Chania" width="50%" height="200px">
      </div>

      <div class="item">
        <img src="{{ asset('/imgs/Gym-picturures/gimnasio7.jpg') }}" alt="Flower" width="50%" height="200px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



@endsection
