<div class="general-content">
	<div>
		<div class="titles-of-page">
			<h2>Usuarios Morosos</h2>
		</div>
	</div>
	<div class="table-content">
		<div class="users-morosos">
			<div class ="div-tables-users">
			    <div class="col-md-13 col-md-offset-0">
			      	<div class="panel-body">
			            @if($users)
			                <table class="table table-striped" id="table">
			                	<thead>
			                    	<tr>
			                        	<th>Avatar</th>
			                        	<th>Nombre</th>
			                        	<th>Apellido</th>
			                        	<th>Fecha actual</th>
			                        	<th>Fecha del pago</th>
			                        	<th>Tipo de pago</th>
			                        	<th>Perfil</th>
			                        	<th>Cancelar pago</th>
			                      	</tr>
			                	</thead>

			                	<tbody>
			                    	<?php foreach ($users as $user): ?>
			    	            		<tr data-id="{{$user->id}}">
			    		                    <td><img src="{{ asset($user->imagen)}}"style="width:50px;height:50px;"></td>
			    		                    <td>{{$user->nombre}}</td>
			    		                    <td>{{$user->apellido1}}</td>
			    		                    <td>{{$user->dia_actual}}</td>
			    		                    <td>{{$user->dia_pago}}</td>
			    		                    <td>{{$user->tipo_de_pago}}</td>
			                            	<td><a href="/perfil/{{$user->id}}" class="btn btn-info">Perfil</a></td>
			    		                    <td><a href="/pagos/{{$user->id}}" class="btn btn-primary">Cancelar pago</a></td>
			    	                 	</tr>
			                      	<?php endforeach; ?>
			                    </tbody>
			                </table>
			            @else
			                <div class="div-not-users">
			  				    <h2>Actualmente no se encientrarn usuarios morosos</h2>
			                </div>
			  			@endif
			              <br/>     
			        </div>
			              {!! Form::open(array('url' => ['prueba',':USER_ID'], 'role'=>'form','id' => 'form-edit','method' => 'POST')) !!}
			              {!! Form::close() !!}
			    </div>	
			</div>
		</div>
	</div>
</div>