<br />
<div class="search">
     <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          {!! Form::open(array('url' => 'getAjaxUsersByPayDay','role'=>'form','method' => 'POST','id'=>'txt-pay-day')) !!}
         	  
            <div class="from-group">
              <label for="sel1">Buscar Usuario por dia de pago</label>
              {!! Form::selectRange('dia_pago', 1, 31, 0, ['class' => 'form-control','id'=>'txt_dia_pago']) !!}
            </div>

          {!! Form::close() !!}
        </div>
     </div>	
</div>
<br/>
  @if($mensaje != "")
    <div class="alert alert-success mensaje">
        {{$mensaje}}
    </div>
  @endif
<div class="users-today">
  <div class ="div-tables-users">
     	<div class="col-md-13 col-md-offset-0">
          <div class="panel-body">
              @if($users)
                <div class="div-not-users">
                  <h2>Usuarios que tienen la fecha de pago para el dia de hoy</h2>
                </div>
                <hr/>
                <table class="table table-striped" id="table">
                	<thead>
                    	<tr>
                        	<th>Avatar</th>
                        	<th>Nombre</th>
                        	<th>Apellido</th>
                        	<th>Correo</th>
                        	<th>Tipo de pago</th>
                        	<th>Fecha de Pago</th>
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
    		                    <td>{{$user->email}}</td>
    		                    <td>{{$user->tipo_de_pago}}</td>
    		                    <td>{{$user->fecha_pago}}</td>
                            <td><a href="/perfil/{{$user->id}}" class="btn btn-info">Perfil</a></td>
    		                    <td><a href="/pagos/{{$user->id}}" class="btn btn-primary">Cancelar pago</a></td>
    	                 	</tr>
                      	<?php endforeach; ?>
                    </tbody>
                  </table>
              @else
                <div class="div-not-users">
  				        <h2>No hay usuarios con una fecha de pago para el dia de hoy</h2>
                </div>
  			      @endif
              <br/>     
          </div>
              {!! Form::open(array('url' => ['prueba',':USER_ID'], 'role'=>'form','id' => 'form-edit','method' => 'POST')) !!}
              {!! Form::close() !!}
        </div>	
  </div>
</div>
<div class="users-by-pay-day">
  
</div>
