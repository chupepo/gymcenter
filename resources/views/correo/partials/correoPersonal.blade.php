      <div class="correo-personal">   
          <div>
            <h2>Correo Personal</h2>
            <p>
              Con los correo personales podemos buscar un usuario por su cedula de identidad y
              enviar un correo para informale sobre asustos relacionados con el gimnasio.

            </p>
            <h2></h2>
          </div>
              <br/>
              {!! Form::open(array('url' => 'crearCita','role'=>'form','method' => 'POST','id'=>'btn-cita')) !!}
                  <h3>{!! Form::label('entrenador', 'Numero de Cédula',
                          array('class' => 'control-label')) 
                  !!}</h3>
                  <input type="text" id="cedula" name="cedula" maxlength="9" class="form-control" placeholder="Digite la cédula del usuario">
              {!! Form::close() !!}
              <br/>
              
              {!! Form::open(array('url' => 'getAjaxUser','role'=>'form','method' => 'POST','id'=>'btn-correo')) !!}
                <div class="maybeUsers">
                    
                </div>
              {!! Form::close() !!}

              @include('admin.partials.messagesErrors')
              @if($massage)
                <div class="alert alert-success" role="alert">{{$massage}}</div>
              @endif
              {!! Form::open(array('url' => '/sendEmail', 'method' => 'POST','role'=>'form')) !!}
              
                <br/>
                <div class="from-group">
                  {!! Form::label('email', 'Correo',
                          array('class' => 'control-label')) 
                  !!}
                  {!! Form::text('email', null,['class' => 'form-control','id' => 'txt_correo','placeholder'=>'Correo', 'required' ])!!}
                </div>
                <br/>
                <div class="from-group">
                  {!! Form::label('asunto', 'Asunto',
                          array('class' => 'control-label')) 
                  !!}
                  {!! Form::text('asunto', null,['class' => 'form-control','id' => 'txt_asunto','placeholder'=>'Asunto', 'required' ])!!}
                </div>
                <br/>
                <div class="from-group">
                  {!! Form::hidden('nombre', null,['class' => 'form-control','id' => 'txt_nombre','placeholder'=>'Nombre', 'required' ])!!}
                </div>
                <br/>
                <div class="from-groupww">
                {!! Form::label('consideraciones', 'Mensaje',
                        array('class' => 'control-label')) 
                !!}
                <br/>
                {!! Form::textarea('msg', null,[ 'class' => 'form-control','rows'=>'8','id' => 'txt_msg','placeholder'=>'mensaje', 'required' ])!!}
              </div>
              <br/>
              <div class="row">
                  <div class="col-md-12 text-left">
                  <br />
                  <button class="btn btn-primary" id="bt_login">Enviar</button>
                  <a class="btn" id="bt_cancelar" onclick="cancel()">Cancelar</a>
                </div>
              </div>
              {!!Form::input('hidden','contacto')!!}
            {!! Form::close() !!}
        </div> 