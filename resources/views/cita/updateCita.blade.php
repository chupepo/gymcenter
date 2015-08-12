@extends('app')


  @section('content')	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin_user/css/bootstrap-datetimepicker.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/cita/updateCita.css') }}" />
    
    <div class="citaContent">
    	<h3><p>Actualizar una cita</p></h3>
    	<br/>
    	{!! Form::open(array('url' => 'crearCita','role'=>'form','method' => 'POST','id'=>'btn-cita')) !!}
    		<h3>{!! Form::label('entrenador', 'Numero de Cédula',
								array('class' => 'control-label')) 
				!!}</h3>
    		<input type="text" id="cedula" name="cedula" maxlength="9" class="form-control" placeholder="Digite la cédula del usuario">
		{!! Form::close() !!}
		<br/>
		@include('admin.partials.messagesErrors')
    	<!--Form::open(['route' => ['cita.cita.store'],'method' => 'POST'])-->

    	{!! Form::model($cita,['route' => ['cita.cita.update',$cita->id],'method' => 'PUT']) !!}
    	
    		<div class="maybeUsers">
				<br/>
				<label><h3>Usuario</h3></label><br/>
				<br/>
				<fieldset>
					<label id="radioUser">
						<input type='radio' name='id_usuario' value="{{$user->id}}" checked style="">  <img src="{{ asset($user->imagen)}}"style="width:30px;height: 30px;"> {{$user->nombre}} {{$user->apellido1}}
					</label>
					<hr/>
					<br/>
				</fieldset>
			</div>
    		<div class="from-group">
				<div class="divficha">
					<h3>{!! Form::label('fecha_cita', 'Dia de la cita',
									array('class' => 'control-label')) 
					!!}</h3>
					<div class='input-group date' id='datetimepicker7'>
						{!! Form::text('fecha_inicio', null,['maxlength'=>'20','minlength'=>'4','class' => 'form-control','id' => 'txt_fecha_nacimiento','placeholder'=>'Fecha de Nacimiento', 'required'  ])!!}
						<span class="input-group-addon date2" >
		    				<span class="glyphicon glyphicon-calendar calendarFecha"></span>
		    			</span>
		    		</div>
	    		</div>
	    		<div class="divHora">
					<h3>{!! Form::label('Hora_finaliza', 'Finaliza',
									array('class' => 'control-label')) 
					!!}</h3>
					<div class='input-group date' id='datetimepicker3'>
						{!! Form::text('termina', null,['maxlength'=>'20','minlength'=>'4','class' => 'form-control','id' => 'txt_hora_termina','placeholder'=>'Hora en que termina', 'required'  ])!!}
					    <span class="input-group-addon">
					        <span class="glyphicon glyphicon-time"></span>
					    </span>
					</div>
				</div>
			</div>

			<div class="from-group">
				<h3>{!! Form::label('entrenador', 'Entrenador',
								array('class' => 'control-label')) 
				!!}</h3>
				{!! Form::text('entrenador', null,['class' => 'form-control','id' => 'txt_entrenador','placeholder'=>'Entrenador', 'required' ])!!}
			</div>
			<br/>
			<div class="rowS">
			    <div class="col-md-12 text-left">
					<br />
					<button class="btn btn-primary" id="bt_login">Actualizar</button>
					<a class="btn" id="bt_cancelar" onclick="cancel()">Cancelar</a>
				</div>
			</div>
			<br/><br/>
	{!! Form::close() !!}
    </div>

<!--Estos javascripts sirben para hacer funcionar al el calendario -->
    <script type="text/javascript" src="{{ asset('/js/calendar/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/es.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/cita/cita.js') }}"></script>

@endsection