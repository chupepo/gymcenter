$(document).ready(function() {
    $(".citaFinalizar").click(function (e) {
        e.preventDefault();
       
        var row = $(this).parents('tr');
        /*se obtiene el id del tr citaFinalizar*/
        var id = row.data("id");
       	/* se lo agregamos al input tipo hidden del formulario */
        $("#id").val(id );

        /*Se muestra el popup del formulario*/
        $('.finalizarCita').bPopup();
    });

    $("#bt_cancelar").click(function () {
        $('.finalizarCita').bPopup().close();
    });
});
