$(document).ready(function () 
{


	$("#editar_padecimiento").click(function (e) {
        e.preventDefault();

		var id_usuario= $('#id_usuario').val();

		

		var form = $('#txt-form-edit-padecimientos');
		
		var url = form.attr('action');
		
		var data = form.serialize();


		$.post(url,data, function(result){
			
			
			var UserPadecimientos = JSON.parse(result);
			
			//alert(UserPadecimientos);
			
			var token = $("#csrf-token").val();

			var info = "";
				info +=	'<div class="title-padecimiento">';
				info +=		'<h2>Editar Padecimientos</h2>';
				info +=	'</div>';

				info +=	'<form method="POST" action="/updatePadeciento" id="txt-form-update-padecimientos" accept-charset="UTF-8" role="form">';

				info += '<input name="_token" type="hidden" value="'+token+'">';

				info +=		'<input type="hidden" name="usuario_id" id="usuario_id" value="'+id_usuario+'">';
				info +=		'<div class="divPreguntas">';

		               	

		       	for(i = 0; i < UserPadecimientos.length; i++ ){
		               									
								if(i == 0){
					info +=				'<div class="divleft" >';
								}
					info +=				'<div class="">';
					info +=				'<h3><p> ¿Padece de '+UserPadecimientos[i]["padecimiento"]+'?</p></h3>';
					info +=				'<div>';
					info +=				    '<fieldset>';

					if (UserPadecimientos[i]["padece"] == 1) {
						info +=				        '<label>';
						info +=				            '<input type="radio" name="'+UserPadecimientos[i]["id"]+'" value="true" checked> si ';
						info +=				        '</label>';
						info +=				        '<label>';
						info +=				            ' <input type="radio" name="'+UserPadecimientos[i]["id"]+'" value="false"> no ';
						info +=				        '</label>';

					}else{
						info +=				        '<label>';
						info +=				            '<input type="radio" name="'+UserPadecimientos[i]["id"]+'" value="true"> si ';
						info +=				        '</label>';
						info +=				        '<label>';
						info +=				            '<input type="radio" name="'+UserPadecimientos[i]["id"]+'" value="false" checked> no ';
						info +=				        '</label>';
					}


					info +=				    '</fieldset>';
					info +=				'</div>';
					info +=				'<br />';
					info +=				'<label for="rescotriglicerido" class="control-label">Recomendación Medica</label>';
					info +=				'<br />'
					info +=				'<textarea rows="5" maxlength="255" cols="50" id="txt_recomendacionMedica" placeholder="Recomendación Medica" =""="" name="'+UserPadecimientos[i]["padecimiento"]+'">'+UserPadecimientos[i]["recomendacion"]+'</textarea>';
					info +=				'</div>'	
							
								if(i == 4){
					info +=				'</div>';
					info +=				'<div class="divrigth" >';
								}
		        };

				info +=				'</div>';
				info +=		'</div>';
				info +=		'<br />';
				info +=		'<div class="row">';
				info +=		    '<div class="col-md-12 text-left buttonsGuardar">';
				info +=				'<a class="btn btn-primary actualizar" onclick="actualizar()" id="">Actualizar</a>';
				info +=				'<a class="btn" id="bt_cerrar" onclick="cancel()">Cancelar</a>';
				info +=			'</div>';
				info +=		'</div>';






				info +=	'</form>';


				$(".edit-padecimiento").html(info);
				$('.table-padecimientos').hide(1000);
				$('.edit-padecimiento').show(1000);
				
		});

    });







  
});

function cancel(){
		$('.table-padecimientos').show(1000);
		$('.edit-padecimiento').hide(1000);
}

function actualizar() {


		var form = $('#txt-form-update-padecimientos');

		var url = form.attr('action');
		
		var data = form.serialize();

		$.post(url,data, function(result){
			alert(result);
			/*
			alert(result);
			
			var UserPadecimientos = JSON.parse(result);
			

			var info = "";
				info +=	'<div class="title-padecimiento">';



				$(".edit-padecimiento").html(info);
				$('.table-padecimientos').hide(1000);
				$('.edit-padecimiento').show(1000);
			*/	
		});
		

}