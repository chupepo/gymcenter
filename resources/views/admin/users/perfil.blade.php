@extends('app')
	<link href="{{ asset('/css/admin_user/perfil.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/menuAdministrdor.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('/js/usuario/perfil.js') }}" ></script>
@section('content')
	<div class="perfilContent">
		<div class="topPerfil">
			<a href="/home">
				<div class="list-menu" style="text-aline:center">
					<h2><span class="glyphicon glyphicon-arrow-left"></span> Atras</h2>
				</div>
			</a>
			<a href="/medicion/{{$user->id}}">
				<div class="list-menu" style="text-aline:center">
					<h2> Medición de Tallas</h2>
				</div>
			</a>
			<a href="#" id="divPadecimiento">
				<div class="list-menu" style="text-aline:center">
					<h2>Padecimientos</h2>
				</div>
			</a>
			<a href="#" id="show_datos_pago">
				<div class="list-menu" style="text-aline:center">
					<h2>Datos de Pagos</h2>
				</div>
			</a>
			<a href="#" id="img">
				<div class="perfil">
					<img class="imgPerfil" src="{{ $user->imagen}}">
					<h3>{{$user->nombre}} {{$user->apellido1}} </h3>
				</div>
			</a>
		</div>
		<div class="divMenu">
			<div class="alert alert-success mensaje">
		
			</div>
			<div class="contentDivMenu">
				<div class="medicionUser">
					@include('admin.users.partials.destallesMedicion')
				</div>
				<div class="crearPadecimientos">
					@include('admin.users.partials.padecimientos')
            	</div>	
            </div>			
				<div class="dataUser">
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
	<div class="datos_de_pagos">
      
      @include('admin.users.partials.datos_pagos')
    </div>
	</div>


@endsection

