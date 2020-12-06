<?php


$Accion=$_POST["Accion"];



Switch($Accion){

case "GraficarOpciones":
$GraficarOpciones = new graficas();
$GraficarOpciones->GraficarOpciones(); 
break;
case "GraficarAcciones":
$GraficarAcciones = new graficas();
$GraficarAcciones->GraficarAcciones(); 
break;
case "GraficarFuturos":
$GraficarFuturos = new graficas();
$GraficarFuturos->GraficarFuturos(); 
break;
case "GraficarScatOpciones":
$GraficarScatOpciones = new graficas();
$GraficarScatOpciones->GraficarScatOpciones(); 
break;
case "GraficarScatAcciones":
$GraficarScatAcciones = new graficas();
$GraficarScatAcciones->GraficarScatAcciones(); 
break;
case "GraficarScatFuturos":
$GraficarScatFuturos = new graficas();
$GraficarScatFuturos->GraficarScatFuturos(); 
break;
case "GraficaPrincipal":
$GraficaPrincipal = new graficas();
$GraficaPrincipal->GraficaPrincipal(); 
break;
default:
echo "Accion default";
break;
}


Class graficas{


        public function __construct() {
        
        }




function GraficarOpciones() {
        include "../BD/db_connect.php";

$sql="";
if($_POST["Inicio"]==0 && $_POST["Fin"]==0){
            $sql = "select ticket,dinero,rentabilidad,Fecha from tb_opciones;";
}else {
            $sql = "select ticket,dinero,rentabilidad,Fecha from tb_opciones where Fecha between '".$_POST["Inicio"]."' and '".$_POST["Fin"]."' ;";
}



        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $row["Fecha"]=date('Y-m-d', strtotime(str_replace('-','/', $row["Fecha"])));
              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);

echo json_encode($rawdata);


}



function GraficarAcciones() {
        include "../BD/db_connect.php";

$sql="";
if($_POST["Inicio"]==0 && $_POST["Fin"]==0){
    $sql = "select ticket,utilidad,inversion,Fecha from tb_acciones;";
}else {

     $sql = "select ticket,utilidad,inversion,Fecha from tb_acciones where Fecha between '".$_POST["Inicio"]."' and '".$_POST["Fin"]."';";

}
        


        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            $row["Fecha"]=date('Y-m-d', strtotime(str_replace('-','/', $row["Fecha"])));
              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);

echo json_encode($rawdata);


}



function GraficarFuturos() {
        include "../BD/db_connect.php";


$sql="";
if($_POST["Inicio"]==0 && $_POST["Fin"]==0){
 $sql = "select ticket,utilidad,puntos,Fecha from tb_futuros;";
}else {
     $sql = "select ticket,utilidad,puntos,Fecha from tb_futuros where Fecha between '".$_POST["Inicio"]."' and '".$_POST["Fin"]."' ;";
}
       


        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 $row["Fecha"]=date('Y-m-d', strtotime(str_replace('-','/', $row["Fecha"])));
              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);

echo json_encode($rawdata);


}



function GraficarScatOpciones() {
        include "../BD/db_connect.php";


$sql="";
 $sql = "select opciones.ticket,Now() as fecha_actual,opciones.fechsasalida,opciones.dinero as VerticalY,
timestampdiff(hour,opciones.fechsasalida,Now()) as HorizontalX,dayofweek(opciones.fechsasalida) fin1,
dayofweek(Now()) fin2,datediff(opciones.fechsasalida,Now()) as diff_days,
day(opciones.fechsasalida) as dia1,day(Now()) as dia2,
datediff(opciones.fechsasalida, Now()) DIV 7 + (CASE WHEN CASE WHEN DAYOFWEEK(opciones.fechsasalida)-1 = 0 THEN 7 ELSE DAYOFWEEK(opciones.fechsasalida)-1 END = 7 THEN 1 ELSE 0 END) AS 'CantDomingos',
datediff(opciones.fechsasalida, Now()) DIV 6 + (CASE WHEN CASE WHEN DAYOFWEEK(Now())-1 = 0 THEN 6 ELSE DAYOFWEEK(Now())-1 END = 6 THEN 1 ELSE 0 END) AS 'CantSabados',
DAY(LAST_DAY(opciones.fechsasalida)) as ultimodia, timestampdiff(month,opciones.fechsasalida,Now())+1 as diff_mes from tb_opciones as opciones;";
     
        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

$suma=$row["CantDomingos"]+$row["CantSabados"];
$sumaHrs=$suma*24;

$sumHrsNegative=($row["diff_days"]-$suma)*17;

$sumaTotal=$sumHrsNegative+$sumaHrs;

$row["HorizontalX"]=$row["HorizontalX"]-$sumaTotal;


              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);


echo json_encode($rawdata);


}



function OnlyAnyHours(){

}

