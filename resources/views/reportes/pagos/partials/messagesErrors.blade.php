    
@if($errors->any())
	<div class="alert alert-danger">
	   	<p>Por favor corregir los errores</p>
	   	<ul>
	   	@foreach($errors->all() as $error)
	   		<li>{{$error}}</li>
	   	@endforeach
	   	</ul>
	</div>
@endif
