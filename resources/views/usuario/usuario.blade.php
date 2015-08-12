@extends('app')

@section('content')


	<link href="{{ asset('/css/communUser/communUser.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('/js/usuario/communUser/communUser.js') }}" ></script>

	<div class="editImg">
		<form action="/editarImagen" method="post" enctype="multipart/form-data" />
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-md-9">
				<input id="file" name="image" type="file" class="form-control" required>                                    
			</div>
			<div>
			    <button type="submit" class="btn btn-default">Editar</button>
			</div>
		</form>
	</div>
	<div class="perfilContent">
		<div class="divMenu">
			<div class="topPerfil">
				<a href="#">
					<div class="dataInfoUser" id="medicionesInfo"><h3>Mediciones</h3></div>
				</a>
				<a href="#">
					<div class="dataInfoUser" id="padecimientoInfo"><h3>Padecimientos</h3></div>
				</a>
			</div>
			<div class="dataContent">
				<div class="contentDivMenu">
					<div class="medicionUser">
					@if($count > 0)
				        <div class="col-md-14 col-md-offset-0">
				            <!-- Tab panes -->
				            <div class="tab-content faq-cat-content">
				                <div class="tab-pane active in fade" id="faq-cat-1">
				                    <div class="panel-group" id="accordion-cat-1">

				                    @for ($i = 0; $i < $count; $i++)
				 						
				                        <div class="panel panel-default panel-faq">
				                            <div class="panel-heading">
				                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-{{$i}}">
				                                    <h4 class="panel-title">
				                                        Fecha de la medición: {{$mediciones[$i]['created_at']}}
				                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
				                                    </h4>
				                                </a>
				                            </div>
				                            <div id="faq-cat-1-sub-{{$i}}" class="panel-collapse collapse">
												@include('usuario.partials.detallesMediciones')
				                            </div>
				                        </div>
				                     @endfor

				                    </div>
				                </div>
				            </div>
				        </div>
		            @else
		            	<h3>No tienes mediciones en este momento</h3>
		            @endif
					</div>
					<div class="padecimientoUser">
					@if($padecimientos)
							<table class="table table-bordered table-hover" id="table">
			                <thead>
			                	<tr>
			                	 	<th>Padecimiento</th>
			                		<th>Padece</th>
			                		<th>Recomendación</th>
			                	</tr>
			                </thead>
			                <tbody>
			                 	@foreach($padecimientos as $key => $value)
				                    <tr data-id="">
				                    	<td>{{$padecimientos[$key]->padecimiento}}</td>
				                    	@if($padecimientos[$key]->padece == 1)
				                    		<td>si</td>
				                    	@else
				                    		<td>no</td>
				                    	@endif
				                    	
				                    	<td>{{$padecimientos[$key]->recomendacion}}</td>		                  	
				                    </tr>
							   	@endforeach
			                </tbody>
		              	</table>
		            @else
		            	<h3>No tienes padecimietos en este momento</h3>
		            @endif
		            </div>	
	            </div>			
				<div class="dataUser">

					<a href="#" id="img">
						<div class="col-md-offset-5 perfil">
							<img class="imgPerfil" src="{{$user->imagen}}">
							<h3>{{$user->nombre}}</h3>
						</div>
					</a>
					<h1>Información Personal</h1>
					<label class="data"> Cédula:</label>
						{{$user->cedula}}
						<br />
					<label class="data"> Genero:</label>
						{{$user->genero}}
						<br />
					<label class="data"> Email:</label>
						{{$user->email}}
						<br />
					<label class="data"> Teléfono:</label>
						{{$user->telefono}}
						<br />
					<label class="data"> Direccion:</label>
						{{$user->direccion}}
						<br />
					<label class="data"> Lugar de Nacimiento:</label>
						{{$user->lugar_nacimiento}}
											<br />
					<label class="data"> Nacionalidad:</label>
						{{$user->nacionalidad}}
						<br />
					<label class="data"> Estado Civil:</label>
						{{$user->estado_civil}}
						<br />
					<label class="data"> Profesión:</label>
						{{$user->profesion}}
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('/js/usuario/communUser/jquery.bpopup.min.js') }}" ></script>
@endsection


