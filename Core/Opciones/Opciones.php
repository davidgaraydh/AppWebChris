<?php


$Accion="";
if(count($_POST)>0){
$Accion=$_POST["Accion"];
}else {
  $Accion=$_GET["Accion"];
}



Switch($Accion){

case "Save":
$Opciones = new Opciones();
$Opciones->Save(); 
break;
case "LoadTable":
$LoadTable = new Opciones();
$LoadTable->LoadTable(); 
break;
case "LoadTotal":
$LoadTotal = new Opciones();
$LoadTotal->LoadTotal(); 
break;
case "GetInfo":
$GetInfo = new Opciones();
$GetInfo->GetInfo(); 
break;
case "GetUpdate":
$GetUpdate = new Opciones();
$GetUpdate->GetUpdate(); 
break;
case "Update":
$Update = new Opciones();
$Update->Update(); 
break;
case "DeleteItem":
$DeleteItem = new Opciones();
$DeleteItem->DeleteItem(); 
break;
default:
echo "Accion default";
break;
}


Class Opciones{


        public function __construct() {
        
        }



 function Save(){

 include '../../Routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;


date_default_timezone_set("America/Mexico_City");
session_start();


      $ticket = $_POST['ticket'];
      $strike = $_POST['strike'];
               $contrato = $_POST['contrato'];
       $diasvencimiento =$_POST['diasvencimiento'];
      $put_Call = $_POST['put_Call'];
      $compra_venta = $_POST['put_Call'];
      $short_long = $_POST['short_long'];
        $precioentrada = $_POST['precioentrada'];
         $ventaentrada = $_POST['ventaentrada'];
          $dinero = $_POST['dinero'];
           $rentabilidad = $_POST['rentabilidad'];
           $fechaVencimiento = $_POST['fechavencimiento'];
           $tiempototal = $_POST['tiempototal'];

$open="";
           if($_POST['rentabilidad']==""){
$open="0";
           }else {
$open="1";
           }



 $ArrayInsert=[];
 array_push($ArrayInsert, "'".date("Y-m-d")."'");
 array_push($ArrayInsert,"'".date("h:i:s")."'");
 array_push($ArrayInsert, $ticket);
 array_push($ArrayInsert, $strike);
 array_push($ArrayInsert, $contrato);
 array_push($ArrayInsert, $diasvencimiento);
 array_push($ArrayInsert,  "'".$fechaVencimiento."'");
  array_push($ArrayInsert, $put_Call);
   array_push($ArrayInsert,  $compra_venta);
    array_push($ArrayInsert,  $short_long);
     array_push($ArrayInsert,  "'".date("Y-m-d h:i:s")."'");
      array_push($ArrayInsert, $precioentrada);
          array_push($ArrayInsert, $ventaentrada);
     array_push($ArrayInsert, $dinero);
 array_push($ArrayInsert, $rentabilidad);
     array_push($ArrayInsert, "Nick001"); 
       array_push($ArrayInsert,  $tiempototal); 
              array_push($ArrayInsert,  $open); 
                            array_push($ArrayInsert,  $_SESSION["id"]); 
 
$sql=InsertEasy("tb_opciones",$ArrayInsert);



        $result= mysqli_query($conn,$sql);

         if ($result) {
echo json_decode(1);

}else {
    echo json_decode(0);
}

/* close connection */
mysqli_close($conn);



}


function LoadTotal(){
        include "../BD/db_connect.php";

 $sqlSumas = "select sum(dinero) as total_dinero,sum(rentabilidad)/10 as renta from web_chris.tb_opciones;";
        $resultSumas = mysqli_query($conn, $sqlSumas);
        $TotalDinero=array();

                if ($resultSumas->num_rows > 0) {
            while ($row = $resultSumas->fetch_assoc()) {
$TotalDinero[0]=round($row["total_dinero"], 2);
$TotalDinero[1]=round($row["renta"],2);
            }

          }

  echo json_encode(array("data"=>$TotalDinero));

}

function LoadTable() {
        include "../BD/db_connect.php";

        $sql = "select * from tb_opciones";


        $result = mysqli_query($conn, $sql);


        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

              if($row["Open"]==1){
                if($row["dinero"]<0 || $row["rentabilidad"]<0){
                    $row["Open"]="<div class='text-center' style='border-radius:5px;background-color:red;color:white;font-size:12px;font-weight: bold;' >C</div>";
                }else {
            $row["Open"]="<div class='text-center' style='border-radius:5px;background-color:green;color:white;font-size:12px;font-weight: bold;' >C</div>";
                }
              }else {
$row["Open"]="<div class='text-center' style='border-radius:5px;background-color:black;color:white;font-size:12px;font-weight: bold;' >A</div>";
              }

              $rawdata[$i]=$row;
                array_push($rawdata[$i], "<div class='btn-group'><button class='btn btn-info btnEditarProducto' style='padding:6px;' data-toggle='modal' data-target='#ModalInfo' id=".$row["idOpcion"]." onclick='InfoProyecto(this);'  ><i class='fa fa-info-circle'></i></button></div>
                  <div class='btn-group'><button class='btn btn-success btnEditarProducto' style='padding:6px;' data-toggle='modal' data-target='#ModalDetalle' id=".$row["idOpcion"]."  onclick='getInfo(this);'  ><i class='fa fa-pencil-square-o'></i></button></div>
                  <div class='btn-group'><button class='btn btn-danger btnEditarProducto' style='padding:6px;' data-toggle='modal' data-target='#ModalDetalle'  id=".$row["idOpcion"]."  onclick='deleteItem(this);'  ><i class='fa fa-trash-o'></i></button></div>");
                $i++;
            }
        }
        /* close connection */
        mysqli_close($conn);



echo json_encode(array("data"=>$rawdata));


}


