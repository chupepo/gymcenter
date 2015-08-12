@extends('app')

@section('content')

<script type="text/javascript" src="{{ asset('/js/usuario/usuario.js') }}" ></script>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">

  <div class="containe" style="_background-color: #242f3a;">
    <div class="row" style="width:101%;">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Home</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <input type="search" id="search" value="" class="form-control" placeholder="Buscar Usuario">
                </div>
              </div>
              
              <table class="table" id="table">
                <thead>
                  <tr>
                    <th>Avatar</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Cédula</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                    <tr data-id="{{$user->id}}">
                      <td><img src="{{ asset($user->imagen)}}"style="width:50px;height:50px;"></td>
                      <td>{{$user->nombre}}</td>
                      <td>{{$user->apellido1}}</td>
                      <td>{{$user->apellido2}}</td>
                      <td>{{$user->cedula}}</td>
                      <td><a href="#" class="btn btn-primary">Editar</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <?php echo $users->render(); ?>
            </div>
            {!! Form::open(array('url' => ['prueba',':USER_ID'], 'role'=>'form','id' => 'form-edit','method' => 'POST')) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection