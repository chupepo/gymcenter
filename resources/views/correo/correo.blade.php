@extends('app')
@section('content')
<link href="{{ asset('/css/correo/correo.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/js/correo/correo.js') }}" ></script>
  <div class="contentCorreo">
    <div class="div-containe-menu-correos">
      <div class="div-containe-correo">
        <div class="typeCorreos">
          <div class="topcorreos">
            <h3>
              <a href="/home"><span class="glyphicon glyphicon-arrow-left">Atras</a>
              <a href="#" id="correo-peronal">Correo Personal</a>
              <a href="#" id="correo-recordatorio">Correo Recordatorio</a>
            </h3>
          </div>
          <div class="forms-correos">
            @include('correo.partials.correoPersonal')
            @include('correo.partials.correoRecordatorio')
          </div>
        </div>
      </div>
    </div>  
  </div>
@endsection
