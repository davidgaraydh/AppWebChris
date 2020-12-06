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
        <li class="dropdown-item"><a href="profile.php" > <i class="icon-wallet mr-2"></i> Cuenta</a></li>
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

    <div class="row mt-3">

      <div class="col-lg-5"  >
        <div class="card">
           <div class="card-body">
           <div class="card-title" style="color: #ff5400;"  >Formulario</div>
           <hr>
            <form id="frm_opciones" >



<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
      <label for="input-8">ticket</label>
            <input type="text" class="form-control form-control-rounded" id="ticket" placeholder="Ingrese su ticket">
    </div>
    <div class="col-lg-6" >
      <label for="input-10">strike</label>
            <input type="number" class="form-control form-control-rounded" id="strike" placeholder="ingresa tu strike">
    </div>
  </div>
</div>



<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
<label for="input-10">contrato</label>

            <select class="form-control form-control-rounded" id="contrato" >
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
                                        <label for="input-10">Dias Vencimiento</label>

<input type="text" disabled="disabled" id="diasvencimiento" placeholder="Calculo Dias" class="form-control form-control-rounded" >
    </div>
  </div>
</div>


<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                                                   <label for="input-10">Fecha Vencimiento</label>
<input type="date" id="fechavencimiento" class="form-control form-control-rounded" >
    </div>
    <div class="col-lg-6" >
                                                   <label for="input-10">Put/Call</label>
            <select class="form-control form-control-rounded" id="put_call" >
              <option value="CompraPUT" >Compra PUT</option>
                 <option value="CompraCALL" >Compra CALL</option>
                   <option value="VentaPUT" >Venta PUT</option>
                     <option value="VentaCALL" >Venta CALL</option>
            </select>
    </div>
  </div>
</div>


<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                            <label for="input-6">Short/Long</label>
            <select class="form-control form-control-rounded" disabled="disabled" id="short_long" >
              <option value="CORTO" >CORTO</option>
                 <option value="LARGO" >LARGO</option>
            </select>
    </div>
    <div class="col-lg-6" >
                               <label for="input-7">Fecha de Salida</label>
            <input type="date" class="form-control form-control-rounded" disabled="disabled" id="fechasalida" placeholder="ingresa tu fecha de salida">
    </div>
  </div>
</div>




<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                               <label for="input-8">Precio</label>
            <input type="number" class="form-control form-control-rounded" id="precioentrada" placeholder="ingresa tu volumen">
    </div>
    <div class="col-lg-6" >
                           <label for="input-9">Cerrado</label>
            <input type="number" class="form-control form-control-rounded" id="ventaentrada" placeholder="Ingreesa tu precio">
    </div>
  </div>
</div>



<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                              <label for="input-9">Dinero</label>
            <input type="number" class="form-control form-control-rounded" disabled="disabled" id="dinero" placeholder="Ingresa tu precio">
    </div>
    <div class="col-lg-6" >
<label for="input-9">Rentabilidad</label>
  <div class="input-group mb-3">
            <input type="text" class="form-control text-right" disabled="disabled" id="rentabilidad" placeholder="Ingresa tu opcion de venta">
    <div class="input-group-append">
      <span class="input-group-text">%</span>
    </div>
  </div>

</form>
    </div>
  </div>
</div>

<div class="col-lg-12" >
  <div class="row" >
    <div class="col-lg-6" >
                               <label for="input-8">Tiempo Total:</label>
            <input type="number" class="form-control form-control-rounded" disabled="disabled" id="tiempototal" placeholder="calculo de tu tiempo">
    </div>
        <div class="col-lg-6" >
                               <label for="input-8">Rendimiento Anual:</label>
            <input type="number" class="form-control form-control-rounded" disabled="disabled" id="rendimientoanual" placeholder="calculo de tu rendimiento">
    </div>
  </div>
</div>





         </div>







           <div class="form-group text-center">
            <a  class="btn btn-light btn-round px-5" onclick="SaveOpciones();" id="btnSave" data-id="Guardar" ><i class="icon-lock"></i> Guardar</a>
          </div>

         </div>
      </div>

