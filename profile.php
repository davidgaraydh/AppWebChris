<?php 

session_start();

if(count($_SESSION)==0){
header('Location: 45.90.108.106/AppWebChris/login.php');
}



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
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="assets/images/logo.png" style="width: 50%;" class="logo-icon" alt="logo icon">

     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Menus Principales</li>
      <li>
        <a href="index.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Escritorio</span>
        </a>
      </li>

      <li>
        <a href="futuros.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Futuros</span>
        </a>
      </li>

      <li>
        <a href="acciones.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Acciones</span>
        </a>
      </li>

      <li>
        <a href="opciones.php">
          <i class="zmdi zmdi-grid"></i> <span>Opciones</span>
        </a>
      </li>




	 

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">

    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="<?php echo "Core/Registrar/".$_SESSION["img"]; ?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php echo "Core/Registrar/".$_SESSION["img"]; ?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">David Garay</h6>
            <p class="user-subtitle">davidgaray.dh@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Cuenta</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" ><i class="icon-power mr-2"></i> <a data-toggle="modal" data-target="#logoutModal" > Cerrar Sesion</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="https://i.pinimg.com/originals/44/d2/c5/44d2c5eb8a3b14f990af37fc057778b6.jpg" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="<?php echo "Core/Registrar/".$_SESSION["img"]; ?>" alt="profile-image" class="profile">
                <h5 class="card-title">David Garay</h5>
                <p class="card-text">Descripcion</p>
            </div>

        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Perfil</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Editar</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Perfil del Usuario</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Acerca de</h6>
                            <p>
                                Web Designer, UI/UX Engineer
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Actividad Reciente</h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>David </strong>Hizo un calculo</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Celina </strong> Se Logueo en la<strong> `Plataforma`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Juan Rodrigo </strong> Elimino un  <strong>`calculo`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Mario </strong> Actualizo un registro de un<strong>`calculo`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Salma </strong> Cerro su sesion en la  <strong>`Plataforma`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>





                <div class="tab-pane" id="edit">
                    <form id="frm_Edit" >
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nick</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="nick" type="text" value="<?php echo $_SESSION['user_id'] ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Correo electronico</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="email" type="email" value="<?php echo $_SESSION['Email'] ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Ingrese su Nombre</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="nombre" type="text" value="<?php echo $_SESSION['Nombre'] ?>" >
                            </div>
                        </div>

                                                                            <div class="form-group row p-2">
<div class="col-sm-6 mb-3 mb-sm-0  text-center " >
  <a class="btn btn-info" href="#"  id="ClickUploadINEback" style="display: block;" >Subir Archivo</a>
                           <input type="file" id="UploadINEback" name="UploadINEback" class="inputfile inputfile-1"  accept="image/x-png,image/jpeg" style="display: none;" />
                         </div>
                  <div class="col-sm-6 text-center" style="height: 200px;" >
                <a class="example-image-link" href="https://happytravel.viajes/wp-content/uploads/2020/04/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" data-lightbox="INEfront" id="modalImgback" >
            <img src="<?php echo "Core/Registrar/".$_SESSION["img"]; ?>" class="img-fluid img-thumbnail" style="width: 100%;height: 200px;" id="imgINEback">
            </a>
                  </div>
                </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancelar">
                                <input type="button" class="btn btn-primary" onclick="UpdateProfile();" value="Editar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
   
  </div><!--End wrapper-->



      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;" >Esta a Punto de Salir</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: black;">¿Seguro que quiere cerrar la Sesion?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal" style="cursor: pointer;">Cancelar</button>
          <a class="btn btn-primary"onclick="cerrarSesion();" style="cursor: pointer;"  >Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>


     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    
    function cerrarSesion(){


                    $.ajax({  
                url: "Core/Login/Login.php",
                type: "POST",  
                data: {Accion:"CerrarSesion"},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {


if(data==1){
    window.location.href = "45.90.108.106/AppWebChris/login.php";
}



                }
            });


    
    }

    
    function UpdateProfile(){

$Nombre=$("#nombre").val();
$Nick=$("#nick").val();
$Email=$("#email").val();

       var form_data = new FormData(document.getElementById('frm_Edit'));    
        form_data.append('Nombre', $Nombre);
         form_data.append('Nick', $Nick);
          form_data.append('Email', $Email);
        form_data.append('Accion', "Editar");

                  $.ajax({  
                url: "Core/Login/Login.php",
                type: "post",  
                 dataType: 'json',
                                      processData: false,
    contentType: false,
                data: form_data,
                error:function(xhr, status, error){
                  alert("error");
                
                },
                success: function(data) {

                  if(data==1) {
               
                   swal("Eliminacion correcta", {
      icon: "success",
    });
               
setTimeout(function(){ 
location.reload(true);
}, 3000);




                  }

                  
                }
            });
        
    }



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
</html>
