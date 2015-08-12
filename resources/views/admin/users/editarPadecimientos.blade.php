<script type="text/javascript" src="{{ asset('/js/padecimientos/padecimientos.js') }}" ></script>

<link href="{{ asset('/padecimientos/padecimientoss.css') }}" rel="stylesheet">




	<div class="all-content-padecimientos">

		<div class="data-padecimientos">

			<div>
				<div class="title-padecimiento">
					<h2>Editar Padecimientos</h2>
				</div>
			</div>

			<div class="edit-padecimientos">
				{!! Form::open(array('url' => 'updatadePadecimiento', 'role'=>'form','method' => 'POST')) !!}
						
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

						<input type="hidden" name="id_usuario" value="{{$user->id}}">

						<br />
						<div class="row">
						    <div class="col-md-12 text-left buttonsGuardar">
								<button class="btn btn-primary" id="bt_login">Editar</button>
								<a class="btn" id="bt_cerrar" onclick="cancel({{$user->id}})">Cerrar</a>
							</div>
						</div>

				{!! Form::close() !!}
			</div>
			
		</div>
		
	</div>

