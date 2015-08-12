@extends('app')

@section('content')

<script type="text/javascript" src="{{ asset('/js/medicion/medicion.js') }}" ></script>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<link href="{{ asset('/css/medicion/agregar.css') }}" rel="stylesheet">
<!--
 Estos javascripts siben para hacer funcionar al el calendario 
<script type="text/javascript" src="{{ asset('/js/usuario/editar/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/usuario/editar/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/usuario/editar/js/java.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/admin_user/css/bootstrap-datetimepicker.min.css') }}" />
 -->
<div class="topPerfil">
	<a href="/perfil/{{$id}}">
		<div class="list-menu" style="text-aline:center">
			<h3><span class="glyphicon glyphicon-arrow-left"></span> Atras</h3>
		</div>
	</a>
</div>
<div id='from_agregar_medicion'>


	@include('admin.partials.messagesErrors')
	
   	{!! Form::open(['route' => ['medicion.medicion.store'],'method' => 'POST']) !!}
   	<input type="hidden" name="id_usuario" value="{{$id}}">
	
    @include('medicion.medicion.partials.fields')
	<br/>
	<div class="row">
	    <div class="col-md-12 text-left">
			<br />
			<button class="btn btn-primary" id="bt_login">Agregar</button>
			<a class="btn" id="bt_cerrar" onclick="cancel({{$id}})">Cerrar</a>
		</div>
	</div>
    {!! Form::close() !!}
   
</div>


@endsection