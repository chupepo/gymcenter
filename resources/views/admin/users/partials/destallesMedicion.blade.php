					@if ($medicion)
					<div class="infoMedicion">
						<label class="data"> Fecha de la medición:</label>
						{{$medicion->fecha}}
						<br />	
						<div class="doubleDatils">
							<div class="medicionCorporal">			
								<h2>Medicion Corporal</h2>

								<label class="data"> Pecho:</label>
									{{$medicion->pecho}}
									<br />
								<label class="data"> Brazo:</label>
									{{$medicion->brazo}}
									<br />
								<label class="data"> Ante Brazo:</label>
									{{$medicion->ante_brazo}}
									<br />
								<label class="data"> Cintura:</label>
									{{$medicion->cintura}}
									<br />
								<label class="data"> Cadera:</label>
									{{$medicion->cadera}}
									<br />
								<label class="data"> Muslo:</label>
									{{$medicion->muslo}}
									<br />
								<label class="data"> Pantorrilla:</label>
									{{$medicion->pantorrilla1}}
									<br />
							</div>
							<div class="pliegueCorporal">
								<h2>Pliegue Corporal</h2>

								<label class="data"> Abdomen:</label>
									{{$medicion->abdomen}}
									<br />
								<label class="data"> Supraespinal:</label>
									{{$medicion->supraespinal}}
									<br />
								<label class="data"> Subescapular:</label>
									{{$medicion->subescapular}}
									<br />
								<label class="data"> Tríceps:</label>
									{{$medicion->triceps}}
									<br />
								<label class="data"> Muslo Anterior:</label>
									{{$medicion->muslo_anterior}}
									<br />
								<label class="data"> Pantorrilla:</label>
									{{$medicion->pantorrilla2}}
									<br />
							</div>
							<div class="medicion">
								<h2>Medición</h2>
								<label class="data"> Peso:</label>
									{{$medicion->peso}}
									<br />
								<label class="data"> Talla:</label>
									{{$medicion->talla}}
									<br />
								<label class="data"> Grasa:</label>
									{{$medicion->grasa}}
									<br />
								<label class="data"> Musculo:</label>
									{{$medicion->musculo}}
									<br />
								<label class="data"> Porcentaje de Agua:</label>
									{{$medicion->porcentajeAgua}}
									<br />
								<label class="data"> Hueso:</label>
									{{$medicion->hueso}}
									<br />
							</div>
						</div>
						<div class="porcentajes">
							<h2>Indice de Masa Corporal</h2>
								<h4>
									<label class="data"> Indice:</label>
									@if ($medicion->indice_masa_corporal <= 1)
										
										<a href="#" id="calIndice" >Calcular</a>
									@else
										{{$medicion->indice_masa_corporal}}
									@endif
								</h4>
								<div>
									
									{!! Form::open(array('url' => '/saveIndice', 'id'=>'formIndice','role'=>'form')) !!}
									<input type="hidden" name="id_usuario" value="{{$medicion->id_usuario}}">
									<div id="errorIMC" class="error"></div>
									<div class="from-group">
										{!! Form::label('altura', 'Altura',
														array('class' => 'control-label')) 
										!!}
										<input type="number" step = '0.01' class='form-control'name="altura" id='txt_altura' value ='{{$medicion->talla}}' required>
									</div>
									<div class="from-group">
										{!! Form::label('peso', 'Peso',
														array('class' => 'control-label')) 
										!!}
										<input type="number" step = '0.01' class='form-control'name="peso" id='txt_peso' value ='{{$medicion->peso}}' required>
									</div>
									<div class="from-group">
										{!! Form::label('resultado', 'Resultado',
														array('class' => 'control-label')) 
										!!}
										<input type="number" step = '0.01' class='form-control'name="resultado" id='txt_resultado' required >
									</div>
									<div class="textInput" value="" id="IMCdetallado" name="IMCdetallado"></div>
									<br />
									<a hre="#" type="button" id="cacular" onclick="calcularIndice();" class="btn btn-sm btn-info">Calcular</a>
									<button type="submit" id="indiceGuardar" class="btn btn-sm btn-success">Guardar</button>

									{!! Form::close() !!}
								</div>
								<br />
							<h2>Frecuencia Cardiaca</h2>
								<h4>
									<label class="data"> Frecuencia:</label>
									@if ($medicion->frecuencias_cardiaca <= 1)
										<a href="#" id="calFrecuencia"> Calcular </a>
									@else
										{{$medicion->frecuencias_cardiaca}}
									@endif
								</h4>
								<div>
									{!! Form::open(array('url' => '/saveFrecuencia', 'id'=>'formFrecuencia','role'=>'form')) !!}
									<input type="hidden" name="id_usuario" value="{{$medicion->id_usuario}}">
									<div id="errorFrecuencia" class="error"></div>
									
									<div class="from-group">
										{!! Form::label('edad', 'Edad',
														array('class' => 'control-label')) 
										!!}
										<input type="number" min="8" max="100"class='form-control'name="edad" id='txt_edad' placeholder='De 8 años a 100 años'required>
									</div>
									<br/>
									<div id="FrecuenciaCR">
										{!! Form::label('FCR', 'Frecuencias Cardiaca en Reposo',
															array('class' => 'control-label')) 
											!!}
										<input  type="number" min="20" max="150" name="" id="txt_FCR" class='form-control' placeholder='De 20 a 150' required ><br>
									</div>
									<div id="FrecuenciaPFCO">
										{!! Form::label('PFCO', 'Porcentaje de Frecuencias Cardiaca Objetivo',
															array('class' => 'control-label')) 
											!!}
										<input type="number" min="50" max="100" name="" id="txt_PFCO" class='form-control' placeholder='De 1% a 100%' required ><br>
									</div>
									<div id="FrecuenciaFCME">
										{!! Form::label('FCME', 'Frecuencias Cardiaca Maxima Estimada ',
															array('class' => 'control-label')) 
											!!}
										<input type="number" name="" id="txt_FCME" class='form-control' required disabled><br>
									</div>
									<div id="ReservaFC">
										{!! Form::label('RFC', 'Reserva Frecuencia Cardiaca',
															array('class' => 'control-label')) 
											!!}
										<input type="number" name="" id="txt_RFC" class='form-control' required disabled><br>
									</div>
									<div id="FrecuenciaCO">
										{!! Form::label('FCO', 'Frecuencia Cardiaca Objetivo',
															array('class' => 'control-label')) 
											!!}
										<input type="number" step = '0.01' name="resultado" id="txt_FCO" class='form-control' required><br>
									</div>
									<a hre="#" type="button" id="cacularFrecuencia" onclick="calcularFrecuencia();" class="btn btn-sm btn-info">Calcular</a>
									<button type="submit" id="frecuenciaGuardar" class="btn btn-sm btn-success">Guardar</button>
									{!! Form::close() !!}
								</div>
								<br />
						</div>
						<div class="detalleMedicion">
							<h2>Detalle Medición</h2>

								<label class="data"> Objetivo:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72"  id="consideraciones" disabled>{{$medicion->objetivo}}</textarea>
								<br />
								<label style="text-align: left;" class="data"> Alimentación:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72" id ="txt_objetivo" placeholder= "Objetivo" disabled>{{$medicion->alimentacion}}</textarea>
								<br />
								<label class="data"> Consideraciones:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72" id="comment" disabled>{{$medicion->consideraciones}}</textarea>
								<br />
						</div>
					</div>
					@else
						<h2>Este usuario tiene mediciones pendientes</h2>
					@endif