 <!--Estos javascripts siben para hacer funcionar al el calendario -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin_user/css/bootstrap-datetimepicker.min.css') }}" />

<div class="divDatosPagos">

	<div class="alert alert-danger error">
		
	</div>
      {!! Form::open(array('url' => 'saveDatosPago','role'=>'form','method' => 'POST','id'=>'btn-datos-pago')) !!}
          
           {!! Form::hidden('id_usuario', $user->id,['class' => 'form-control','id' => 'txt_nombre','placeholder'=>'Nombre', 'required' ])!!}
      		<input-group-add
          <h3>{!! Form::label('entrenador', 'Editar los datos de pago',
                  array('class' => 'control-label')) 
          !!}</h3>
				
				<div class="from-group">
					{!! Form::label('fecha_nacimiento', 'Fecha de pago',
									array('class' => 'control-label')) 
					!!}
					<div class='input-group date' id='datetimepicker7'>
						{!! Form::text('fecha_pago', $user->fecha_pago,['maxlength'=>'20','minlength'=>'4','class' => 'form-control','id' => 'txt_fecha_pago','placeholder'=>'Fecha de Pago', 'required'  ])!!}
						<span class="input-group-addon date2" >
		    				<span class="glyphicon glyphicon-calendar calendarFecha"></span>
		    			</span>
		    		</div>
				</div>
				<br>
          		<div class="from-group">
					<label for="sel1">Tipo de pago</label>
					{!! Form::select('tipo_pago', ['mensual' => 'mensual','quincenal' => 'quincenal'],$user->tipo_de_pago, ['class' => 'form-control','id'=>'txt_tipo_pago']) !!}

				</div>
				<br>

				<div class="from-group">
					<label for="sel1">Dia de pago</label>
					{!! Form::selectRange('dia_pago', 1, 31, $user->dia_de_pago, ['class' => 'form-control','id'=>'txt_dia_pago']) !!}
				</div>
          <div class="row">
            <div class="col-md-12 text-left">
            <br />
           <a class="btn btn-primary" id="bt_login" onclick="saveDatosPago();">Guardar</a>
             <!--<button class="btn btn-primary" id="bt_login">Guardar</button>-->
            <a class="btn cerrar" id="bt_cerrar2">Cancelar</a>
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
