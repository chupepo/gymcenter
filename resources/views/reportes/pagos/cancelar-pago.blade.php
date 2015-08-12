@extends('app')

@section('content')
	
	<link href="{{ asset('/css/reportes/pagos.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/js/reportes/cancelar-pago.js') }}"></script>
	

	<div class="content-all-reportes">
		<div class="top-list-reportes">
			@include('reportes.pagos.partials.top-list-reportes')
		</div>
		<div class="contenido-general">
			@include('reportes.pagos.partials.realizar-pago')
		</div>
	</div>

@endsection