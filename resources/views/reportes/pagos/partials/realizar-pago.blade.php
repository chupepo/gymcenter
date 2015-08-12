	<div class="cancelar-pago">
		
		<div class="datos-pago">
			@if($user->fecha_pago != "0000-00-00 00:00:00")
				<div class="texto">
					<p><h2 class="pulloutHeadline ">Realizar Pago</h2></p>
				</div>
				<div class="form-datos-pago">
					@include('reportes.pagos.partials.messagesErrors')
					{!! Form::open(['route' => ['pagos.pagos.store'],'method' => 'POST']) !!}
					<input type="hidden" name="id_usuario" value="{{$user->id}}">
					<div class="datos user-info">
						<div class="from-group">
							<img class="img-usuario" src="{{$user->imagen}}">
						</div>
						<br/>
					
						<div class="from-group">
							<label class ='control-label'>Cliente: </label>
							<label class ='control-label'>{{$user->nombre}}</label>
							<label class ='control-label'>{{$user->apellido1}}</label>
						</div>
					</div>
					<div class="datos pago-info">
						<div class="from-group">
							<label class ='control-label'>Fecha de pago</label>
							<br/>
							<label class ='control-label'>{{$user->fecha_pago}}</label>
						</div>					
						<br/>
						<div class="from-group">
							<label class ='control-label'>Monto</label>
							{!! Form::number('monto', null,['step'=>'0.01','class' => 'form-control','id' => 'txt_monto','placeholder'=>'monto', 'required' ])!!}
						</div>	
					</div>
					<div class="row">
					    <div class="col-md-10 text-center">
							<br />
							<button class="btn btn-primary" id="bt_login">Pagar</button>
							<a class="btn cerrar" id="bt_cerrar" onclick="cancel()">Cerrar</a>
						</div>
					</div>
					 {!! Form::close() !!}
				</div>
			@else
				<div class="texto">
					<p><h2 class="pulloutHeadline ">Este usuario no cuenta todavia con una fecha de pago</h2></p>
					<p><h2 class="pulloutHeadline ">Ingresa al perfil del usuario y edita sus datos de pago <a href="/perfil/{{$user->id}}">Perfil</a></h2></p>
				</div>
			@endif
		</div>
	</div>	