function GraficarScatAcciones() {
        include "../BD/db_connect.php";


$sql="";
 $sql = "select acciones.ticket,Now() as fecha_actual,acciones.Fecha,acciones.utilidad as VerticalY,
timestampdiff(hour,acciones.Fecha,Now()) as HorizontalX,dayofweek(acciones.Fecha) fin1,
dayofweek(Now()) fin2,datediff(acciones.Fecha,Now()) as diff_days,
day(acciones.Fecha) as dia1,day(Now()) as dia2,
datediff(acciones.Fecha, Now()) DIV 7 + (CASE WHEN CASE WHEN DAYOFWEEK(acciones.Fecha)-1 = 0 THEN 7 ELSE DAYOFWEEK(acciones.Fecha)-1 END = 7 THEN 1 ELSE 0 END) AS 'CantDomingos',
datediff(acciones.Fecha, Now()) DIV 6 + (CASE WHEN CASE WHEN DAYOFWEEK(Now())-1 = 0 THEN 6 ELSE DAYOFWEEK(Now())-1 END = 6 THEN 1 ELSE 0 END) AS 'CantSabados',
DAY(LAST_DAY(acciones.Fecha)) as ultimodia, timestampdiff(month,acciones.Fecha,Now())+1 as diff_mes from tb_acciones as acciones;";
     


        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 //$row["Fecha"]=date('Y-m-d', strtotime(str_replace('-','/', $row["Fecha"])));
              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);


echo json_encode($rawdata);


}




function GraficarScatFuturos() {
        include "../BD/db_connect.php";


$sql="";
 $sql = "select futuros.ticket,Now() as fecha_actual,futuros.Fecha,futuros.utilidad as VerticalY,
timestampdiff(hour,futuros.Fecha,Now()) as HorizontalX,dayofweek(futuros.Fecha) fin1,
dayofweek(Now()) fin2,datediff(futuros.Fecha,Now()) as diff_days,
day(futuros.Fecha) as dia1,day(Now()) as dia2,
datediff(futuros.Fecha, Now()) DIV 7 + (CASE WHEN CASE WHEN DAYOFWEEK(futuros.Fecha)-1 = 0 THEN 7 ELSE DAYOFWEEK(futuros.Fecha)-1 END = 7 THEN 1 ELSE 0 END) AS 'CantDomingos',
datediff(futuros.Fecha, Now()) DIV 6 + (CASE WHEN CASE WHEN DAYOFWEEK(Now())-1 = 0 THEN 6 ELSE DAYOFWEEK(Now())-1 END = 6 THEN 1 ELSE 0 END) AS 'CantSabados',
DAY(LAST_DAY(futuros.Fecha)) as ultimodia, timestampdiff(month,futuros.Fecha,Now())+1 as diff_mes from tb_futuros as futuros;";
     


        $result = mysqli_query($conn, $sql);

        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $rawdata[$i]=$row;
              $i++;

}
        }
        /* close connection */
        mysqli_close($conn);


echo json_encode($rawdata);


}





function GraficaPrincipal() {

        include "../BD/db_connect.php";


session_start();

$sql="";
 $sql = "(select timestampdiff(day,tb_opciones.Fecha,NOW()) as dias,tb_opciones.dinero,(select tb_usuario.BalanceCuenta
 from tb_usuario where tb_usuario.idUsuario=".$_SESSION["id"].") as balance,0 as suma,0 as porcentaje from tb_usuario inner  join
 tb_opciones on tb_usuario.idUsuario=tb_opciones.idUsuario 
 where tb_opciones.idUsuario=".$_SESSION["id"]."
 order by timestampdiff(day,tb_opciones.Fecha,NOW()) asc)
 union 
(select timestampdiff(day,tb_acciones.Fecha,NOW()) as dias,tb_acciones.utilidad,(select tb_usuario.BalanceCuenta
 from tb_usuario where tb_usuario.idUsuario=".$_SESSION["id"].") as balance,0 as suma,0 as porcentaje from tb_usuario inner  join
 tb_acciones on tb_usuario.idUsuario=tb_acciones.idUsuario 
 where tb_acciones.idUsuario=".$_SESSION["id"]."
 order by timestampdiff(day,tb_acciones.Fecha,NOW()) asc)
 union
 (
 select timestampdiff(day,tb_futuros.Fecha,NOW()) as dias,tb_futuros.utilidad,(select tb_usuario.BalanceCuenta
 from tb_usuario where tb_usuario.idUsuario=".$_SESSION["id"].") as balance,0 as suma,0 as porcentaje from tb_usuario inner  join
 tb_futuros on tb_usuario.idUsuario=tb_futuros.idUsuario 
 where tb_futuros.idUsuario=".$_SESSION["id"]."
 order by timestampdiff(day,tb_futuros.Fecha,NOW()) asc
 )";
     

        $result = mysqli_query($conn, $sql);

$suma=0;
$porcentaje=0;
        $rawdata=array();
        $i=0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $suma=$suma+$row["dinero"];
              $porcentaje=(($suma-$row["balance"])/$row["balance"])*100;
              $row["suma"]=$suma+$row["balance"];
              $row["porcentaje"]=$porcentaje;
              $rawdata[$i]=$row;
              $i++;

}
        }

        /* close connection */
        mysqli_close($conn);


echo json_encode($rawdata);


}








}


?>