<div class="col-lg-7" >
  

      <table id="TablaOpciones" style="color:black;" class="display">
    <thead style="font-size: 8px;color: #ff5400"   >
        <tr>
            <th>Fecha Actual</th>
            <th>Ticket</th>
            <th>Dinero</th>
            <th>R</th>
             <th>TT</th>
             <th>Estatus</th>
             <th>Acciones</th>
        </tr>
    </thead>
    <tbody style="font-size: 8px;" >

    </tbody>
</table>

    <div class="col-lg-12 mt-4" >
      <div class="row" >
        <div class="col-lg-3" >Total Dinero:</div>
          <div class="col-lg-3"  id="totaldinero"  ></div>
            <div class="col-lg-4" >Total Rentabilidad:</div>
             <div class="col-lg-2" id="rentabilidadlbl" ></div>
      </div>
    </div>


</div>


      </form>




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
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <style type="text/css">
    #TablaOpciones_previous{
      color: white !important;
    }
        #TablaOpciones_next{
      color: white !important;
    }
    #TablaOpciones_wrapper{
      background-color: #798284 !important;
      border-radius: 20px;
    }
    #TablaOpciones_length {
      margin: 15px;
    }
    #TablaOpciones_filter{
       margin: 15px;
    }
    #TablaOpciones{
      width: 90% !important;
    }
    #TablaOpciones_info{
      margin:15px;
    }
    .red{
      background-color: red;
    }
    #TablaOpciones{
  color: white !important;
      background-color: #031018 !important;
    }


            #TablaOpciones tbody .odd{

      background-color: #627780 !important;
    }

                #TablaOpciones tbody .even{
      background-color: #627780 !important;
    }

                    #TablaOpciones tbody .sorting_1{
      background-color: #627780 !important;
    }
  </style>


  <script type="text/javascript">


    $( document ).ready(function() {
    LoadTotal();
});

$resultado=0;
    window.setInterval(function(){
  if(($("#precioentrada").val().length!=0) && ($("#ventaentrada").val().length!=0)){
   var entrada= Number($("#precioentrada").val());
   var salida= Number($("#ventaentrada").val());

$resultado=round((salida-entrada)*100,1);

$resultadoRenta=round(((salida-entrada)/entrada)*100,2);





if($("#ventaentrada").val().length!=0){
 $("#idutilidad").val($resultado);
  $("#rentabilidad").val($resultadoRenta);
  if($("#put_call").val()=="VentaCALL" || ($("#put_call").val()=="VentaPUT")){
  $("#dinero").val("-"+$resultado);
  }else {
  $("#dinero").val($resultado);
  }

}else {
   $("#idutilidad").val("");
    $("#rentabilidad").val("");
    $("#dinero").val("");
}


$renta=$("#rentabilidad").val();
$tt=$("#tiempototal").val();
$("#rendimientoanual").val(round(((Number($renta)/Number($tt))/100)*365),2);


  }else {
      $("#idutilidad").val("");
    $("#rentabilidad").val(""); 
    $("#dinero").val("");
  }


var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;


$arreglo=$("#fechavencimiento").val().split("-");



if($arreglo.length>1){

var startD = new Date(today);
var endD = new Date($("#fechavencimiento").val());

const diffTime = Math.abs(startD - endD);
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 


$("#diasvencimiento").val(diffDays);
}else {
$("#diasvencimiento").val("");
}



if($("#ventaentrada").val().length!=0){
$("#fechasalida").val(today);
}else {
$("#fechasalida").val("");
}



var endTiempoTotal = new Date($("#fechavencimiento").val());

var ddTotal = String(endTiempoTotal.getDate()).padStart(2, '0');



$("#tiempototal").val(round((dd-ddTotal)+1,1));



},2000);


$( "#put_call" ).change(function() {

if($(this).val()=="CompraPUT" || $(this).val()=="VentaCALL"){
  $("#short_long").val("CORTO");
}else {
    $("#short_long").val("LARGO");
}


});


