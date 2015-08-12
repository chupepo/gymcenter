
<div class="todas_mediciones">
	<div class='medicion_corporal'>
		<h2>Medición Corporal</h2>
		<div class="from-group">
			{!! Form::label('pecho', 'Pecho',
							array('class' => 'control-label')) 
			!!}

			{!! Form::number('pecho', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_pecho','placeholder'=>'Pecho', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('brazo', 'Brazo',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('brazo', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_brazo','placeholder'=>'Brazo', 'required' ])!!}	
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('anteBrazo', 'Ante Brazo',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('ante_brazo', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_ante_brazo','placeholder'=>'Ante Brazo', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('cintura', 'Cintura',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('cintura', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_cintura','placeholder'=>'Cintura', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('cadera', 'Cadera',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('cadera', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_cadera','placeholder'=>'Cadera', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('muslo', 'Muslo',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('muslo', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_muslo','placeholder'=>'Muslo', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('pantorrilla1', 'Pantorrilla',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('pantorrilla1', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_pantorrilla1','placeholder'=>'Pantorrilla', 'required' ])!!}
		</div>
	</div>

	<div class='pliegue_Corporal'>
		<h2>Pliegue Corporal</h2>
		<div class="from-group">
			{!! Form::label('abdomen', 'Abdomen',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('abdomen', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_abdomen','placeholder'=>'Abdomen', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('supraespinal', 'Supraespinal',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('supraespinal', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_supraespinal','placeholder'=>'Supraespinal', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('subescapular', 'Subescapular',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('subescapular', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_subescapular','placeholder'=>'Subescapular', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('triceps', 'Tríceps',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('triceps', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_triceps','placeholder'=>'Tríceps', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('muslo_anterior', 'Muslo Anterior',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('muslo_anterior', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_muslo_anterior','placeholder'=>'Muslo Anterior', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('pantorrilla2', 'Pantorrilla',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('pantorrilla2', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_pantorrilla2','placeholder'=>'Pantorrilla', 'required' ])!!}
		</div>
	</div>

	<div class='medicion'>
		<h2>Datos</h2>
		<div class="from-group">
			{!! Form::label('peso', 'Peso',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('peso', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_peso','placeholder'=>'Peso', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">

			{!! Form::label('talla', 'Talla',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('talla', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_talla','placeholder'=>'Talla', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('grasa', 'Grasa',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('grasa', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_gresa','placeholder'=>'Grasa', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('musculo', 'Musculo',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('musculo', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_muslo','placeholder'=>'Musculo', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('porcentajeAgua', 'Porcentaje de Agua',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('porcentajeAgua', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_porcentajeAgua','placeholder'=>'Porcentaje de Agua', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('grasaViceral', 'Grasa Viceral',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('grasaViceral', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_grasaViceral','placeholder'=>'Grasa Viceral', 'required' ])!!}
		</div>
		<br/>
		<div class="from-group">
			{!! Form::label('hueso', 'Hueso',
							array('class' => 'control-label')) 
			!!}
			{!! Form::number('hueso', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_hueso','placeholder'=>'Hueso', 'required' ])!!}
		</div>
		<br/>
	</div>
</div>
<div class='detalle_medicion'>
	<h2>Detalle de Medición</h2>
	<div class="from-groupww">
		{!! Form::label('objetivo', 'Objetivo',
						array('class' => 'control-label')) 
		!!}
		<br/>
		{!! Form::textarea('objetivo', null,[ 'rows'=>'4','maxlength' =>'255','cols'=>'72','id' => 'txt_objetivo','placeholder'=>'Objetivo', 'required' ])!!}
	</div>
	<br/>
	<div class="from-groupww">
		{!! Form::label('alimentacion', 'Alimentación',
						array('class' => 'control-label')) 
		!!}
		<br/>
		{!! Form::textarea('alimentacion', null,[ 'rows'=>'4','maxlength' =>'255','cols'=>'72','id' => 'txt_alimentacion','placeholder'=>'Alimentación', 'required' ])!!}
	</div>
	<br/>
	<div class="from-groupww">
		{!! Form::label('consideraciones', 'Consideraciones',
						array('class' => 'control-label')) 
		!!}
		<br/>
		{!! Form::textarea('consideraciones', null,[ 'rows'=>'4','maxlength' =>'255','cols'=>'72','id' => 'txt_consideraciones','placeholder'=>'Consideraciones', 'required' ])!!}
	</div>
</div>