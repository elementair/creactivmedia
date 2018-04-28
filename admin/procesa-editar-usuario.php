<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");

$nombre=$_POST['nombre'];
$puesto=$_POST['puesto'];
$permiso=$_POST["permiso"];
$bio=$_POST['bio'];
$playlist=$_POST['playlist'];
$id=$_POST["id"];


//$activo=$_POST["activo"];
$TypArch=$_FILES['Fimg']['type'];
$TamArch=$_FILES['Fimg']['size'];
$TemNameArch=$_FILES['Fimg']['tmp_name'];
$ErrArch=$_FILES['Fimg']['error'];


if($TypArch==NULL || $TypArch==""){

//proceso de validacion de campos del formulario, si existe errores regresar al formulario
	if($nombre==""||$nombre==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=1');
	}elseif($puesto==""||$puesto==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=2');
	}elseif($permiso==""||$permiso==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=3');
    }else{

			$sql="UPDATE user SET nombre='".$nombre."', permiso='".$permiso."', puesto='".$puesto."', bio='".$bio."', playlist='".$playlist."' WHERE id=".$id." ";
			if (mysqli_query($con,$sql)) {
				header('Location: editar-usuario.php?id='.$id.'&ok=1');
			}else{
				header('Location: editar-usuario.php?id='.$id.'&error=7');
			}

	}

}else{


	$Ruta="../image/img-profile/";


	//$random=rand(200,500);
	//$nombreImagen=$fecha."-".$id_autor."-".$random.".jpg";
	$NameIMG=$id.".jpg";

	move_uploaded_file($TemNameArch, $Ruta.$NameIMG);


//proceso de validacion de campos del formulario, si existe errores regresar al formulario
	if($nombre==""||$nombre==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=1');
	}elseif($puesto==""||$puesto==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=2');
	}elseif($permiso==""||$permiso==NULL){
	header('Location: editar-usuario.php?id='.$id.'&error=3');
	}elseif($TamArch>200500){
	header("Location: editar-usuario.php?id=".$id."&error=4");
	}elseif(!(strpos($TypArch,"jpeg"))){
	header("Location: editar-usuario.php?id=".$id."&error=5");
	}elseif($ErrArch!=0){
	header("Location: editar-usuario.php?id=".$id."&error=6");
    }else{

			$sql="UPDATE user SET nombre='".$nombre."', permiso='".$permiso."', puesto='".$puesto."', bio='".$bio."', playlist='".$playlist."' WHERE id=".$id." ";
			if (mysqli_query($con,$sql)) {
				header('Location: editar-usuario.php?id='.$id.'&ok=1');
			}else{
				header('Location: editar-usuario.php?id='.$id.'&error=7');
			}

	}




}



	
	
}
ob_end_flush();
?>
