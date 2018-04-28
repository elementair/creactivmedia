<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


$user=$_POST['user'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$nombre=$_POST['nombre'];
$puesto=$_POST['puesto'];
$permiso=$_POST["permiso"];


$bio=$_POST['bio'];
$playlist=$_POST['playlist'];



//$activo=$_POST["activo"];
$TypArch=$_FILES['Fimg']['type'];
$TamArch=$_FILES['Fimg']['size'];
$TemNameArch=$_FILES['Fimg']['tmp_name'];
$ErrArch=$_FILES['Fimg']['error'];


$Ruta="../image/img-profile/";

$id=0;
if($sqlm= mysqli_query($con,"SELECT id FROM user ORDER BY id DESC LIMIT 0,1 ") ){

  while($rowM = mysqli_fetch_assoc($sqlm)) {
    $id=$rowM["id"];
  }
}

$id=$id+1;
    

//$random=rand(200,500);
//$nombreImagen=$fecha."-".$id_autor."-".$random.".jpg";
$NameIMG=$id.".jpg";

move_uploaded_file($TemNameArch, $Ruta.$NameIMG);

 //Escribir Asistencia
date_default_timezone_set('America/Mexico_City');
$fechaAct=date("Y-m-d"); //Fecha Entrada
$horaAct=date("H:i:s"); //hora Entrada
$year=date("Y"); 


//proceso de validacion de campos del formulario, si existe errores regresar al formulario
if($user==""||$user==NULL){
header('Location: nuevo-usuario.php?error=1');
}elseif($pass1!==$pass2){
header('Location: nuevo-usuario.php?error=2');
}elseif($nombre==""||$nombre==NULL){
header('Location: nuevo-usuario.php?error=3');
}elseif($puesto==""||$puesto==NULL){
header('Location: nuevo-usuario.php?error=4');
}elseif($permiso==""||$permiso==NULL){
header('Location: nuevo-usuario.php?error=5');
}elseif($bio==""||$bio==NULL){
header('Location: nuevo-usuario.php?error=6');
}elseif($TamArch>200500){
header("Location: nuevo-usuario.php?error=7");
}elseif(!(strpos($TypArch,"jpeg"))){
header("Location: nuevo-usuario.php?error=8");
}elseif($ErrArch!=0){
header("Location: nuevo-usuario.php?error=9");
}else{


$sql="INSERT INTO user (id, user, pass, nombre, activo, permiso, img, puesto, bio, playlist, fecha_alta)
VALUES (NULL, '".$user."', '".$pass1."', '".$nombre."', 1, ".$permiso.", '".$id."', '".$puesto."', '".$bio."', '".$playlist."', '".$fechaAct."')";


	if (mysqli_query($con,$sql)) {
		header('Location: nuevo-usuario.php?ok=1');
	}else{
		header('Location: nuevo-usuario.php?error=10');
	}

}

	
}
ob_end_flush();
?>
