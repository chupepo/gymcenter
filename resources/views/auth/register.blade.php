
@extends('app')

@section('content')
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin_user/css/bootstrap-datetimepicker.min.css') }}" />
    <link href="{{ asset('/css/register.css') }}" rel="stylesheet">



<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" id="register-form">
			<div class="panel panel-default">
				<div class="panel-heading2">
					<h2> Registro</h2>
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hay algunos problemas con su registro.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder = 'Nombre' required/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Apellido</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="apellido1" value="{{ old('apellido1') }}" placeholder = 'Apellido' required/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Cédula</label>
							<div class="col-md-6">
								<input type="text" class="form-control" maxlength = '10' minlength ='4' pattern='^[7|6|5|4|3|2|1]\d{8}$' name="cedula" value="{{ old('cedula') }}" placeholder = 'Cédula'required/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Correo</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder = 'Correo' required/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" placeholder = 'Contraseña' required/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" placeholder = 'Confirmar Password' required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Estos javascripts sirben para hacer funcionar al el calendario -->
    <script type="text/javascript" src="{{ asset('/js/calendar/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/es.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
    $(function () {
        //$('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker();
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        //$("#datetimepicker7").on("dp.change", function (e) {
            //$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        //});
    });
	</script>
<script type="text/javascript" src="{{ asset('/js/register.js') }}" ></script>


@endsection





































