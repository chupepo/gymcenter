


 <link href="{{ asset('/css/home_tables_users.css') }}" rel="stylesheet">

<div class="all-content-tables-users">
      <div class="data-tables">
          <div class="search-users">
            {!! Form::open(array('url' => 'getUsersByName','role'=>'form','method' => 'POST','id'=>'txt_form_table_user_busqueda')) !!}
              <input type="search" id="search2" value="" name="nombre"class="form-control" placeholder="Buscar usuario por nombre">
             {!! Form::close() !!}
          </div>

          <div class="col-md-13 col-md-offset-0 div-table-user-inicio">
            <div class="panel-body">
              <table class="table table-striped" id="table">
                <thead>
                  <tr>
                    <th>Avatar</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Cédula</th>
                    <th>Editar</th>
                    <th>Perfil</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                    <tr data-id="{{$user->id}}">
                      <td><img src="{{ asset($user->imagen)}}"style="width:50px;height:50px;"></td>
                      <td>{{$user->nombre}}</td>
                      <td>{{$user->apellido1}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->cedula}}</td>
                      <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary">Editar</a></td>
                      <td><a href="/perfil/{{$user->id}}" class="btn btn-info">Perfil</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <?php echo $users->render(); ?>
            </div>

          </div>

      <div class="col-md-13 col-md-offset-0 div-table-user-busqueda">
      </div>











      </div>
</div>


