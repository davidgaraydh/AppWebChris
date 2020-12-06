


		function Guardar(){


    var form_data = new FormData(document.getElementById('frm_usuario'));                  
    $nick=$("#nick").val();
     $email=$("#email").val();
       $contra=$("#contra").val();
       $nombre=$("#nombre").val();
       $Balance=$("#Balance").val();


        form_data.append('nick', $nick);
        form_data.append('email', $email);
        form_data.append('contra', $contra);
         form_data.append('nombre', $nombre);
          form_data.append('Balance', $Balance);
        form_data.append('Accion', "Save");




  var val_nombre = [];
val_nombre[0]="nombre";
val_nombre[1]="Este campo no puede ir Vacio";
val_nombre[2]="No se permiten numeros en este campo";

  var val_nick = [];
val_nick[0]="nick";
val_nick[1]="Este campo no puede ir Vacio";



  var val_email = [];
val_email[0]="email";
val_email[1]="El formato del email es incorrecto";
val_email[2]="Este campo no puede ir Vacio";

  var val_pass = [];
val_pass[0]="contra";
val_pass[1]="La clave no cumple con las especificaciones necesarias";
val_pass[2]="Este campo no puede ir Vacio";

  

var ids=[];
ids[0]="nick";
ids[1]="email";
ids[2]="contra";

//Selecciono los campos
var Validar=[];
Validar[0]=val_nick;
Validar[1]=val_email;
Validar[2]=val_pass;
Validar[3]=val_nombre;


if(validacion(form_data,Validar,ids)==true){
            $.ajax({  
                url: "Core/Registrar/Manejo_Usuario.php",
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