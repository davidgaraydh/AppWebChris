
 $recuerdame="";
    $(document).ready(function(){

        $('input[type="checkbox"]').click(function(){

            if($(this).prop("checked") == true){

                $recuerdame="Activo";
                console.log($recuerdame);

            }

            else if($(this).prop("checked") == false){

                $recuerdame="Inactivo";
                console.log($recuerdame);

            }

        });

    });


    function RemoveSesionIniciada(){
  
            $.ajax({  
                url: "Core/Login/Login.php",
                type: "post",  
                 dataType: 'json',
                data: {User:""+$("#usuario").val()+"",Password:""+$("#password").val()+"",Accion:"Recuperar"},
                error:function(){
               
                                  $("#errorM").removeClass("d-none");
$("#errorM").append("<b><label>"+error+"</label></b>");
                    
                },
                success: function(data) {

if (data==1) {
                                  $("#exitoM").removeClass("d-none");
$("#exitoM").html("<label>Se quito con exito de sesion iniciada</label>");
}else if(data==0){
                                  $("#errorM").removeClass("d-none");
$("#errorM").html("<label>No se pudo quitar de sesion iniciada</label>");
}
                  
                }
            });
}


    function Acceder(){
  $email=$("#email").val();
  $pass=$("#contra").val();

            $.ajax({  
                url: "Core/Login/Login.php",
                type: "post",  
                 dataType: 'json',
                data: {User:""+$email+"",Password:""+$pass+"",Recuerdame:""+$recuerdame+"",Accion:"Acceder"},
                error:function(error){
               
                                  $("#error").removeClass("d-none");
$("#error").append("<b><label>"+error+"</label></b>");
                },
                success: function(data) {
                   if(data==1) {
location.href="45.90.108.106/AppWebChris/index.php";
                   }else if(data==0) {
                   $("#FalloCredenciales").removeClass("d-none");
                   }
                  
                }
            });
}
