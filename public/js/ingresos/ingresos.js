$(document).ready(function() {

	getIngresosHoy();
	

	$('#desde').on('change',function(){

		var form = $('#txt-form-ingresos-rango');
		
		var url = form.attr('action');
		
		var data = form.serialize();

		$.post(url,data, function(result){
			
			var pagos = JSON.parse(result);

		    var total = 0;

			var info ='<br/>';

					 info +='<div class ="div-tables-users">';
					 info +=	'<div class="col-md-13 col-md-offset-0">';
					 info +=		'<div class="panel-body">';

				if(pagos.length >= 1){
					 info +=			'<div class="div-ingresos-hoy">';
	                 info +=  				'<h2>Ingresos desde el rango seleccionado</h2>';
	                 info +=				'<a href="/home" class="btn btn-primary">Atras</a>';
	                 info +=			'</div>';
	                 info +=	        '<hr/>';


				     info +=	        '<table class="table table-striped" id="table">';
				     info +=	        	'<thead>';
				     info +=                	'<tr>';
				     info +=                    	'<th>Avatar</th>';
				     info +=                    	'<th>Nombre</th>';
				     info +=                    	'<th>Apellido</th>';
				     info +=                    	'<th>Monto</th>';
				     info +=                  	'</tr>';
				     info +=            	'</thead>';
				     info +=            	'<tbody>';

					for(i = 0; i < pagos.length; i++ ){

							total = total + parseInt(pagos[i]['monto']);
				    	         info +=		'<tr data-id="'+pagos[i]['id']+'">';
				    		     info +=         '<td><img src="'+pagos[i]['imagen']+'"style="width:50px;height:50px;"></td>';
				    		     info +=         '<td>'+pagos[i]['nombre']+'</td>';
				    		     info +=         '<td>'+pagos[i]['apellido1']+'</td>';
				    		     info +=         '<td>'+pagos[i]['monto']+'</td>';
				    	         info +=		'</tr>';
					}

				    	         info +=		'<tr data-id="">';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td id=total> Total: '+formatoNumber(total)+'</td>';
				    	         info +=		'</tr>';
	                 info +=    			'</tbody>';
	                 info +=  		'</table>';
            	}else{
            	     info +='<div class="div-ingresos-hoy">';
  				     info +=	'<h2>No se ha registrado ningun ingreso con el rango seleccionado</h2>';
  				     info +=	'<a href="/home" class="btn btn-primary">Atras</a>';
                	 info +='</div>';
            	}
            	info += '<br/>'; 

            	
            	$(".ingresos-hoy").html(info);


		});

	});


	$('#hasta').on('change',function(){
		var form = $('#txt-form-ingresos-rango');
		
		var url = form.attr('action');
		
		var data = form.serialize();

		$.post(url,data, function(result){
			var pagos = JSON.parse(result);

		    var total = 0;

			var info ='<br/>';

					 info +='<div class ="div-tables-users">';
					 info +=	'<div class="col-md-13 col-md-offset-0">';
					 info +=		'<div class="panel-body">';

				if(pagos.length >= 1){
					 info +=			'<div class="div-ingresos-hoy">';
	                 info +=  				'<h2>Ingresos desde el rango seleccionado</h2>';
	                 info +=				'<a href="/home" class="btn btn-primary">Atras</a>';
	                 info +=			'</div>';
	                 info +=	        '<hr/>';


				     info +=	        '<table class="table table-striped" id="table">';
				     info +=	        	'<thead>';
				     info +=                	'<tr>';
				     info +=                    	'<th>Avatar</th>';
				     info +=                    	'<th>Nombre</th>';
				     info +=                    	'<th>Apellido</th>';
				     info +=                    	'<th>Monto</th>';
				     info +=                  	'</tr>';
				     info +=            	'</thead>';
				     info +=            	'<tbody>';

					for(i = 0; i < pagos.length; i++ ){

							total = total + parseInt(pagos[i]['monto']);
				    	         info +=		'<tr data-id="'+pagos[i]['id']+'">';
				    		     info +=         '<td><img src="'+pagos[i]['imagen']+'"style="width:50px;height:50px;"></td>';
				    		     info +=         '<td>'+pagos[i]['nombre']+'</td>';
				    		     info +=         '<td>'+pagos[i]['apellido1']+'</td>';
				    		     info +=         '<td>'+pagos[i]['monto']+'</td>';
				    	         info +=		'</tr>';
					}

				    	         info +=		'<tr data-id="">';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td id=total> Total: '+formatoNumber(total)+'</td>';
				    	         info +=		'</tr>';
	                 info +=    			'</tbody>';
	                 info +=  		'</table>';
            	}else{
            	     info +='<div class="div-ingresos-hoy">';
  				     info +=	'<h2>No se ha registrado ningun ingreso con el rango seleccionado</h2>';
  				     info +=	'<a href="/home" class="btn btn-primary">Atras</a>';
                	 info +='</div>';
            	}
            	info += '<br/>'; 

            	
            	$(".ingresos-hoy").html(info);

		});
	});

});


