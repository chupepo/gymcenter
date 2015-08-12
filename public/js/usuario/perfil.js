$(document).ready(function () {

	 $("#divPadecimiento").click(function(e){
        e.preventDefault();
      	$('.crearPadecimientos').slideDown(1000);
      	$('.medicionUser').hide(1000);
      	
		/*Estos 2 pertenecen a la vista padecimientos.blade*/
		$('.edit-padecimiento').hide(1000);
		$('.table-padecimientos').slideDown(1000);  
    });

	$(".atras").click(function (e) {
        e.preventDefault();
		$('.crearPadecimientos').toggle(1000);
		$('.medicionUser').toggle(1000);

		/*Estos 2 pertenecen a la vista padecimientos.blade*/
		$('.edit-padecimiento').hide(1000);
		$('.table-padecimientos').slideDown(1000);  
    });

	$("#calIndice").click(function (e) {
        e.preventDefault();
        
      	$('#formIndice').slideDown(1000);
      	$('#cacular').slideDown(1000);
      	$('#calIndice').hide(1000);
          
    }); 
	
	$("#calFrecuencia").click(function (e) {
        e.preventDefault();
        
      	$('#formFrecuencia').slideDown(1000);
      	$('#calFrecuencia').hide(1000);          
    });



	/*muestra el pop-up de editar datos de pago de un usuario*/
	$("#show_datos_pago").click(function (e) {
        e.preventDefault();
        /*Se muestra el popup del formulario*/
        //$('.datos_de_pagos').bPopup();
		
		$('.datos_de_pagos').bPopup({
            follow: [true, true], //x, y
            position: [400, 200] //x, y
        });
    });

    /*cierra el pop-up de editar datos de pago*/
    $("#bt_cancelar").click(function () {
        $('.finalizarCita').bPopup().close();
    });
	/*fin de muestra el pop-up de editar datos de pago de un usuario*/


    $("#bt_cerrar2").click(function () {
    	
    	
        $('.datos_de_pagos').bPopup().close();
        
    });



});



/* Calculo del indice de masa corporal */
    function calcularIndice () {
    	
    	var peso = $("#txt_peso").val();
    	var altura = $("#txt_altura").val();
    	
    	/*si el valor digitado tiene comas se cambian por puntos*/
    	altura = altura.toString().replace(',','.');

    	/* Se convierte l altura en metro */
		var alturaMetro=altura/100;

		if(altura==""){
				document.getElementById("errorIMC").innerHTML="Por favor, introduce tu altura.";
		}
		else if(altura<0){
				document.getElementById("errorIMC").innerHTML="La altura que introduzca debe ser positiva.";
		}
		else if(altura<20){
				document.getElementById("errorIMC").innerHTML="Ha introducido la altura en metros. Por favor, multipliquela por 100 para introducirla en centimetros.";
		}
		else{
			document.getElementById("errorIMC").innerHTML="";
			if(peso==""){
				document.getElementById("errorIMC").innerHTML="Por favor, introduce tu peso.";
			}
			else if(peso<0){
					document.getElementById("errorIMC").innerHTML="El peso que introduzca debe ser positivo.";
			}
			else{
				document.getElementById("errorIMC").innerHTML="";
				/*CALCULO IMC*/
				var alturaCuadrado = alturaMetro*alturaMetro;
				
				var imc=peso/alturaCuadrado;

				var resultado = Math.round(imc*100)/100;

				resultado = resultado.toString().replace(',','.');
				$("#txt_resultado").val(resultado);
				$("#indiceGuardar").slideDown(100);
				//document.getElementById("IMC").value=			
				/*CALCULO DESCRIPCION IMC*/
				if(imc<16){
					document.getElementById("IMCdetallado").innerHTML="Delgadez Severa";		
				}
				else if(imc<17){
					document.getElementById("IMCdetallado").innerHTML="Delgadez Moderada";		
				}
				else if(imc<18.5){
					document.getElementById("IMCdetallado").innerHTML="Delgadez Aceptable";		
				}
				else if(imc<25){
					document.getElementById("IMCdetallado").innerHTML="Peso Normal";		
				}
				else if(imc<30){
					document.getElementById("IMCdetallado").innerHTML="Sobrepeso";		
				}
				else if(imc<35){
					document.getElementById("IMCdetallado").innerHTML="Obeso: Tipo I";		
				}
				else if(imc<40){
					document.getElementById("IMCdetallado").innerHTML="Obeso: Tipo II";		
				}
				else if(imc>=40){
					document.getElementById("IMCdetallado").innerHTML="Obeso: Tipo III";		
				}
			}
		}
	}	

