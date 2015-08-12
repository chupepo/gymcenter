@extends('app')

@section('content')
	
	<link href="{{ asset('/css/reportes/morosos.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/js/reportes/pagos.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/reportes/reportes.js') }}"></script>
	<div class="content-all-reportes">
		
		<div class="top-list-reportes">
			@include('reportes.pagos.partials.top-list-reportes')
		</div>
		<div class="top-list-reportes">
			@include('reportes.pagos.partials.table-alDia')
		</div>
	</div>

@endsection