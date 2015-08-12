@section('prueba')

<?php
        $encrypter = app('Illuminate\Encryption\Encrypter');
        $encrypted_token = $encrypter->encrypt(csrf_token());
 ?>
<div class="container">
  <div class="row">
    

  <h2>Add Task</h2>
 
{!! Form::open(array('id' => 'frm')) !!}
 
<table>
 
<tr>
 <td>{!! Form::label('customer', 'Customer') !!}<br />{!! Form::text('customer') !!}</td>
 <td>{!! Form::label('details', 'Details') !!}<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />{!! Form::textarea('details') !!}</td>
 <td>{!! Form::submit('Add Task') !!}</td></tr>
 
</table>
 
{!! Form::token() . Form::close() !!}




<script>
 
$("document").ready(function(){
     $("#frm").submit(function(e){
         
         
         e.preventDefault();
         var customer = $("input[name=customer]").val();
         var details = $("textarea[name=details]").val();
         var dataString = 'customer='+customer+'&details='+details;
         
         alert(customer);
         alert(details);
         alert(dataString);

         $.ajax({
             type: "POST",
             url : "/prueba",
             data : dataString,
             dataType : "json",
             crossDomain : true,
             success : function(data){
             
            }
         
        },"json");
     
        });

 });//end of document ready function
 </script>



<hr />




  </div>
</div>
@endsection