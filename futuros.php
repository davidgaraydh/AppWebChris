
<?php 

session_start();

if(count($_SESSION)==0){
header('Location: dohsantest.online/AppWebChris/login.php');
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
  <title>El arte de invertir en la bolsa</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <link rel="icon" href="assets/images/logo.ico" type="image/x-icon">
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

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

  
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
        <li class="dropdown-item"><a href="profile.php" ><i class="icon-wallet mr-2"></i> Cuenta</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a data-toggle="modal" data-target="#logoutModal" > Cerrar Sesion</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<form id="frm_futuros" >
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">

      <div class="col-lg-5" >
        <div class="card">
           <div class="card-body">
           <div class="card-title" style="color: #ff5400;"  >Formulario</div>
           <hr>
            <form>
           <div class="col-lg-12">
            <div class="row" >
                        <div class="col-lg-6" >            <label >Ticket</label>
            <select class="form-control form-control-rounded" id="idticket" >
              <option value="5" >S&P</option>
              <option value="2" >nasdaq</option>
            </select></div>
            <div class="col-lg-6" >
                          <label for="input-7">Stop</label>
            <input type="number" class="form-control form-control-rounded" min="1" max="31" id="idstop" placeholder="Ingrese el stop">
            </div>  
            </div>


           </div>
           <div >

<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                  <label for="input-8">Entrada</label>
            <input type="number" class="form-control form-control-rounded" min="1" max="100000" id="identrada" placeholder="Ingrese su entrada">
    </div>
     <div class="col-lg-6" >
                   <label for="input-9">Salida</label>
            <input type="number" class="form-control form-control-rounded" min="1" max="100000" id="idsalida" placeholder="Ingrese su salida">
     </div>
  </div>
</div>


           <div class="col-lg-12" >
            <div class="row" >
              <div class="col-lg-6" >
                            <label for="input-6">Contrato</label>
                        <select class="form-control form-control-rounded" id="idcontrato" >
              <option value="1" >1</option>
              <option value="2" >2</option>
                            <option value="3" >3</option>
              <option value="4" >4</option>
                            <option value="5" >5</option>
              <option value="6" >6</option>
                            <option value="7" >7</option>
              <option value="8" >8</option>
                                          <option value="9" >9</option>
              <option value="10" >10</option>
            </select>
              </div>
              <div class="col-lg-6" >
                            <label for="input-7">Puntos</label>
            <input type="number" disabled="disabled" class="form-control form-control-rounded" min="1" max="100000" id="idpuntos" placeholder="Calculo de puntos">
              </div>
            </div>

           </div>


                      <div class="col-lg-12" >
            <div class="row" >
              <div class="col-lg-6" >
                            <label for="input-8">Utilidad</label>
            <input type="number" class="form-control form-control-rounded" min="1" max="1000" disabled="disabled" id="idutilidad" placeholder="Calculo de Utilidad">
              </div>
               <div class="col-lg-6" >
                             <label for="input-6">Setup</label>
            <select class="form-control form-control-rounded" id="idSetup" >
              <option value="Compra" >Compra</option>
              <option value="Venta" >Venta</option>
            </select>
               </div>
            </div>

           </div>


           </div>
     
                <div class="form-group text-center mt-3">
            <a onclick="SaveFuturos();" href="#" id="btnSave" data-id="Guardar" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Guardar</a>
          </div>

          </form>
         </div>
         </div>
      </div>
      <div class="col-lg-7" >
        

            <table id="TablaAcciones" style="color:black;" class="display">
    <thead style="font-size:8px !important;color: #ff5400" >
        <tr>
           <th>Setup</th>
            <th>Stop</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Fecha</th>
            <th>Utilidad</th>
            <th>Estatus</th>
             <th style="width: 50%;" >Acciones</th>
        </tr>
    </thead>
    <tbody style="font-size:8px !important;" >

    </tbody>
</table>


      </div>

    </div><!--End Row-->





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


      <div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detalle de la notificacion</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" id="bodyAlert" style="color: black;" >

          



        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
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
  

 <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  </form>
  

  
  <style type="text/css">

 #TablaAcciones_previous{
      color: white !important;
    }
        #TablaAcciones_next{
      color: white !important;
    }
    #TablaAcciones_wrapper{
      background-color: #798284 !important;
      border-radius: 20px;
    }
    #TablaAcciones_length {
      margin: 15px;
    }
    #TablaAcciones_filter{
       margin: 15px;
    }
    #TablaAcciones{
      width: 90% !important;
    }
    #TablaAcciones_info{
      margin:15px;
    }
    .red{
      background-color: red;
    }
    #TablaAcciones{
  color: white !important;
      background-color: #031018 !important;
    }


            #TablaAcciones tbody .odd{

      background-color: #627780 !important;
    }

                #TablaAcciones tbody .even{
      background-color: #627780 !important;
    }

                    #TablaAcciones tbody .sorting_1{
      background-color: #627780 !important;
    }

  </style>

  <script type="text/javascript">

