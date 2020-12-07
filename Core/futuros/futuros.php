<?php



$Accion="";
if(count($_POST)>0){
$Accion=$_POST["Accion"];
}else {
  $Accion=$_GET["Accion"];
}



Switch($Accion){

case "Save":
$Futuros = new acciones();
$Futuros->Save(); 
break;
case "LoadTable":
$LoadTable = new acciones();
$LoadTable->LoadTable(); 
break;
case "GetInfo":
$GetInfo = new acciones();
$GetInfo->GetInfo(); 
break;
case "GetUpdate":
$GetUpdate = new acciones();
$GetUpdate->GetUpdate(); 
break;
case "Update":
$Update = new acciones();
$Update->Update(); 
break;
case "DeleteItem":
$DeleteItem = new acciones();
$DeleteItem->DeleteItem(); 
break;
default:
echo "Accion default";
break;
}


Class acciones{


        public function __construct() {
        
        }



 function Save(){



 include '../../Routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;


date_default_timezone_set("America/Mexico_City");
session_start();


         $ticket = $_POST['ticket'];
       $stop =$_POST['stop'];
      $entrada = $_POST['entrada'];
      $salida = $_POST['salida'];
               $puntos = $_POST['puntos'];
       $utilidad =$_POST['utilidad'];
      $setup = $_POST['setup'];
      $contrato = $_POST['contrato'];
      $open = $_POST['Open'];


 $ArrayInsert=[];
 array_push($ArrayInsert, $ticket);
 array_push($ArrayInsert,$stop);
 array_push($ArrayInsert, $entrada);
 array_push($ArrayInsert, $salida);
 array_push($ArrayInsert, $contrato);
  array_push($ArrayInsert, $puntos);
   array_push($ArrayInsert, $utilidad);
    array_push($ArrayInsert, $setup);
    array_push($ArrayInsert, $open);
     array_push($ArrayInsert,$_SESSION["id"]); 
 
$sql=InsertEasy("tb_futuros",$ArrayInsert);




        $result= mysqli_query($conn,$sql);

         if ($result) {
echo json_decode(1);

}else {
    echo json_decode(0);
}

/* close connection */
mysqli_close($conn);

}


function LoadTable() {
        include "../BD/db_connect.php";

        $sql = "select * from tb_futuros";


        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              if($row["Open"]==1){
                if($row["puntos"]<0 || $row["utilidad"]<0){
                    $row["Open"]="<div class='text-center' style='border-radius:5px;background-color:red;color:white;font-size:12px;font-weight: bold;' >C</div>";
                }else {
            $row["Open"]="<div class='text-center'  style='border-radius:5px;background-color:green;color:white;font-size:12px;font-weight: bold;' >C</div>";
                }
              }else {
$row["Open"]="<div class='text-center'  style='border-radius:5px;background-color:black;color:white;font-size:12px;font-weight: bold;' >A</div>";
              }
              $rawdata[$i]=$row;
                array_push($rawdata[$i], "<div class='btn-group'><a class='btn btn-info btnEditarProducto' style='padding:6px;' data-toggle='modal' data-target='#ModalInfo' id=".$row["idFuturo"]." onclick='InfoProyecto(this);'  ><i class='fa fa-info-circle' style='font-size:8px;' ></i></a></div>
                                  <div class='btn-group'><a class='btn btn-success btnEditarProducto'  style='padding:6px;' data-toggle='modal' data-target='#ModalDetalle' id=".$row["idFuturo"]."  onclick='getInfo(this);'  ><i class='fa fa-pencil-square-o' style='font-size:8px;' ></i></a></div>
                  <div class='btn-group'><a class='btn btn-danger btnEditarProducto' style='padding:6px;' data-toggle='modal' data-target='#ModalDetalle'  id=".$row["idFuturo"]."  onclick='deleteItem(this);'  ><i class='fa fa-trash-o' style='font-size:8px;' ></i></a></div>");
                $i++;
            }
        }
        /* close connection */
        mysqli_close($conn);

echo json_encode(array("data"=>$rawdata));


}




