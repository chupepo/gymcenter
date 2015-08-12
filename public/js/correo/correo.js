$(document).ready(function() {

    $("#cedula").keydown (function (e) {

        var cedula = $('input:text[name=cedula]').val();
        var public_path = $('meta[name="base_url"]').attr('content');

        if(cedula.length >= 3){
        	        
	        var form = $('#btn-cita');
	        var url = form.attr('action');
	        var data = form.serialize();
	        $.post(url,data, function(result){
	            
	            /*Se convierte la variable result en un objeto Json */
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
    });

	$("#correo-recordatorio").click(function (e) {
        e.preventDefault();

		$('.correo-recordatorio').show(1000);
		$('.correo-personal').hide(1000);
    });

	$("#correo-peronal").click(function (e) {
        e.preventDefault();

		$('.correo-personal').show(1000);
		$('.correo-recordatorio').hide(1000);
    });

});
    
function prueba(id){
	var form = $('#btn-correo');
	var url = form.attr('action');
	var data = form.serialize();
	$.post(url,data, function(result){
	 
		var user = JSON.parse(result);
		
		$("#txt_correo").val(user[0]['email']);
		$("#txt_nombre").val(user[0]['nombre']);
	});
}


/*
|--------------------------------------------------------------------------------
| Funcion para enviar un correo a todos los usuarios
|--------------------------------------------------------------------------------
*/
function sendEmailAllUsers(){
	
	var mensaje = "Por favor aguarde mientras se envian los correos electronicos"
	var msg = $("#txt_mensaje").val();
	$("#alert").html(mensaje);
	$("#alert").show(1000);
	
	if(msg != "" ) {
		
		$("#error").html("");

		var form = $('#form-emailAllUsers');
		
		var url = form.attr('action');
		
		var data = form.serialize();

		$.post(url,data, function(result){
		            
			$("#alert").html(result);
			$("#alert").show(1000);
			$("#txt_mensaje").val("");

	    });
	}else{
		$("#error").html("debes de agregar un mensaje");
	}

}
/*
|--------------------------------------------------------------------------------
| Boton cancela la orden de un formulario y redirecciona a la pagina anterior
|--------------------------------------------------------------------------------
*/
function cancel(){
  window.location.href = "/home";
}




