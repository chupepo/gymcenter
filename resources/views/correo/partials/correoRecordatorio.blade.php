<div class="correo-recordatorio"> 

	<div>
    	<h2>Correo Recordatorio</h2>

          <div class="alert alert-success" role="alert" id="alert"></div>
        {!! Form::open(array('url' => 'emailAllUsers','role'=>'form','method' => 'POST','id'=>'form-emailAllUsers')) !!}
            
            <div class="from-groupww">
              {!! Form::label('consideraciones', 'Mensaje',
                      array('class' => 'control-label')) 
              !!}
              <br/>
              <div id="error"></div>
              {!! Form::textarea('msg',
              
               'Se le recuerda que pronto se acerca la fecha de pago, ya se pueden ir acercando al area administrativo y hacer su pago correpondiente a este mes'
               
               ,[ 'class' => 'form-control','rows'=>'8','id' => 'txt_mensaje','placeholder'=>'mensaje', 'required'])!!}
            </div>

        {!! Form::close() !!}

            <div class="row">
                <div class="col-md-12 text-left">
                <br />
                <button class="btn btn-primary" id="bt_login" onclick="sendEmailAllUsers();">Enviar a todos</button>
              </div>
            </div>
             <br/>
            <hr />
        <img src="https://scontent-mia1-1.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/11209468_595472887260882_329829038040983341_n.jpg?oh=fe5f7c025d2c8b4dab90ed3aa87f886c&oe=5610903D">
    </div>
</div>