function GetInfo(){
 include "../BD/db_connect.php";

        $sql = " select * from tb_opciones where idOpcion=".$_POST["id"]."  ";


$strAlerta="";

        $result = mysqli_query($conn, $sql);

$strAlerta.="<form id='frmDetalleProyecto' >";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
$strAlerta.="<div class='row m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Dia:</div>
           <div class='col-lg-8' ><label id='Dia' style='color:black;font-size:10px;font-size:10px;' >".$row["dia"]."</label></div>
         </div>
                  <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Hora:</div>
           <div class='col-lg-8'  ><label id='Ticket' style='color:black;font-size:10px;'  >".$row["hora"]."</label></div>
         </div>
                  <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Ticket:</div>
           <div class='col-lg-8'  ><label id='Strike' style='color:black;font-size:10px;'  >".$row["ticket"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Strike:</div>
           <div class='col-lg-8'  ><label id='Contrato' style='color:black;font-size:10px;'  >".$row["strike"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Contrato:</div>
           <div class='col-lg-8'  ><label id='DiasVencimiento' style='color:black;font-size:10px;'  >".$row["contrato"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Dias Vencimiento:</div>
           <div class='col-lg-8'  ><label id='FechaEntrega' style='color:black;font-size:10px;'  >".$row["diasvencimiento"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Fecha entrada:</div>
           <div class='col-lg-8'  ><label id='Operacion1' style='color:black;font-size:10px;'  >".$row["fechaentrada"]."</label></div>
         </div>
         
                                    <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Compra/Venta:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["compra_venta"]."</label></div>
         </div>

                                             <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Short/Long:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["shor_long"]."</label></div>
         </div>

                                             <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Fecha Salida:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["fechsasalida"]."</label></div>
         </div>

                                             <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Precio:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["preciochris"]."</label></div>
         </div>

                                             <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Venta:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["ventachris"]."</label></div>
         </div>
                                                      <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Dinero:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["dinero"]."</label></div>
         </div>
                                                      <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Rentabilidad:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["rentabilidad"]."</label></div>
         </div>

                                                               <div class='row  m-0' >
           <div class='col-lg-4 text-left' style='font-size:10px;' >Tiempo Total:</div>
           <div class='col-lg-8'  ><label id='Operacion3' style='color:black;font-size:10px;'  >".$row["tiempo_total"]."</label></div>
         </div>
";
                
            }
        }
