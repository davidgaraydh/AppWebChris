<?php 

function InsertEasy($tabla,$Post){

  $sql="";
  $campos=count($Post);
  $conta=0;

$coma=",";
$sql .= "INSERT INTO ".$tabla." values(null,";

foreach ($Post as $key) {
 if($conta == count($Post)-1) { 
$coma="";
    } 
      $foo = (int) $key;
if($foo!=""){
$sql .=$key.$coma;
}else{
  if(preg_match("/['']/", $key)) {
  $sql .="".$key."".$coma."";
  }else{
      $sql .="'".$key."'".$coma."";
  }

}
$conta++;
}

$sql .=",'".date("Y-m-d H:i:s")."'";
$sql .=",1";

$sql.=");";



return $sql;

}


function LoadTableEasy($conn,$query,$arreglo,$ArregloButtons,$Iconos,$Colores,$Metodos,$deleteAll){

$checks="";
$Acciones="";
$table="";
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0) {
for($i=0;$i<count($arreglo);$i++){

    while($row = $result->fetch_assoc()) {
if($deleteAll==0){
$checks="";
}else if ($deleteAll==1){
$checks="<input type='checkbox'  data-id=".$row[$arreglo[0]]."  />";
}
if($ArregloButtons==0){
$Acciones="";
}else if($ArregloButtons==1){
$Acciones="<div class='col-lg-8 col-12 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."'  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-4 col-12 text-center'>".$checks."</div>";
}else if($ArregloButtons==2){
$Acciones="<div class='col-lg-4 col-12 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."''  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-4 col-12 text-center mt-3 mb-3'><a id='delete'  data-toggle='tooltip' data-placement='top' title='Aqui puedes eliminar este registro.' onclick='".$Metodos[1]."(".$row[$arreglo[0]].")'   class='".$Colores[1]."'' style='cursor:pointer'  ><i class='".$Iconos[1]."'></i></a></div><div class='col-lg-4 col-12 text-center'>".$checks."</div>";
}else if($ArregloButtons==3){
$Acciones="<div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."''  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='delete'  data-toggle='tooltip' data-placement='top' title='Aqui puedes eliminar este registro.' onclick='".$Metodos[1]."(".$row[$arreglo[0]].")'   class='".$Colores[1]."'' style='cursor:pointer'  ><i class='".$Iconos[1]."'></i></a></div><div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='detail' data-toggle='tooltip' data-placement='top' title='Aqui puede ver el detalle del registro y no puede alterar nada' onclick='".$Metodos[2]."(".$row[$arreglo[0]].",2)' data-tooltip title='Ve l detalle de registro' style='cursor:pointer' class='".$Colores[2]."''><i class='".$Iconos[2]."'></i></a></div><div class='col-lg-3 col-12 text-center'>".$checks."</div>";
}

      $table.="<tr>";
       $table.= "<td>".$row[$arreglo[1]]."</td><td>".$row[$arreglo[2]]."</td><td>".$row[$arreglo[3]]."</td><td>".$row[$arreglo[4]]."</td><td><div class='col-lg-12'><div class='row'>".$Acciones."</div></div></td>";
       $table.="</tr>";
    }


}
} 

return $table;

}

function getUpdate($tabla,$Arreglo,$id,$campo){
$sql="Select ";
$coma=",";
$conta=0;
foreach ($Arreglo as $key) {
   if($conta == count($Arreglo)-1) { 
$coma="";
    } 
$sql.=$key." ".$coma;
$conta++;
}

$sql.="from ".$tabla." where ".$campo." = ".$id;


return $sql;

}


function Update($tabla,$Arreglo,$id,$campo,$Updates){
$sql="Update ".$tabla." set ";
$coma=",";
$conta=0;
foreach ($Updates as $key) {
   if($conta == count($Updates)-1) { 
$coma="";
    } 
$sql.= $Arreglo[$conta]." = '".$Updates[$conta]."' ".$coma;
$conta++;
}

$sql.=" where ".$campo." = ".$id;


return $sql;
}


function deleteItem($tabla,$id,$campo){
$sql="DELETE FROM ".$tabla." where ".$campo." =".$id;

return $sql;
}


function deleteAll($tabla,$ids,$campo){
$sql="";
if($ids[0]=="ALL"){
$sql="DELETE FROM ".$tabla;
}else {
  $sql="DELETE FROM ".$tabla." where ";
$Conector="or";
$conta=0;
foreach ($ids as $key) {
     if($conta == count($ids)-1) { 
$Conector="";
    } 
 $sql.=$campo." =".$key."  ".$Conector."  ";
 $conta++;
}
}




return $sql;
}

?>