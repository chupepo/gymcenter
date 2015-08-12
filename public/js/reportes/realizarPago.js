
$(document).ready(function () {



    $("#txt_cedula").keydown (function (e) {

    	
        var cedula = $('input:text[name=cedula]').val();
        //var public_path = $('meta[name="base_url"]').attr('content');

        if(cedula.length >= 3){      
	        var form = $('#txt_cancelarPago');
	        var url = form.attr('action');
	        var data = form.serialize();
	        $.post(url,data, function(result){
	            
	            /*Se convierte la variable result en un objeto Json */
				var users = JSON.parse(result);

				var info ='<br/>';
				 	info +='<br/>';

					 info +='<div class ="div-tables-users">';
					 info +=	'<div class="col-md-13 col-md-offset-0">';
					 info +=		'<div class="panel-body">';

				if(users.length >= 1){
					 info +=			'<div class="div-not-users">';
	                 info +=  			'<h2>Datos personales del usuario</h2>';
	                 info +=			'</div>';
	                 info +=			'<a href="/reportes" class="btn btn-primary">Ir a Pagos</a>';
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
	                 info +='</div>';
	                 info +='</div>';
	                 info +='</div>';

            	}else{
            	     info +='<div class="div-not-users">';
  				     info +=	'<h2>No hay usuarios con el númerode cedula ingresado</h2>';
                	 info +='</div>';
            	}
            	info += '<br/>'; 

            	$(".cancelar-pago").html(info);
            	$(".cancelar-pago").show(1500);

			});

        }else{
        	//$(".cancelar-pago").html("");
        }
    
	});
});

