<?php

session_start();


$Accion=$_POST["Accion"];


Switch($Accion){

case "Save":
$Productos = new Usuario();
$Productos->Save(); 
break;
default:
echo "Accion default";
break;
}


Class Usuario{


        public function __construct() {
        
        }



 function Save(){



 include '../../routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;


date_default_timezone_set("America/Mexico_City");
$RutaFull="";



$sqlExists="select count(*) as existe from tb_usuario where Nick in ('".$_POST['nick']."')";


    $resultExists= mysqli_query($conn,$sqlExists);


    while($row = $resultExists->fetch_assoc())
    if ($row["existe"]==1){
      echo json_encode(3);
      exit();
    }



        $sqlExistsEmail="select count(*) as existe from tb_usuario where email in ('".$_POST['email']."')";

    $resultExistsEmail= mysqli_query($conn,$sqlExistsEmail);


    while($row = $resultExistsEmail->fetch_assoc())
    if ($row["existe"]==1){
      echo json_encode(5);
      exit();
    }


$ruta=uploadFile("UploadINEback");


         $Email = $_POST['email'];
       $Nick =$_POST['nick'];
      $Pass = sha1( $_POST['contra']);
      $Nombre = $_POST['nombre'];
       $Balance = $_POST['Balance'];

 
 $ArrayInsert=[];
 array_push($ArrayInsert, $Nombre);
 array_push($ArrayInsert, $Nick);
 array_push($ArrayInsert, "'".$Pass."'");
array_push($ArrayInsert, $Email);
array_push($ArrayInsert, $ruta);
array_push($ArrayInsert, $Balance);

 
$sql=InsertEasy("tb_usuario",$ArrayInsert);


        $result= mysqli_query($conn,$sql);

         if ($result) {
          $_SESSION['img'] = $ruta;
echo json_decode(1);

}else {
    echo json_decode(0);
}

mysqli_close($conn);




}



}


function uploadFile($boton){


$ArrayFiles="";

  $directory = "img/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}

$dateSave = date("Y-m-d");
$target_path = "img\\";
$info = pathinfo($_FILES[$boton]['name']);
$ext = $info['extension'];
$NewName=$dateSave."_".$filecount.".".$ext;
$target_pathFile = $target_path .$NewName;
    if(!is_dir('img')) {
mkdir("img");
if(move_uploaded_file($_FILES[$boton]['tmp_name'], $target_pathFile)) {
    $ArrayFiles.=$NewName.",";
} 
    }else {
        if(move_uploaded_file($_FILES[$boton]['tmp_name'], $target_pathFile)) {
$ArrayFiles.=$NewName.",";
} 
    }


$ruta=$directory.$NewName;   


    return $ruta;   

}


?>