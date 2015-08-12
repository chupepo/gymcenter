@extends('app')

@section('content')
	

	<link href="{{ asset('/css/reportes/reportes.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/reportes/realizarPago.css') }}" rel="stylesheet">
	

	<script type="text/javascript" src="{{ asset('/js/reportes/realizarPago.js') }}"></script>
	
	<div class="content-all-reportes">
		
		<div class="top-list-reportes">
			@include('reportes.pagos.partials.top-list-reportes')
		</div>
		
		<div class="div-not-users">
  			<h2>Realizar un pago</h2>
        </div>
        <br />

		{!! Form::open(array('url' => 'crearCita','role'=>'form','method' => 'POST','id'=>'txt_cancelarPago')) !!}   	
			<div>
				<div class="input_txt_cedula">
	            	<input type="text" id="txt_cedula" name="cedula" maxlength="9" class="form-control" placeholder="Digite la cédula del usuario">
	        	</div>
	        </div>
	        <br />
        {!! Form::close() !!}
        <div class="cancelar-pago">

        </div>
	

</div>


@endsection
