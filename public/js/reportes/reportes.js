
$(document).ready(function () {
	$(".mensaje").show(1000);
	
	setTimeout(function() {
		$(".mensaje").fadeOut(2000);
	},3000);




		//alert("hola");

		/*
        var cedula = $('input:text[name=cedula]').val();
        var public_path = $('meta[name="base_url"]').attr('content');

        if(cedula.length >= 3){
        	        
	        var form = $('#btn-cita');
	        var url = form.attr('action');
	        var data = form.serialize();
	        $.post(url,data, function(result){
	            
	            
				var users = JSON.parse(result);

				var info = "<br/>";
				
				if(users.length >= 1){
					info += "<label><h3>Posibles usuarios</h3></label><br/>";
					info += "<br/>";
				}else{
					info += "<label><h3>No existen usuarios con ese número de cédula</h3></label><br/>";
					info += "<br/>";
				}
				
				for(i = 0; i < users.length; i++ ){
					
					info += "<fieldset>";
					info += "<label id='radioUser'>";
					//info += " <input type='radio' name='id_usuario' value='"+users[i]['id']+"'checked>"+" "+users[i]['nombre']+" "+ users[i]['apellido1'];
					info += " <input type='radio' onclick='prueba("+users[i]['id']+");' name='id_usuario' class='id_usuario' value='"+users[i]['id'] +"'checked>  <img src="+public_path+users[i]['imagen']+" style='width:30px;height: 30px;'>"+" "+users[i]['nombre']+" "+ users[i]['apellido1'];
					info += "</label>";
					info += "<hr/>";
				    info += "<br/>";
				    info += "</fieldset>";
				}
				$(".maybeUsers").html(info);
				$("#txt_correo").val(users[users.length-1]['email']);
				$("#txt_nombre").val(users[users.length-1]['nombre']);
	        });
        }else{
        	$(".maybeUsers").html("");
        }
        */



	$("#txt_dia_pago").click(function (e) {
        e.preventDefault();
        var payDay = $('#txt_dia_pago').val();

		var valor = false;
		if( payDay != ""){

			if (/^([0-9])*$/.test(payDay)){				
				if(payDay <= 31 && payDay >= 0 ){
					valor = true;
				}
	  		}else{

	  		}
  		}

  		if(valor){

	        var form = $('#txt-pay-day');
	        var url = form.attr('action');
	        var data = form.serialize();
	        $.post(url,data, function(result){



				var users = JSON.parse(result);

				var info ='<br/>';
					 info +='<button class="btn btn-primary"  onclick ="pagosHoy();">Pagos de Hoy</button>';
					 info +='<div class ="div-tables-users">';
					 info +=	'<div class="col-md-13 col-md-offset-0">';
					 info +=		'<div class="panel-body">';

				if(users.length >= 1){
					 info +=			'<div class="div-not-users">';
	                 info +=  			'<h2>Usuarios que tienen la fecha de pago para el dia '+payDay+' de cada mes</h2>';
	                 info +=			'</div>';
	                 info +=	        '<hr/>';


				     info +=	        '<table class="table table-striped" id="table">';
				     info +=	        	'<thead>';
				     info +=                	'<tr>';
				     info +=                    	'<th>Avatar</th>';
				     info +=                    	'<th>Nombre</th>';
				     info +=                    	'<th>Apellido</th>';
				     info +=                    	'<th>Correo</th>';
				     info +=                    	'<th>Tipo de pago</th>';
				     info +=                    	'<th>Fecha de Pago</th>';
				     info +=                    	'<th>Perfil</th>';
				     info +=                    	'<th>Cancelar pago</th>';
				     info +=                  	'</tr>';
				     info +=            	'</thead>';
				     info +=            	'<tbody>';

					for(i = 0; i < users.length; i++ ){
							//alert(users[i]['nombre']);
				    	         info +=		'<tr data-id="'+users[i]['id']+'">';
				    		     info +=         '<td><img src="'+users[i]['imagen']+'"style="width:50px;height:50px;"></td>';
				    		     info +=         '<td>'+users[i]['nombre']+'</td>';
				    		     info +=         '<td>'+users[i]['apellido1']+'</td>';
				    		     info +=        '<td>'+users[i]['email']+'</td>';
				    		     info +=         '<td>'+users[i]['tipo_de_pago']+'</td>';
				    		     info +=         '<td>'+users[i]['fecha_pago']+'</td>';
				                 info +=     	'<td><a href="/perfil/'+users[i]['id']+'" class="btn btn-info">Perfil</a></td>';
				    		     info +=     	'<td><a href="/pagos/'+users[i]['id']+'" class="btn btn-primary">Cancelar pago</a></td>';
				    	         info +=		'</tr>';
					}
	                 info +=    			'</tbody>';
	                 info +=  		'</table>';
            	}else{
            	     info +='<div class="div-not-users">';
  				     info +=	'<h2>No hay usuarios con fecha de pago para los '+payDay+' de cada mes</h2>';
                	 info +='</div>';
            	}
            	info += '<br/>'; 

            	
            	$(".users-today").hide(1000);
            	$(".users-by-pay-day").html(info);
            	$(".users-by-pay-day").show(1500);



  			});
  		}
		
    });
	

/*

  
     	
          
              @if($users)

                

                    	<?php foreach ($users as $user): ?>

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

*/













});

function pagosHoy(){
	    $(".users-today").show(1000);
        $(".users-by-pay-day").hide(1500);	
}