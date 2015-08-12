@extends('app')


  @section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/cita/cita.css') }}">
  <a href="/home">
    <div class="list-menu" style="text-aline:center">
      <h3><span class="glyphicon glyphicon-arrow-left"></span> Atras</h3>
    </div>
  </a>
  <div class="tablecitas">
    <div class="finalizarCita">
      {!! Form::open(array('url' => 'updateEstado','role'=>'form','method' => 'POST','id'=>'btn-cita')) !!}
          <h3>{!! Form::label('entrenador', '¿Desea finalizar esta cita?',
                  array('class' => 'control-label')) 
          !!}</h3>
          <input type="hidden" name="id" id="id" value="">
          <div class="rowS">
            <div class="col-md-12 text-left">
            <br />
            <button class="btn btn-primary" id="bt_login">Finalizar</button>
            <a class="btn" id="bt_cancelar" onclick="cancelar()">Cancelar</a>
          </div>
        </div>
      {!! Form::close() !!}
    </div>

    @if (count($citas) >= 1)
    <h3><label>Citas Pendientes</label></h3> 
    <table class="table table-striped">
        <thead>
          <tr>
              <th>#</th>
              <th>Entrenador</th>
              <th>Dia de la cita</th>
              <th>Hora en que finaliza</th>
              <th>Con</th>
              <th>Estado</th>
              <th>Editar</th>
          </tr>
        </thead>
        <tbody>

          @foreach($citas as $cita => $value)
           
            <tr data-id="{{$value->id}}">
              <td>{{$cita+1}}</td>
              <td>{{$value->entrenador}}</td>
              <td>{{$value->fecha}}</td>
              <td>{{$value->termina}}</td>
              <td>{{$value->nombre}} {{$value->apellido1}}</td>
              <td><a href="#!" id="{{$value->id}}"class="citaFinalizar">Finalizar cita</a></td>
              <td><a href="cita/cita/{{$value->id}}/edit" class="btn btn-primary">Editar</a></td>
              
            </tr>
          @endforeach
        </tbody>
    </table>
    @else
      <h2>No hay citas pendientes</h2>
    @endif
  </div>
<script type="text/javascript" src="{{ asset('/js/cita/tablecitas.js') }}"></script>

@endsection