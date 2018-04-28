<?php
ob_start();
session_start();
error_reporting(E_ALL);  
include("conexion.php");

//recibir datos
$userForm=$_POST["user"];
$passForm=md5($_POST["pass"]);

//consulta en bd
if ($resultado = mysqli_query($con,"SELECT user, pass, activo FROM user WHERE user='".$userForm."' AND pass='".$passForm."' AND activo=1 ")) {
   
	$val="";
    if(mysqli_num_rows($resultado) == 0){
		$val=0;
    }else{
   		$val=1;
    }
}


$rutaPanelPrin="index.php";


if($userForm=="" || $userForm==NULL || $val==0){
	header("Location: ".$rutaPanelPrin."?error=1");

}elseif($passForm=="" || $passForm==NULL || $val==0){
	header("Location: ".$rutaPanelPrin."?error=2");

	
}else{
	//echo "ingreso al panel principal";
	

	  if ($sql = mysqli_query($con,"SELECT id, user, pass, nombre, permiso, img, puesto, bio, fecha_alta FROM user WHERE user='".$userForm."' AND pass='".$passForm."' ")) {
              
                while($row0 = mysqli_fetch_assoc($sql)) {
                      $_SESSION['id']=$row0["id"];
                      $_SESSION['user']=$row0["user"];
                      $_SESSION['pass']=$row0["pass"];
                      $_SESSION['nombre']=$row0["nombre"];
                      $_SESSION['permiso']=$row0["permiso"];
                      $_SESSION['img']=$row0["img"];
                      $_SESSION['puesto']=$row0["puesto"];
                      $_SESSION['bio']=$row0["bio"];
                      $_SESSION['fecha_alta']=$row0["fecha_alta"];
                      $_SESSION['login']=$row0["user"];
                  }
                   header("Location: panel-principal.php");
                   mysqli_free_result($sql);
         }	
}
ob_end_flush();
?>