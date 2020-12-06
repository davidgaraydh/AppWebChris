

<?php 

include 'Core/Login/Recuerdame.php'  


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

          <div class='alert alert-success col-lg-6 offset-3 d-none mt-3' role='alert' id="exito"><label >No se pudo conectar al servidor debido al siguiente error: </label></div>

      <div class='alert alert-danger col-lg-6 offset-3 d-none mt-3' role='alert' id="error"><label >No se pudo conectar al servidor debido al siguiente error: </label></div>

<div class='alert alert-danger col-lg-6 offset-3 d-none mt-5' role='alert' id="FalloCredenciales">No Existe el usuario o la contraseña</div>

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo.png" style="width: 100%;" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Entrar</div>
		    <form>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  class="form-control input-shadow" placeholder="Nombre de Usuario" id="email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="contra" class="form-control input-shadow" placeholder="Contraseña">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Recuerdame</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right  d-none">
			  <a href="reset-password.html">Reiniciar Contraseña</a>
			 </div>
			</div>
			 <button onclick="Acceder();" type="button" class="btn btn-light btn-block">Acceder</button>
			  

			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">¿No tienes una cuenta? <a href="register.php"> Registrate aqui</a></p>
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
    <script type="text/javascript" src="assets/js/JSPages/login/login.js"> </script>

  
</body>
</html>
