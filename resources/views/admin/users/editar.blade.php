@extends('app')

@section('content')
<script type="text/javascript" src="{{ asset('/js/usuario/usuario.js') }}" ></script>

 <!--Estos javascripts siben para hacer funcionar al el calendario -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin_user/css/bootstrap-datetimepicker.min.css') }}" />

<link href="{{ asset('/css/admin_user/editar.css') }}" rel="stylesheet">
<div id='from_editar'>
	<div class="panel-heading">Editar usuario: {{$user->getFullNameAttribute()}}</div>
    
	@include('admin.partials.messagesErrors')
   
   	{!! Form::model($user,['route' => ['admin.users.update',$user->id],'method' => 'PUT']) !!}
   
    @include('admin.users.partials.fields')
	<div class="row">
	    <div class="col-md-12 text-left buttonsEditar">
			<button class="btn btn-primary" id="bt_login">Editar</button>
			<a href="#" class="btn" id="bt_cerrar" onclick="cancel()">Cerrar</a>
		</div>
	</div>
    {!! Form::close() !!}
</div>

<!--Estos javascripts sirben para hacer funcionar al el calendario -->
    <script type="text/javascript" src="{{ asset('/js/calendar/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/es.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript">
    	$('#datetimepicker7').datetimepicker();
	    $('#datetimepicker7').data("DateTimePicker").minDate();
	</script>

@endsection