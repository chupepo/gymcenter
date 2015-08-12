$(document).ready(function () {
	
	function buscarUsuario(){
		alert("dsd");
	}
});

	function buscarUsuario(){
		$value =  $("#buscarUsuario").val();

		if ($value.length >= 4) {
			alert($value);
		}
	}
	/*
    |--------------------------------------------------------------------------------
    | Boton cansela la orden de un formulario y redirecciona a la pagina anterior
    |--------------------------------------------------------------------------------
    */
    function cancel(id){
      window.location.href = "/perfil/"+id;
    }