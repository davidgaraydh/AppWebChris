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
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
            <h6 class="mt-2 user-title">David Garay Rodriguez</h6>
            <p class="user-subtitle">davidgaray.dh@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> <a href="profile.php">Cuenta</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a data-toggle="modal" data-target="#logoutModal" > Cerrar Sesion</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Ordenes Totales <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total de ingresos <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Visitantes <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Mensajes <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  -->
	  


      <div class="row text-center">
     <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Trafico del Sitio
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="lineChart"></canvas>
      </div>
     </div>
     
     <div class="row mt-5 row-group text-center border-top border-light-3" >
       <div class="col-12 col-lg-6">
         <div class="p-3">
                 <label>Balance de Cuenta</label>
           <h5 class="mb-0" id="AccountBalance"  ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-6">
         <div class="p-3">
           <label>Acumulacion de Porcentaje</label>
           <h5 class="mb-0" id="ChangePercent" >Hola</h5>
         </div>
       </div>
     </div>
     
    </div>
   </div>


  </div><!--End Row-->


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Acciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Futuros</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    


  <div class="row text-center">

<div class="col-lg-12 m-3" >
  
  <div class="row" >
     <div class="col-lg-6" >
       <input type="date" class="form-control" id="dateInicio" name="">
     </div>
  <div class="col-lg-6" >
    <input type="date" class="form-control" id="dateFin"  name="">
  </div> 
  </div>



</div>

     <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Grafica de opciones
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="barChart"></canvas>
      </div>
     </div>
     
     <div class="row mt-5 row-group text-center border-top border-light-3" >
       <div class="col-12 col-lg-4">
         <div class="p-3">
          <label>trader reales</label>
           <h5 class="mb-0" id="traderO" ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>Profit Factor</label>
           <h5 class="mb-0" id="ProfitFactorO"  ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
          <label>Win rate %</label>
           <h5 class="mb-0" id="WinRateO" ></h5>
         </div>
       </div>
     </div>
     
    </div>
   </div>

  </div><!--End Row-->







  <div class="row text-center">

<div class="col-lg-12 m-3" >




</div>

     <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Grafica de opciones
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="scatChartOpciones"></canvas>
      </div>
     </div>
     
     
    </div>
   </div>

  </div><!--End Row-->




  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
<div class="col-lg-12 m-3" >
  
  <div class="row" >
     <div class="col-lg-6" >
       <input type="date" class="form-control" id="dateInicioA" name="">
     </div>
  <div class="col-lg-6" >
    <input type="date" class="form-control" id="dateFinA"  name="">
  </div> 
  </div>



</div>

      <div class="row text-center">
     <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Trafico del Sitio
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="barChartAcciones"></canvas>
      </div>
     </div>
     
     <div class="row mt-5 row-group text-center border-top border-light-3" >
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>trader reales</label>
           <h5 class="mb-0"  id="traderA"></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>Profit Factor</label>
           <h5 class="mb-0" id="ProfitFactorA" ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>Win rate %</label>
           <h5 class="mb-0" id="WinRateA"  ></h5>
         </div>
       </div>
     </div>
     
    </div>
   </div>


 <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Grafica de Acciones
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="scatChartAcciones"></canvas>
      </div>
     </div>

     
    </div>
   </div>

  </div><!--End Row-->


  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    

<div class="col-lg-12 m-3" >
  
  <div class="row" >
     <div class="col-lg-6" >
       <input type="date" class="form-control" id="dateInicioF" name="">
     </div>
  <div class="col-lg-6" >
    <input type="date" class="form-control" id="dateFinF"  name="">
  </div> 
  </div>



</div>

      <div class="row text-center">
     <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Trafico del Sitio
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="barChartFuturos"></canvas>
      </div>
     </div>
     
     <div class="row mt-5 row-group text-center border-top border-light-3" >
       <div class="col-12 col-lg-4">
         <div class="p-3">
                 <label>trader reales</label>
           <h5 class="mb-0" id="trader"  ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>Profit Factor</label>
           <h5 class="mb-0" id="ProfitFactor" ></h5>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <label>Win rate %</label>
           <h5 class="mb-0" id="WinRate" ></h5>
         </div>
       </div>
     </div>
     
    </div>
   </div>


    <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
     <div class="card-header">Grafica de Futuros
     </div>
     <div class="card-body">
      <div class="chart-container-1"  style="margin:90px;">
        <canvas id="scatChartFuturos"></canvas>
      </div>
     </div>
     
     
    </div>
   </div>


  </div><!--End Row-->


  </div>
</div>

 


	

      <!--End Dashboard Content-->
	  
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
          Derechos Reservados © 2020 GHIDSAN
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
 <script src="assets/plugins/Chart.js/chartjs-script.js"></script>

  <!-- Index js -->
  <!--<script src="assets/js/index.js"></script>-->

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
    window.location.href = "http://localhost/ProyectosClientes/AppWeb_Christian/login.php";
}



                }
            });


    
    }





  </script>

  
</body>
</html>
