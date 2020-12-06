<?php

$Accion=$_POST["Accion"];

Switch($Accion){

case "Acceder":
$Productos = new Login();
$Productos->Acceder(); 
break;
case "CerrarSesion":
$CerrarSesion = new Login();
$CerrarSesion->CerraSesion(); 
break;
case "Recuperar":
$Productos = new Login();
$Productos->Recuperar(); 
break;
case "SendEmail":
$Productos = new Login();
$Productos->SendEmail(); 
break;
case "Editar":
$Editar = new Login();
$Editar->Editar(); 
break;
default:
echo "Accion default";
break;

}


/**
 * 
 */
class Login
{
	

        public function __construct() {
        
        }


function Acceder(){
include '..\BD\db_connect.php';
include '..\BD\Automatizacion\auto_Actions.php';

session_start();


$encode=1;
		$user = $_POST['User']; // If your mysql column is datetime
	   $pass = sha1($_POST['Password']);
       $Recuerdame = $_POST['Recuerdame'];






$sql="select * from tb_usuario where Nick='".$user."'  and Contra='".$pass."'";
       $result=  mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
		$_SESSION['user_id'] = $user;
		$_SESSION['time_enter'] = time();

            while ($fila = $result->fetch_row()) {
$_SESSION['Email'] = $fila[4];
$_SESSION['Nombre'] = $fila[1];
$_SESSION['id'] = $fila[0];
$_SESSION['img'] = $fila[5];
            }

  

if($Recuerdame=="Activo") {
setcookie("username", $_POST['User'], time()+30*24*60*60,'/');
setcookie("pass", $_POST['Password'], time()+30*24*60*60,'/');
}else {
    setcookie("username",  '', time()-time()+30*24*60*60,'/');
    setcookie("pass", '', time()-time()+30*24*60*60,'/');
}

 echo json_encode($encode);
} else {
 echo json_encode(0);
}



/* close connection */
mysqli_close($conn);


}

function CerraSesion(){
session_start();
session_destroy();
echo json_encode(1);
}


function Recuperar(){
include '..\BD\db_connect.php';

$sqlUser="select * FROM `tb_usuario` WHERE Nick='".$_POST["User"]."' and Pass='".sha1($_POST["Password"])."'";



 $resultUser=  mysqli_query($conn,$sqlUser);



if (!empty($resultUser) && $resultUser->num_rows > 0) {
	$sql="DELETE FROM `tb_usuarioactivo` WHERE Nick='".$_POST["User"]."' ";



 $resultEncode=  mysqli_query($conn,$sql);

 echo json_encode(1);
}else {
	echo json_encode(0);
}


}

function SendEmail(){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$header="";

$to      = $_POST["email"];
$subject = 'Reestablecer Contraseña';
$message = 'Con esta password puedes ingresar al sistema:   '.getName(10,$_POST["email"]);
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 






if(mail($to, $subject, $message, $header))
{
  echo json_decode(1);
}else{
echo json_decode(0);
}
}


function getName($n,$email) { 

 include '../../routes.php';
include $SubRutadbConnect;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 


 

$md5Random=sha1($randomString);
$sql = "UPDATE `tb_usuario` SET `Pass`='".$md5Random."' WHERE email='".$email."'";



        $result= mysqli_query($conn,$sql);



/* close connection */
mysqli_close($conn);
  
    return $randomString; 
} 


function Editar(){



   include '../../routes.php';
include $SubRutadbConnect;
include $SubRutaAutoActions;


date_default_timezone_set("America/Mexico_City");
session_start();

$ruta=uploadFile("UploadINEback");


         $Nombre = $_POST['Nombre'];
       $Nick =$_POST['Nick'];
      $Email = $_POST['Email'];



 $ArrayInsert=[];
 array_push($ArrayInsert, $Nombre);
 array_push($ArrayInsert,$Nick);
 array_push($ArrayInsert, $Email);
  array_push($ArrayInsert, $ruta);



      $ArrayUpdate=[];
 array_push($ArrayUpdate, "Nombre");
 array_push($ArrayUpdate,"Nick");
 array_push($ArrayUpdate, "Email");
  array_push($ArrayUpdate, "rutaImg");

 
$sql=Update("tb_usuario",$ArrayUpdate,$_SESSION["id"],"idUsuario",$ArrayInsert);


        $result= mysqli_query($conn,$sql);

         if ($result) {
            $_SESSION['Email'] = $Email;
$_SESSION['Nombre'] = $Nombre;
$_SESSION['user_id'] = $Nick;
$_SESSION["img"]=$ruta;
echo json_decode(1);

}else {
    echo json_decode(0);
}

/* close connection */
mysqli_close($conn);


}


}



function uploadFile($boton){


$ArrayFiles="";

  $directory = "..\\Registrar\\img\\";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}


$dateSave = date("Y-m-d");
$target_path = "..\\Registrar\\img\\";
$info = pathinfo($_FILES[$boton]['name']);
$ext = $info['extension'];
$NewName=$dateSave."_".$filecount.".".$ext;
$target_pathFile = $target_path .$NewName;

    if(!is_dir('..\\Registrar\\img\\')) {
mkdir("..\\Registrar\\img\\");
if(move_uploaded_file($_FILES[$boton]['tmp_name'], $target_pathFile)) {
    $ArrayFiles.=$NewName.",";
} 
    }else {
        if(move_uploaded_file($_FILES[$boton]['tmp_name'], $target_pathFile)) {
$ArrayFiles.=$NewName.",";
} 
    }


$ruta="img/".$NewName;   


    return $ruta;   

}



 ?>