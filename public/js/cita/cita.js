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
					info += " <input type='radio' name='id_usuario' value='"+users[i]['id'] +"'checked>  <img src="+public_path+users[i]['imagen']+" style='width:30px;height: 30px;'>"+" "+users[i]['nombre']+" "+ users[i]['apellido1'];
					info += "</label>";
					info += "<hr/>";
				    info += "<br/>";
				    info += "</fieldset>";
				}
				$(".maybeUsers").html(info);
	        });
        }else{
        	$(".maybeUsers").html("");
        }
    });

    $('#datetimepicker7').datetimepicker();
	   $('#datetimepicker7').data("DateTimePicker").minDate();
	    
	   $(function () {
		 $('#datetimepicker3').datetimepicker({
		   format: 'LT'
		 });
	 });

});

/*
|--------------------------------------------------------------------------------
| Boton cancela la orden de un formulario y redirecciona a la pagina anterior
|--------------------------------------------------------------------------------
*/
function cancel(){
  window.location.href = "/getCitas";
}