/* Calculo del indice de masa corporal */
    function calcularFrecuencia () {

    	var edad = $("#txt_edad").val();
    	var frecuenciaCR = $("#txt_FCR").val();
    	var porcentajeFCO = $("#txt_PFCO").val();
    	var numero = 220;

		if(edad==""){
				document.getElementById("errorFrecuencia").innerHTML="Por favor, introduce tu edad.";
		}
		else if(edad<8 || edad >100){
				document.getElementById("errorFrecuencia").innerHTML="La edad que introduzca debe ser mayor a 8 y menor a 100";
		}
		else if(frecuenciaCR==""){
				document.getElementById("errorFrecuencia").innerHTML="Por favor, introduce la Frecuencias Cardiaca en Reposo";
		}
		else if(frecuenciaCR<20 || frecuenciaCR >150){
				document.getElementById("errorFrecuencia").innerHTML="La frecuencia de reposo que introduzca debe ser mayor a 20 y menor a 150";
		}
		else if(porcentajeFCO == ""){
				document.getElementById("errorFrecuencia").innerHTML="Por favor, introduce porcentaje de frecuencia objetivo";
		}
		else if(porcentajeFCO<1 || porcentajeFCO >100){
				document.getElementById("errorFrecuencia").innerHTML="El porcentaje que introduzca debe ser mayor a o igual a 1 y menor a 100";
		}
		else{
				document.getElementById("errorFrecuencia").innerHTML="";
				
				var porcentajeFCO = porcentajeFCO/100;
		    	var FrecuenciaCME = numero - edad ;
		    	var ReservaFC= FrecuenciaCME - frecuenciaCR;
		    	var FrecuenciaCO= ReservaFC * porcentajeFCO +parseInt(frecuenciaCR);

		    	FrecuenciaCO = FrecuenciaCO.toString().replace(',','.');
		    	/*Se cargan los inputs con los resultados*/
		    	$("#txt_FCME").val(FrecuenciaCME);
		    	$("#txt_RFC").val(ReservaFC);
		    	$("#txt_FCO").val(FrecuenciaCO);
		    	
				/*Se muestran los inputs ocultos*/
		    	$('#FrecuenciaFCME').slideDown(1000);
		    	$('#ReservaFC').slideDown(1000);
		    	$('#FrecuenciaCO').slideDown(1000);
		    	$('#frecuenciaGuardar').slideDown(100);
			}
		}
	
	function saveDatosPago(){


		var tipo_pago = $("#txt_tipo_pago").val();
    	var fecha_pago = $("#txt_fecha_pago").val();
    	var dia_pago = $("#txt_dia_pago").val();

    	var guardar = false;
    	
    	if(tipo_pago != "" && fecha_pago != ""){
    		if(tipo_pago == "quincenal" || tipo_pago == "mensual"){
		    	
		    	guardar = true;

		    	if(tipo_pago == "mensual"){

		    		if(dia_pago > 31 || dia_pago < 0){
		    			guardar = false;
		    		}
		    	}

		    	if(guardar){
		    		var form = $('#btn-datos-pago');
				    var url = form.attr('action');
				    var data = form.serialize();
				    
				    $.post(url,data, function(){
				        
				        $(".mensaje").html("Los datos de pago se han guardado correctamente");
				        $(".mensaje").show(1000);
				       	
				       	setTimeout(function() {
				        $(".mensaje").fadeOut(2000);
				    	},3000);


				    	$('.datos_de_pagos').bPopup().close();
				    });
		    	}else{
				        $(".error").html("Hay un error en el dia de pago seleccionado");
				        $(".error").show(1000);	
		    	}
		    	
		    }
	    }

	    //alert("no")






/*

*/
	}	
    /*
    |--------------------------------------------------------------------------------
    | Boton cansela la orden de un formulario y redirecciona a la pagina anterior
    |--------------------------------------------------------------------------------
    */
    function cancel(id){
      window.location.href = "/perfil/"+id;
    }