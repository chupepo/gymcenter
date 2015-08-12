@extends('app')

  @section('content')
  
  <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
  <script type="text/javascript" src="{{ asset('/js/usuario/usuario.js') }}" ></script>
  <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('/css/menuAdministrdor.css') }}" rel="stylesheet">-->

    <div class="contentAndMenu">
      <div class="aside">
          @include('cita.menu')
      </div>
      
      <div class="containe">
        <div class="divTableUsers" >
          @include('partials.tableUsers')
        </div>
        <div class="cita">
          @include('partials.cita')
        </div>
      </div>
    </div>

  @endsection

