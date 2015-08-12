
						<div class="doubleDatils">
							<div class="medicionInfo">			
								<h3>Mediciones Corporal</h3>

								<label class="data"> Pecho:</label>
									{{$mediciones[$i]['pecho']}}
									<br />
								<label class="data"> Brazo:</label>
									{{$mediciones[$i]['brazo']}}
									<br />
								<label class="data"> Ante Brazo:</label>
									{{$mediciones[$i]['ante_brazo']}}
									<br />
								<label class="data"> Cintura:</label>
									{{$mediciones[$i]['cintura']}}
									<br />
								<label class="data"> Cadera:</label>
									{{$mediciones[$i]['cadera']}}
									<br />
								<label class="data"> Muslo:</label>
									{{$mediciones[$i]['muslo']}}
									<br />
								<label class="data"> Pantorrilla:</label>
									{{$mediciones[$i]['pantorrilla1']}}
									<br />
							</div>
							<div class="medicionInfo">
								<h3>Pliegue Corporal</h3>

								<label class="data"> Abdomen:</label>
									{{$mediciones[$i]['abdomen']}}
									<br />
								<label class="data"> Supraespinal:</label>
									{{$mediciones[$i]['supraespinal']}}
									<br />
								<label class="data"> Subescapular:</label>
									{{$mediciones[$i]['subescapular']}}
									<br />
								<label class="data"> Tríceps:</label>
									{{$mediciones[$i]['triceps']}}
									<br />
								<label class="data"> Muslo Anterior:</label>
									{{$mediciones[$i]['muslo_anterior']}}
									<br />
								<label class="data"> Pantorrilla:</label>
									{{$mediciones[$i]['pantorrilla2']}}
									<br />
							</div>
							<div class="medicionInfo">
								<h3>Medición</h3>
								<label class="data"> Peso:</label>
									{{$mediciones[$i]['peso']}}
									<br />
								<label class="data"> Talla:</label>
									{{$mediciones[$i]['talla']}}
									<br />
								<label class="data"> Grasa:</label>
									{{$mediciones[$i]['grasa']}}
									<br />
								<label class="data"> Musculo:</label>
									{{$mediciones[$i]['musculo']}}
									<br />
								<label class="data"> Porcentaje de Agua:</label>
									{{$mediciones[$i]['porcentajeAgua']}}
									<br />
								<label class="data"> Hueso:</label>
									{{$mediciones[$i]['hueso']}}
									<br />
							</div>
						</div>
















						<div class="porcentajes">
							<h3>Indice de Masa Corporal</h3>
								<h4>
									<label class="data"> Indice:</label>
									{{$mediciones[$i]['indice_masa_corporal']}}
								</h4>
								<br />
							<h3>Frecuencia Cardiaca</h3>
								<h4>
									<label class="data"> Frecuencia:</label>
									{{$mediciones[$i]['frecuencias_cardiaca']}}
								</h4>
								<br />
						</div>
						<div class="detalleMedicion">
							<h2>Detalle Medición</h2>

								<label class="data"> Objetivo:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72"  id="consideraciones" disabled>{{$mediciones[$i]['objetivo']}}</textarea>
								<br />
								<label style="text-align: left;" class="data"> Alimentación:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72" id ="txt_objetivo" placeholder= "Objetivo" disabled>{{$mediciones[$i]['alimentacion']}}</textarea>
								<br />
								<label class="data"> Consideraciones:</label>
								<br />
								<textarea style="width: 100%;" rows="5" cols="72" id="comment" disabled>{{$mediciones[$i]['consideraciones']}}</textarea>
								<br />
						</div>