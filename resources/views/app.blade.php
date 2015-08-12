<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
<!--<meta http-equiv="refresh" content="10">-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="<?php echo csrf_token() ?>"/>
      <meta name="base_url" content="{{ URL::to('/') }}">
        
      <title>Gimnasio Fitness Center</title>
      <link rel="shortcut icon" href="{{asset('/imgs/gimnasio.jpg') }}">
      <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
      <link href="{{ asset('/css/layout.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
      
      <script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.min.js') }}" ></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

      <script type="text/javascript" src="{{ asset('/js/layout.js') }}" ></script>
  </head>
<body>
  <nav class="navheader" >
    <div class="container-fluid nav-container">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="ul-left">
            <li><a href="/home">Gimnasio Fitness Center</a></li>
          </ul>
        @if (Auth::guest())
          <ul class="ul-left">
            <li><a href="{{ url('/') }}">Inicio</a></li>
          </ul>
        @endif
        <ul class="ul-right">
          @if (Auth::guest())
            <li><a class="ul-view-Welcome" href="{{ url('/auth/login') }}" id="login-click">Ingresar</a></li>
            <li><a class="ul-view-Welcome" href="{{ url('/auth/register') }}">Registrase</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }}  {{ Auth::user()->apellido1 }}
                  <span class="caret"></span>
                  <img src="{{ Auth::user()->imagen}}"style="width:25px;height: 25px;">
                </a>
              <ul class="dropdown-menu submenu" role="menu">
                <li><a class="submenu-mini" href="{{ url('/auth/logout') }}">Cerrar Sesion</a></li>
                @if (Session::get('tipoUsuario') == 'admin')
                  <li><a class="submenu-mini" href="#" id="img">Editar Imagen</a></li>
                @endif
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <div class="editImg">
    <form action="/editarImagen" method="post" enctype="multipart/form-data" />
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="col-md-9">
        <input id="file" name="image" type="file" class="form-control" required>                                    
      </div>
      <div>
          <button type="submit" class="btn btn-default">Editar</button>
      </div>
    </form>
  </div>

  <div class='parent-content'>
    <div class="content">
      @yield('content')
    </div>
  </div>
	
 @if (Auth::guest())

  <div class="footer">
      <div class="container">
        <div class="row">
              <h3 class="footertext">Conócenos:</h3>

              <div class="col-md-6">
                  <center>
                    <img src="{{ asset('/imgs/Gym-picturures/mision.jpg') }}" class="img-circle" alt="...">
                    <br>
                    <h4 class="footertext">Misión</h4>
                    <p class="footertext" style="text-align: justify;">Brindar un servicio de entrenamiento personalisado poniendo a disposición
                                          un personal capacitado y comprometido con nuestros valores así como con un
                                          equipo de calidad y un excelente servicio al cliente, dirigido a todas aquella
                                          personas que desean mejorar su calidad de vida a través del ejercicio físico.<br>
                  </center>
              </div>
              <div class="col-md-6">
                <center>
                    <img src="{{ asset('/imgs/Gym-picturures/vision.jpg') }}" class="img-circle" alt="...">
                    <br>
                    <h4 class="footertext">Visión</h4>
                    <p class="footertext" style="text-align: justify;">Ser el gimnasio de entrenamiento personalisado reconocido por sus distintivos servicios
                                          de fomento de la salud através de un servicio integral para cada cliente,
                                          logrando llevar a los habitantes de la zona a un máximo nivel de vida saludable
                                          cambiando su estilo de vida a través del ejercicio físico.<br>
                  </center>
              </div>
            </div>
      </div>
      <br />
  </div>
  @endif
</body>
    <script type="text/javascript" src="{{ asset('/js/usuario/communUser/jquery.bpopup.min.js') }}" ></script>
</html>
