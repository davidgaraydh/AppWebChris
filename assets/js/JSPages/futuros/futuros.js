		function Guardar(){

    var form_data = new FormData(document.getElementById('frm_usuario'));                  
    $ticket=$("#ticket").val();
     $dia=$("#dia").val();
       $precio=$("#precio").val();
       $venta=$("#venta").val();
       $contrato=$("#contrato").val();
       $costo=$("#costo").val();
       $rentabilidad=$("#rentabilidad").val();


        form_data.append('ticket', $ticket);
        form_data.append('dia', $dia);
        form_data.append('precio', $precio);
         form_data.append('venta', $venta);
         form_data.append('contrato', $contrato);
         form_data.append('costo', $costo);
         form_data.append('rentabilidad', $rentabilidad);
        form_data.append('Accion', "Save");




  var val_ticket = [];
val_dia[0]="ticket";
val_dia[1]="Este campo no puede ir Vacio";

  var val_dia = [];
val_dia[0]="dia";
val_dia[1]="Este campo no puede ir Vacio";


  var val_precio = [];
val_precio[0]="precio";
val_precio[1]="Este campo no puede ir Vacio";

  var val_venta = [];
val_venta[0]="venta";
val_venta[1]="Este campo no puede ir Vacio";

  var val_contrato = [];
val_contrato[0]="contrato";
val_contrato[1]="Este campo no puede ir Vacio";

  var val_costo = [];
val_costo[0]="costo";
val_costo[1]="Este campo no puede ir Vacio";

  var val_rentabilidad = [];
val_rentabilidad[0]="rentabilidad";
val_rentabilidad[1]="Este campo no puede ir Vacio";


  

var ids=[];
ids[0]="ticket";
ids[1]="dia";
ids[2]="precio";
ids[3]="venta";
ids[4]="contrato";
ids[5]="costo";
ids[6]="rentabilidad";

//Selecciono los campos
var Validar=[];
Validar[0]=val_ticket;
Validar[1]=val_dia;
Validar[2]=val_precio;
Validar[3]=val_venta;
Validar[4]=val_contrato;
Validar[5]=val_costo;
Validar[6]=val_rentabilidad;


if(validacion(form_data,Validar,ids)==true){
            $.ajax({  
                url: "Core/Futuros/Manejo_Futuros.php",
                type: "post",  
                 dataType: 'json',
                                      processData: false,
    contentType: false,
                data: form_data,
                                           beforeSend: function() {
             $("#btnRegistrar").attr('value', 'Cargando . . . . .');
           },
                error:function(xhr, status, error){
                   error_msg("error",error,"animation-msg"); 
                
                },
                success: function(data) {

                  if(data==1) {
                  error_msg("exito","Insercion Correcta","animation-msg"); 
                  $("#btnRegistrar").attr('value', 'Registrar');
                  location.href="index.php";
                  }else if(data==2) {
                error_msg("error","Insercion Fallida","animation-msg"); 

                  }else if(data==3){
           error_msg("error","Ya existe este Nick","animation-msg"); 
 $("#txtUsuario").addClass("error_color");
                  }else if(data==4){
           error_msg("error","Ya existe este Celular","animation-msg"); 
 $("#txtCelular").addClass("error_color");
                  }
                  else if(data==5){
           error_msg("error","Ya existe este Correo electronico","animation-msg"); 
 $("#Email").addClass("error_color");
                  }
                   else if(data==6){
           error_msg("error","No se pudieron subir las imagenes","animation-msg"); 
                  }else {
                   error_msg("error","Insercion Fallida","animation-msg");  
                  }

                  
                }
            });
   
}




           
}