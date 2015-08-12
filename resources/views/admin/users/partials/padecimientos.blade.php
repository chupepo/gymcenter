<script type="text/javascript" src="{{ asset('/js/padecimientos/padecimientos.js') }}" ></script>

<link rel="stylesheet" href="{{ asset('css/padecimientos/padecimientos.css') }}" />

	<div class="all-general-content-padecimientos">
	
		<div class="all-data-padecimientos">
			<div class="display-mediciones">
				<a href="#"  class="btn btn-primary atras">Ir a Mediciones</a>
			</div>
			<br/>
			<br/>
			@if (!$arrayPadecimientos)
				<div class="questions-padecimientos">
					
					<div class="title-padecimiento">
						<h2>Padecimientos</h2>
					</div>

					{!! Form::open(array('url' => 'padecimiento', 'role'=>'form','method' => 'POST')) !!}
						<input type="hidden" name="id_usuario" value="{{$user->id}}">
						<div class="divPreguntas">

		               	@foreach($padecimientos as $key => $value)
							
							@if($key == 0)
								<div class="divleft" >
							@endif
								<div class="">
								<h3><p> ¿Padece de {{$value->padecimiento}}?</p></h3>
								<div>
								    <fieldset>
								        <label>
								            <input type="radio" name="{{$value->id}}" value="true"> si
								        </label>
								        <label>
								            <input type="radio" name="{{$value->id}}" value="false" checked> no
								        </label>
								    </fieldset>
								</div>
								<br />
								{!!Form::label('rescotriglicerido', 'Recomendación Medica',
												array('class' => 'control-label')) 
								!!}
								<br />
								{!! Form::textarea($value->padecimiento, null,[ 'rows'=>'5','maxlength' =>'255','cols'=>'50','id' => 'txt_recomendacionMedica','placeholder'=>'Recomendación Medica', '' ])!!}
								</div>	
						
							@if($key == 4)
								</div>
								<div class="divrigth" >
							@endif
						@endforeach
								</div>
						</div>
						<br />
						<div class="row">
						    <div class="col-md-12 text-left buttonsGuardar">
								<button class="btn btn-primary" id="bt_login">Guardar</button>
								<a class="btn" id="bt_cerrar" onclick="cancel({{$user->id}})">Cerrar</a>
							</div>
						</div>
				    {!! Form::close() !!}
				</div>
			@else
				<div class="all-data-table-padecmientos">	
					<div class="table-padecimientos">
						<table class="table table-bordered table-hover" id="table">
			                <thead>
			                	<tr>
			                	 	<th>Padecimiento</th>
			                		<th>Padece</th>
			                		<th>Recomendacion</th>
			                	</tr>
			                </thead>
			                <tbody>
			                	@foreach($arrayPadecimientos as $key => $value)
					                    <tr data-id="">
					                    	<td>{{$arrayPadecimientos[$key]->padecimiento}}</td>
					                    	@if($arrayPadecimientos[$key]->padece == 1)
					                    		<td>si</td>
					                    	@else
					                    		<td>no</td>
					                    	@endif
					                    	
					                    	<td>{{$arrayPadecimientos[$key]->recomendacion}}</td>		                  	
					                    </tr>
								@endforeach
			                </tbody>
		              	</table>
		              	<div class="display-mediciones">
		              		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		              		{!! Form::open(array('url' => 'editarpadecimiento','role'=>'form','method' => 'POST','id'=>'txt-form-edit-padecimientos')) !!}
	              				<input type="hidden" name="id_usuario" id="id_usuario"value="{{$user->id}}">
	              			{!! Form::close() !!}
							<!--<a href="#" id="editar_padecimiento"  class="btn btn-primary">Editar</a>-->
						</div>
	              	</div>
	              	<div class="edit-padecimiento">
	
	              	</div>
	            </div>
	       			
	        @endif
		</div>	


	</div>		
	

				

				

