<div class="divsInfoUser">
	<div class="infoUser1">
		<br />	
		<div class="from-group">
			{!! Form::label('nombre', 'Nombre',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('nombre', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_username','placeholder'=>'Nombre', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('apellido1', 'Primer Apellido',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('apellido1', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_apellido1','placeholder'=>'Apellido', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('apellido2', 'Segundo Apellido',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('apellido2', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_apellido2','placeholder'=>'Segundo Apellido"', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('cedula', 'Cédula',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('cedula', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'^[7|6|5|4|3|2|1]\d{8}$','class' => 'form-control','id' => 'txt_cedula','placeholder'=>'Cédula', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('genero', 'Género',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('genero', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/.]*','class' => 'form-control','id' => 'txt_genero','placeholder'=>'Género', 'required'  ])!!}
		</div>
	</div>
	<div class="infoUser2">
		<br/>
		<div class="from-group">
		{!! Form::label('email', 'Email',
						array('class' => 'control-label')) 
		!!}
		{!! Form::email('email', null,['maxlength'=>'40','minlength'=>'4','class' => 'form-control','id' => 'txt_email','placeholder'=>'Email', 'required'  ])!!}
		</div>

		<br/>
		<div class="from-group">
		{!! Form::label('password', 'Contraseña',
						array('class' => 'control-label')) 
		!!}
		<input type="password" maxlength ='20' minlength='4' pattern="[a-zA-Z/\s/]*" class="form-control" id ='txt_password' name="password" placeholder="Contraseña">
		</div>
		<br/>
		<div class="from-group">
			{!!Form::label('telefono', 'Teléfono',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('telefono', null,['pattern'=>'^[9|8|7|6]\d{7}$','class' => 'form-control','id' => 'txt_telefono','placeholder'=>'Teléfono', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento',
							array('class' => 'control-label')) 
			!!}
			<div class='input-group date' id='datetimepicker7'>
				{!! Form::text('fecha_nacimiento', null,['maxlength'=>'20','minlength'=>'4','class' => 'form-control','id' => 'txt_fecha_nacimiento','placeholder'=>'Fecha de Nacimiento', 'required'  ])!!}
				<span class="input-group-addon date2" >
    				<span class="glyphicon glyphicon-calendar calendarFecha"></span>
    			</span>
    		</div>
		</div>
		<br/>
		<div class="from-group">
			{!!Form::label('lugar_nacimiento', 'Lugar de Nacimiento',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('lugar_nacimiento', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_lugar_nacimiento','placeholder'=>'Lugar de Nacimiento', 'required'   ])!!}
		</div>
	</div>
	<div class="infoUser3">
		<br/>
		<div class="from-group">
			{!!Form::label('nacionalidad', 'Nacionalidd',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('nacionalidad', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_nacionalidad','placeholder'=>'Nacionalidd', 'required'   ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!!Form::label('estado_civil', 'Estado Civil',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('estado_civil', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_civil','placeholder'=>'Estado Civil','required'   ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!!Form::label('profesion', 'Profesión',
							array('class' => 'control-label')) 
			!!}
			{!! Form::text('profesion', null,['maxlength'=>'20','minlength'=>'4','pattern'=>'[a-zA-Z/\s/]*','class' => 'form-control','id' => 'txt_profesion','placeholder'=>'Profesión', 'required'  ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!!Form::label('direccion', 'Dirección',
							array('class' => 'control-label')) 
			!!}<br/>
			{!! Form::textarea('direccion', null,[ 'rows'=>'5','maxlength' =>'255','cols'=>'50','id' => 'txt_consideraciones','placeholder'=>'Dirección', 'required' ])!!}
		</div>
	</div>
</div>	