
<?php


include 'routes.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
<title>El Arte de Invertir en la Bolsa</title>  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <link rel="icon" href="assets/images/logo.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">


          <div class='alert alert-success col-lg-6 offset-3 d-none mt-3' role='alert' id="exito"><label >Se registro correctamente. </label></div>

      <div class='alert alert-danger col-lg-6 offset-3 d-none mt-3' role='alert' id="error"><label >No se pudo conectar al servidor debido al siguiente error: </label></div>


	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo.png" style="width: 100%;" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Registrate</div>
		    <form id="frm_usuario" >
		    				  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Nombre</label>
			   <div class="position-relative has-icon-right">
				  <input id="nombre"  type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Ingrese su Nombre">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Nick</label>
			   <div class="position-relative has-icon-right">
				  <input id="nick"  type="text"  class="form-control input-shadow" placeholder="Nuevo Usuario">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input  id="email" type="text"  class="form-control input-shadow" placeholder="Ingresa tu email">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input  id="contra" type="Password"  class="form-control input-shadow" placeholder="Escribe tu contraseña">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Balance Inicial</label>
			   <div class="position-relative has-icon-right">
				  <input  id="Balance" type="text"  class="form-control input-shadow" placeholder="Escribe tu Balance Inicial">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

			                                                                      <div class="form-group row p-2">
<div class="col-sm-6 mb-3 mb-sm-0  text-center " >
  <a class="btn btn-info" href="#"  id="ClickUploadINEback" style="display: block;" >Subir Archivo</a>
                           <input type="file" id="UploadINEback" name="UploadINEback" class="inputfile inputfile-1"  accept="image/x-png,image/jpeg" style="display: none;" />
                         </div>
                  <div class="col-sm-6 text-center" style="height: 200px;" >
                <a class="example-image-link" href="https://happytravel.viajes/wp-content/uploads/2020/04/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" data-lightbox="INEfront" id="modalImgback" >
            <img src="https://happytravel.viajes/wp-content/uploads/2020/04/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" class="img-fluid img-thumbnail" style="width: 100%;height: 200px;" id="imgINEback">
            </a>
                  </div>
                </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">Acepto los terminos y condiciones</label>
			     </div>
			    </div>
			  
			 <a  onclick="Guardar();" id="btnRegistrar" class="btn btn-light btn-block waves-effect waves-light">Registrate</a>
			  
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">¿Ya tienes una cuenta? <a href="login.php"> Inicia sesion</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
<script type="text/javascript" src="assets/js/Globales/globales.js"></script>
	<script type="text/javascript" src="assets/js/JSPages/registrar.js"></script>

<script type="text/javascript">
	  $( "#ClickUploadINEback" ).click(function() {
    $( "#UploadINEback" ).trigger( "click" );
});


	  $("#UploadINEback").change(function(e) {
for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var ext=file.type.split("/");
        if(ext[1]=="jpeg" || ext[1]=="png" || ext[1]=="jpg") {
       var redondeo= Math.round(file.size/1000);
        if(redondeo<=1000) {
        var reader = new FileReader();
        var resultado;
        reader.onloadend = function() {
            resultado=reader.result;
            $("#imgINEback").attr("src",resultado);
        }
        reader.readAsDataURL(file);
        }else {
          error_msg("error","El tamanio de la imagen es muy grande");
        }
        }else {
         error_msg("error","La extension no es la correcta");
        }


      }

});


</script>

</body>




<?php 
include('Core/Config/paypal.php');
?>


<div class="container">
    <br>
    <table class="table">
        <tr>
          <td style="width:150px;padding-left: 45%;border-color: black;">
          <?php include 'Core/Config/paypalcheckout.php'; ?>
          </td>
        </tr>
    </table>    
</div>


</html>