$strAlerta.="</form>";


if($result){
echo  $strAlerta;
}else {
echo 0;
}

        /* close connection */
        mysqli_close($conn);

}




function GetUpdate(){
 include "../BD/db_connect.php";

        $sql = " select * from tb_Opciones where idOpcion=".$_POST["id"]."  ";


$array=array();

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               $row["fechsasalida"]=date('Y-m-d', strtotime(str_replace('-','/', $row["fechsasalida"])));
                $array=$row;
            }
        }


if($result){
echo  json_encode($array);
}else {
echo 0;
}

        /* close connection */
        mysqli_close($conn);

}


function Update(){

   include '../../Routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;


date_default_timezone_set("America/Mexico_City");
session_start();



      $ticket = $_POST['ticket'];
      $strike = $_POST['strike'];
               $contrato = $_POST['contrato'];
       $diasvencimiento =$_POST['diasvencimiento'];
      $fechaentrada = $_POST['fechavencimiento'];
       $put_call = $_POST['put_Call'];
      $compra_venta = $_POST['put_Call'];
      $shor_long = $_POST['short_long'];
       $fechasalida = $_POST['fechasalida'];
        $preciochris = $_POST['precioentrada'];
         $ventachris = $_POST['ventaentrada'];
          $dinero = $_POST['dinero'];
           $rentabilidad = $_POST['rentabilidad'];


 $ArrayInsert=[];
 array_push($ArrayInsert, $ticket);
 array_push($ArrayInsert, $strike);
 array_push($ArrayInsert, $contrato);
 array_push($ArrayInsert, $diasvencimiento);
  array_push($ArrayInsert, "".$fechaentrada."");
   array_push($ArrayInsert,  $put_call);
    array_push($ArrayInsert,  $compra_venta);
     array_push($ArrayInsert,  $shor_long);
      array_push($ArrayInsert, "".$fechasalida."");
          array_push($ArrayInsert, $preciochris);
     array_push($ArrayInsert, $ventachris);
 array_push($ArrayInsert, $dinero);
          array_push($ArrayInsert, $rentabilidad);
     array_push($ArrayInsert, "Nick001"); 




 $ArrayUpdate=[];
 array_push($ArrayUpdate, "ticket");
 array_push($ArrayUpdate, "strike");
 array_push($ArrayUpdate, "contrato");
 array_push($ArrayUpdate, "diasvencimiento");
  array_push($ArrayUpdate, "fechaentrada");
   array_push($ArrayUpdate,  "put_call");
    array_push($ArrayUpdate,  "compra_venta");
     array_push($ArrayUpdate,  "shor_long");
      array_push($ArrayUpdate, "fechsasalida");
          array_push($ArrayUpdate, "preciochris");
     array_push($ArrayUpdate, "ventachris");
 array_push($ArrayUpdate, "dinero");
          array_push($ArrayUpdate, "rentabilidad");
     array_push($ArrayUpdate, "Nick"); 

 
$sql=Update("tb_opciones",$ArrayUpdate,$_POST["idUpdate"],"idOpcion",$ArrayInsert);


        $result= mysqli_query($conn,$sql);

         if ($result) {
echo json_decode(1);

}else {
    echo json_decode(0);
}

/* close connection */
mysqli_close($conn);

}


function DeleteItem(){
   include '../../Routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;

 
$sql= deleteItem("tb_Opciones",$_POST["id"],"idOpcion");

$result= mysqli_query($conn,$sql);


mysqli_close($conn);

if($result){
echo json_encode(1);
}else {
  echo json_encode(0);
}


}


}

/**

function ChangeDay($dia){

switch($dia){
  case "Monday":
  return "Lunes";
  break;
    case "Tuesday":
      return "Martes";
  break;
    case "Wednesday":
      return "Miercoles";
  break;
    case "Thursday":
      return "Jueves";
  break;
    case "Friday":
      return "Viernes";
  break;
    case "Saturday":
      return "Sabado";
  break;
      case "Sunday":
        return "Domingo";
  break;
  default : "No dia";
  break;
}

}**/


?>