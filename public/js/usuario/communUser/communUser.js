$(document).ready(function () {

	$("#padecimientoInfo").click(function (e) {
        e.preventDefault();
      	$('.padecimientoUser').slideDown(1000);
      	$('.medicionUser').hide(1000);         
    });
    $("#medicionesInfo").click(function (e) {
        e.preventDefault();
      	$('.padecimientoUser').hide(1000);
      	$('.medicionUser').slideDown(1000);         
    });
    //$("#img").click(function (e) {
      //  e.preventDefault();
       
       //$('.editImg').bPopup();         
    //});

});
$(document).ready(function () {
    $("#img").click(function (e) {
        e.preventDefault();
       
      $('.editImg').bPopup();       
    });
 });