window.setInterval(function(){
  if($("#idpuntos").val().length!=0){
   var ticket= Number($("#idticket").val());
   var puntos= Number($("#idpuntos").val());
$("#idutilidad").val((ticket*puntos)*Number($("#idcontrato").val()));
  }

$resultadoPuntos=(Number($("#idsalida").val())-Number($("#identrada").val()));


if($("#idsalida").val().length!=0){
 $("#idpuntos").val($resultadoPuntos);
}else {
   $("#idpuntos").val("");
   $("#idutilidad").val("");
}


}, 2000);





function deleteItem(elemento){
  $id=$(elemento).attr("id");

swal({
  title: "Eliminar Registro",
  text: "¿Ya no podra revertir esta accion?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

                    $.ajax({  
                url: "Core/futuros/futuros.php",
                type: "post",  
                data: {Accion:"DeleteItem",id:$id},
                error:function(xhr, status, error){
                console.log(error);
                },
                success: function(data) {
    swal("Eliminacion correcta", {
      icon: "success",
    });
location.reload(true);
                }
            });

  } else {
    swal("Accion Cancelada");
  }
});

}

        function InfoProyecto(elemento){

 var form_data = new FormData(document.getElementById('frm_futuros')); 
        form_data.append('id', $(elemento).attr("id"));
        form_data.append('Accion', "GetInfo");


            $.ajax({  
                url: "Core/futuros/futuros.php",
                type: "post",  
                 dataType: 'text',
                                      processData: false,
    contentType: false,
                data: form_data,
                error:function(xhr, status, error){
                  alert("error");
                
                },
                success: function(data) {

$("#bodyAlert").html(data);

                  
                }
            });

    }



        function getInfo(elemento){

 var form_data = new FormData(document.getElementById('frm_futuros')); 
        form_data.append('id', $(elemento).attr("id"));
        form_data.append('Accion', "GetUpdate");


            $.ajax({  
                url: "Core/futuros/futuros.php",
                type: "post",  
                 dataType: 'json',
                processData: false,
    contentType: false,
                data: form_data,
                error:function(xhr, status, error){
                  alert("error");
                
                },
                success: function(data) {

$("#idticket").val(data["ticket"]);
$("#idstop").val(data["stop"]);
$("#identrada").val(data["entrada"]);
$("#idsalida").val(data["salida"]);
$("#idpuntos").val(data["puntos"]);
$("#idutilidad").val(data["utilidad"]);
$("#idSetup").val(data["setup"]);
$("#idcontrato").val(data["contrato"]);
$("#btnSave").attr("data-id",data["idFuturo"]);
$("#btnSave").html("<i class='icon-lock'></i> Actualizar");
$("#btnSave").attr("id","Actualizar");

                  
                }
            });

    }


            $(document).ready( function () {
    $('#TablaAcciones').DataTable({
          "ajax": "Core/futuros/futuros.php?Accion=LoadTable",
    "deferRender": true,
  "retrieve": true,
  "processing": true,
       "language": {

      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }

  },
          "columns":[
           {"data":"setup"},
         {"data":"stop"},
         {"data":"entrada"},
         {"data":"salida"},
          {"data":"Fecha"},
          {"data":"utilidad"},
         {"data":"Open"},
          {"data":"0"}        ]
    });
} );

    function SaveFuturos(){
      

 var form_data = new FormData(document.getElementById('frm_futuros'));                  
    $ticket=$("#idticket").val();
     $stop=$("#idstop").val();
       $entrada=$("#identrada").val();
       $salida=$("#idsalida").val();
       $puntos=$("#idpuntos").val();
        $utilidad=$("#idutilidad").val();
       $setup=$("#idSetup").val();
       $contrato=$("#idcontrato").val();
$open=1;

 form_data.append('ticket', $ticket);
        form_data.append('stop', $stop);
        form_data.append('entrada', $entrada);
         form_data.append('salida', $salida);
          form_data.append('puntos', $puntos);
        form_data.append('utilidad', $utilidad);
        form_data.append('setup', $setup);
         form_data.append('contrato', $contrato);
        form_data.append('Accion', "Save");


        if($salida.length!=0){
$open=1;
        }else {
$open=0;
        }


        form_data.append('Open', $open);

var btn=$("#btnSave").attr("data-id");
if(btn=="Guardar"){
form_data.append('Accion', "Save");
}else {
  form_data.append('idUpdate', $("#Actualizar").attr("data-id"));
form_data.append('Accion', "Update");
}

            $.ajax({  
                url: "Core/futuros/futuros.php",
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
                 
swal({
  title: "Guardado Exitoso",
  text: "Da clic en el boton",
  icon: "success",
  button: "Aceptar",
}).then((value) => {

location.reload(true);


});
                 
                  }

                  
                }
            });



    }
    
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
    window.location.href = "dohsantest.online/AppWebChris/login.php";
}



                }
            });


    
    }

  </script>

</body>
</html>
