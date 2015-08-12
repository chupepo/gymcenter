@extends('app')

@section('content')
	
	<link href="{{ asset('/css/ingresos/ingresos.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/js/ingresos/ingresos.js') }}"></script>

	<div class="content-all-ingresos">
		
		<div class="top-list-reportes">
			
			<div class="ingresos-brutos">
				
				<div class="title-imgresos">

					<h2>Ingresos Brutos</h2>
					
				</div>

				<div class="rango-fechas">

					<div class="dates">
						<h3>Busqueda por rango de fechas</h3>
						{!! Form::open(array('url' => '/getAjaxIngresos','role'=>'form','method' => 'POST','id'=>'txt-form-ingresos-rango')) !!}

							<div class="fecha-desde">
								<input type="date" name="desde" id="desde" />
							</div>
							hasta
							<div class="fecha-hasta">
								<input type="date" name="hasta" id="hasta" />
							</div>

						{!! Form::close() !!}
					</div>
				
				</div>

				<div class="table-imgresos">
	              {!! Form::open(array('url' => '/ingresoHoy','role'=>'form','method' => 'POST','id'=>'txt-form-ingresos')) !!}
	              {!! Form::close() !!}

	              <div class="ingresos-hoy">
	              	
	              </div>
					
				</div>
			</div>
		</div>
	</div>

@endsection