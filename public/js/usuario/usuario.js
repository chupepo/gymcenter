$(document).ready(function () {

   /*Buscador de la tabla de usuarion en home */
    $(function () {
    
        $( '#table' ).searchable({
            striped: true,
            oddRow: { 'background-color': '#f5f5f5' },
            evenRow: { 'background-color': '#fff' },
            searchType: 'fuzzy'
            });
              
            $( '#searchable-container' ).searchable({
              searchField: '#container-search',
              selector: '.row',
              childSelector: '.col-xs-4',
              show: function( elem ) {
                  elem.slideDown(100);
              },
              hide: function( elem ) {
                  elem.slideUp( 100 );
              }
        });
    });

    $("#divCita").click(function (e) {
        e.preventDefault();
        $('.divTableUsers').hide(700);
        $('.cita').show(700);
    });
    $("#divVerCitas").click(function (e) {
        e.preventDefault();
        $('.divTableUsers').hide(700);
        $('.cita').hide(700);
    });
    


/*
 *------------------------------------------------------------------------
 * Función que busca usuario por nombre
 *------------------------------------------------------------------------
 */
$("#search2").keyup(function(){


        var nombre = $('#search2').val();

        var public_path = $('meta[name="base_url"]').attr('content');

        if(nombre.length >= 2){
                  
          var form = $('#txt_form_table_user_busqueda');
          var url = form.attr('action');
          var data = form.serialize();
          $.post(url,data, function(result){
              
              /*Se convierte la variable result en un objeto Json */
          var users = JSON.parse(result);

          
          var info = "<br/>";
          
          if(users.length >= 1){

              info += '<div class="panel-body">';

              info +='<table class="table table-striped" id="table">';
              info +=  '<thead>';
              info +=    '<tr>';
              info +=      '<th>Avatar</th>';
              info +=      '<th>Nombre</th>';
              info +=      '<th>Apellido</th>';
              info +=      '<th>Correo</th>';
              info +=      '<th>Cédula</th>';
              info +=      '<th>Editar</th>';
              info +=      '<th>Perfil</th>';
              info +=    '</tr>';
              info +=  '</thead>';
              info +=  '<tbody>';

              for(i = 0; i < users.length; i++ ){
                
                
                    info +=    '<tr data-id="'+users[i]['id']+'">';
                    info +=         '<td><img src="'+users[i]['imagen']+'"style="width:50px;height:50px;"></td>';
                    info +=         '<td>'+users[i]['nombre']+'</td>';
                    info +=         '<td>'+users[i]['apellido1']+'</td>';
                    info +=         '<td>'+users[i]['email']+'</td>';
                    info +=         '<td>'+users[i]['cedula']+'</td>';
                    info +=         '<td><a href="/admin/users/'+users[i]['id']+'/edit "class="btn btn-primary">Editar</a></td>';
                    info +=         '<td><a href="/perfil/'+users[i]['id']+'" class="btn btn-info">Perfil</a></td>';
                    info +=    '</tr>';               
              }                 

                   info +=  '</tbody>';
                  info +='</table>';
                info +='</div>';

          }else{
            info += "<label><h3>No se encontro al usuario</h3></label><br/>";
            info += "<br/>";          
          }

          $(".div-table-user-inicio").hide(1000);

          $(".div-table-user-busqueda").html(info);
          $(".div-table-user-busqueda").show(1000);
          
        });
      }else{
          $(".div-table-user-inicio").show(1000);
          $(".div-table-user-busqueda").hide(1000);
      }
    });
});

    /*
    |--------------------------------------------------------------------------------
    | Boton cancela la orden de un formulario y redirecciona a la pagina anterior
    |--------------------------------------------------------------------------------
    */
    function cancel(){
      window.location.href = "/home";
    }

    function cerrarCitaContent(){
        $('.divTableUsers').show(700);
        $('.cita').hide(700);
    }