function round(num, decimales = 2) {
    var signo = (num >= 0 ? 1 : -1);
    num = num * signo;
    if (decimales === 0) //con 0 decimales
        return signo * Math.round(num);
    // round(x * 10 ^ decimales)
    num = num.toString().split('e');
    num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
    // x * 10 ^ (-decimales)
    num = num.toString().split('e');
    return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}


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
                url: "Core/Opciones/Opciones.php",
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

 var form_data = new FormData(document.getElementById('frm_opciones')); 
        form_data.append('id', $(elemento).attr("id"));
        form_data.append('Accion', "GetInfo");


            $.ajax({  
                url: "Core/Opciones/Opciones.php",
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




    function LoadTotal(){

 var form_data = new FormData(document.getElementById('frm_opciones')); 
        form_data.append('Accion', "LoadTotal");


            $.ajax({  
                url: "Core/Opciones/Opciones.php",
                type: "post",  
                 dataType: 'json',
                                      processData: false,
    contentType: false,
                data: form_data,
                error:function(xhr, status, error){
                  alert("error");
                
                },
                success: function(data) {


$("#totaldinero").html("$<label>"+data["data"][0]+"</label> USD");
$("#rentabilidadlbl").html("<label>"+data["data"][1]+"</label>%");

                  
                }
            });

    }



        function getInfo(elemento){

 var form_data = new FormData(document.getElementById('frm_opciones')); 
        form_data.append('id', $(elemento).attr("id"));
        form_data.append('Accion', "GetUpdate");


            $.ajax({  
                url: "Core/Opciones/Opciones.php",
                type: "post",  
                 dataType: 'json',
                processData: false,
    contentType: false,
                data: form_data,
                error:function(xhr, status, error){
                  alert("error");
                
                },
                success: function(data) {

                  console.log(data);


$("#ticket").val(data["ticket"]);
$("#strike").val(data["strike"]);
$("#contrato").val(data["contrato"]);
$("#put_call").val(data["put_call"]);
$("#fechavencimiento").val(data["fechaentrada"]);
$("#short_long").val(data["shor_long"]);
$("#fechasalida").val(data["fechsasalida"]);
$("#precioentrada").val(data["preciochris"]);
$("#ventaentrada").val(data["ventachris"]);
$("#btnSave").attr("data-id",data["idOpcion"]);
$("#btnSave").html("<i class='icon-lock'></i> Actualizar");
$("#btnSave").attr("id","Actualizar");
                  
                }
            });

    }

    $(document).ready( function () {
    
    $Tabla=$('#TablaOpciones').DataTable({
          "ajax": "Core/Opciones/Opciones.php?Accion=LoadTable",
           language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    "deferRender": true,
  "retrieve": true,
  "processing": true,
          "columns":[
        {"data":"dia"},
         {"data":"ticket"},
          {"data":"dinero"},
           {"data":"rentabilidad"},
            {"data":"tiempo_total"},
            {"data":"Open"},
          {"data":"0"}        ]
    });
} );

    function SaveOpciones(){
      

 var form_data = new FormData(document.getElementById('frm_opciones'));                  
       $dia=$("#dia").val();
       $hora=$("#hora").val();
       $ticket=$("#ticket").val();
       $strike=$("#strike").val();
       $contrato=$("#contrato").val();
        $diasvencimiento=$("#diasvencimiento").val();
       $put_Call=$("#put_call").val();
       $short_long=$("#short_long").val();
       $fechasalida=$("#fechasalida").val();
       $precioentrada=$("#precioentrada").val();
       $ventaentrada=$("#ventaentrada").val();
       $dinero=$("#dinero").val();
       $rentabilidad=$("#rentabilidad").val();
       $fechavencimiento=$("#fechavencimiento").val();
       $tiempototal=$("#tiempototal").val();



        form_data.append('ticket', $ticket);
         form_data.append('strike', $strike);
          form_data.append('contrato', $contrato);
        form_data.append('diasvencimiento', $diasvencimiento);
        form_data.append('put_Call', $put_Call);
        form_data.append('short_long', $short_long);
        form_data.append('fechasalida', $fechasalida);
         form_data.append('precioentrada', $precioentrada);
          form_data.append('ventaentrada', $ventaentrada);
        form_data.append('dinero', $dinero);
        form_data.append('rentabilidad', $rentabilidad);
         form_data.append('fechavencimiento', $fechavencimiento);
          form_data.append('tiempototal', $tiempototal);
        



var btn=$("#btnSave").attr("data-id");
if(btn=="Guardar"){
form_data.append('Accion', "Save");
}else {
    form_data.append('idUpdate', $("#Actualizar").attr("data-id"));

form_data.append('Accion', "Update");
}


            $.ajax({  
                url: "Core/Opciones/Opciones.php",
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
    window.location.href = "45.90.108.106/AppWebChris/login.php";
}



                }
            });


    
    }

  </script>
  
</body>
</html>