function GetInfo(){
 include "../BD/db_connect.php";

        $sql = " select * from tb_futuros where idFuturo=".$_POST["id"]."  ";


$strAlerta="";

        $result = mysqli_query($conn, $sql);

$strAlerta.="<form id='frmDetalleProyecto' >";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
$strAlerta.="<div class='row m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Ticket:</div>
           <div class='col-lg-9' ><label id='Dia' style='color:black;font-size:10px;' >".putGTicket($row["ticket"])."</label></div>
         </div>
                  <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Stop:</div>
           <div class='col-lg-9'  ><label id='Ticket' style='color:black;font-size:10px;'  >".$row["stop"]."</label></div>
         </div>
                  <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Entrada:</div>
           <div class='col-lg-9'  ><label id='Strike' style='color:black;font-size:10px;'  >".$row["entrada"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Salida:</div>
           <div class='col-lg-9'  ><label id='Contrato' style='color:black;font-size:10px;'  >".$row["salida"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Contrato:</div>
           <div class='col-lg-9'  ><label id='DiasVencimiento' style='color:black;font-size:10px;'  >".$row["contrato"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Puntos:</div>
           <div class='col-lg-9'  ><label id='FechaEntrega' style='color:black;font-size:10px;'  >".$row["puntos"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Utilidad:</div>
           <div class='col-lg-9'  ><label id='Operacion1' style='color:black;font-size:10px;'  >".$row["utilidad"]."</label></div>
         </div>
                           <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Setup:</div>
           <div class='col-lg-9'  ><label id='Operacion2' style='color:black;font-size:10px;'  >".$row["setup"]."</label></div>
         </div>
                                    <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Fecha:</div>
           <div class='col-lg-9'  ><label id='Operacion2' style='color:black;font-size:10px;'  >".date('Y-m-d', strtotime(str_replace('-','/', $row["Fecha"])))."</label></div>
         </div>
                                    <div class='row  m-0' >
           <div class='col-lg-3 text-left' style='font-size:10px;' >Hora:</div>
           <div class='col-lg-9'  ><label id='Operacion2' style='color:black;font-size:10px;'  >".date('H:i:s', strtotime(str_replace('-','/', $row["Fecha"])))."</label></div>
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

        $sql = " select * from tb_futuros where idFuturo=".$_POST["id"]."  ";


$array=array();

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
       $stop =$_POST['stop'];
      $entrada = $_POST['entrada'];
      $salida = $_POST['salida'];
               $puntos = $_POST['puntos'];
       $utilidad =$_POST['utilidad'];
      $setup = $_POST['setup'];
      $contrato = $_POST['contrato'];





 $ArrayInsert=[];
 array_push($ArrayInsert, $ticket);
 array_push($ArrayInsert,$stop);
 array_push($ArrayInsert, $entrada);
 array_push($ArrayInsert, $salida);
 array_push($ArrayInsert, $contrato);
  array_push($ArrayInsert, $puntos);
   array_push($ArrayInsert, $utilidad);
    array_push($ArrayInsert, $setup);


      $ArrayUpdate=[];
 array_push($ArrayUpdate, "ticket");
 array_push($ArrayUpdate,"stop");
 array_push($ArrayUpdate, "entrada");
 array_push($ArrayUpdate, "salida");
 array_push($ArrayUpdate, "contrato");
  array_push($ArrayUpdate, "puntos");
   array_push($ArrayUpdate, "utilidad");
    array_push($ArrayUpdate, "setup");

 
$sql=Update("tb_Futuros",$ArrayUpdate,$_POST["idUpdate"],"idFuturo",$ArrayInsert);


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

 
$sql= deleteItem("tb_futuros",$_POST["id"],"idFuturo");

$result= mysqli_query($conn,$sql);


mysqli_close($conn);

if($result){
echo json_encode(1);
}else {
  echo json_encode(0);
}


}


}


function putGTicket($elemento){

switch ($elemento) {
  case 1:
    return "";
    break;
    case 2:
    return "S&P";
    break;
      case 3:
    return "";
    break;
      case 4:
    return "";
    break;
      case 5:
   return "nasdaq";
    break;
      case 6:
    return "";
    break;
      case 7:
  return "";
    break;
          case 8:
    return "";
    break;
          case 9:
    return "";
    break;
          case 10:
   return "";
    break;
  default:
    return "";
    break;
}

}


?>