/*
|--------------------------------------------------------------------------------
| Funcion para enviar un correo a todos los usuarios
|--------------------------------------------------------------------------------
*/
function getIngresosHoy(){

		var form = $('#txt-form-ingresos');
		
		var url = form.attr('action');
		
		var data = form.serialize();

		$.post(url,data, function(result){

		    var pagos = JSON.parse(result);
		    var total = 0;

			var info ='<br/>';

					 info +='<div class ="div-tables-users">';
					 info +=	'<div class="col-md-13 col-md-offset-0">';
					 info +=		'<div class="panel-body">';

				if(pagos.length >= 1){
					 info +=			'<div class="div-ingresos-hoy">';
	                 info +=  				'<h2>Ingresos del dia de hoy</h2>';
	                 info +=				'<a href="/home" class="btn btn-primary">Atras</a>';
	                 info +=			'</div>';
	                 info +=	        '<hr/>';


				     info +=	        '<table class="table table-striped" id="table">';
				     info +=	        	'<thead>';
				     info +=                	'<tr>';
				     info +=                    	'<th>Avatar</th>';
				     info +=                    	'<th>Nombre</th>';
				     info +=                    	'<th>Apellido</th>';
				     info +=                    	'<th>Monto</th>';
				     info +=                  	'</tr>';
				     info +=            	'</thead>';
				     info +=            	'<tbody>';

					for(i = 0; i < pagos.length; i++ ){

							total = total + parseInt(pagos[i]['monto']);
				    	         info +=		'<tr data-id="'+pagos[i]['id']+'">';
				    		     info +=         '<td><img src="'+pagos[i]['imagen']+'"style="width:50px;height:50px;"></td>';
				    		     info +=         '<td>'+pagos[i]['nombre']+'</td>';
				    		     info +=         '<td>'+pagos[i]['apellido1']+'</td>';
				    		     info +=         '<td>'+pagos[i]['monto']+'</td>';
				    	         info +=		'</tr>';
					}

				    	         info +=		'<tr data-id="">';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td></td>';
				    		     info +=         '<td id=total> Total: '+formatoNumber(total)+'</td>';
				    	         info +=		'</tr>';
	                 info +=    			'</tbody>';
	                 info +=  		'</table>';
            	}else{
            	     info +='<div class="div-ingresos-hoy">';
  				     info +=	'<h2>No se ha registrado ningun ingreso el dia de hoy</h2>';
  				     info +=	'<a href="/home" class="btn btn-primary">Atras</a>';
                	 info +='</div>';
            	}
            	info += '<br/>'; 

            	
            	$(".ingresos-hoy").html(info);
            	
			
	    });
}

function formatoNumber(numero){

	var valor = "";
	if(numero >= 1000 && numero <10000 ){
		
		numero = numero.toString();
		
		for (var i = 0; i < numero.length ; i++) {
				
				if(i == 0){
					valor += numero[i]+".";
				}else{
					valor += numero[i];
				}
		};

	}

	if(numero >= 10000 && numero <100000 ){
		
		numero = numero.toString();
		
		for (var i = 0; i < numero.length ; i++) {
				
				if(i == 1){
					valor += numero[i]+".";
				}else{
					valor += numero[i];
				}
		};

	}

	if(numero >= 100000 && numero <1000000 ){
		
		numero = numero.toString();
		
		for (var i = 0; i < numero.length ; i++) {
				
				if(i == 2){
					valor += numero[i]+".";
				}else{
					valor += numero[i];
				}
		};

	}
	if(numero >= 1000000 && numero <10000000 ){
		
		numero = numero.toString();
		
		for (var i = 0; i < numero.length ; i++) {
				
				if(i == 0 || i == 3){
					valor += numero[i]+".";
				}else{
					valor += numero[i];
				}
		};

	}
	if(numero >= 10000000 && numero <100000000 ){
		
		numero = numero.toString();
		
		for (var i = 0; i < numero.length ; i++) {
				
				if(i == 1 || i == 4){
					valor += numero[i]+".";
				}else{
					valor += numero[i];
				}
		};

	}

	return valor;

}