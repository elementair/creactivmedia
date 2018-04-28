<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


 		if(isset($_GET["id"])){

 			$id=$_GET["id"];
 			$st=$_GET["st"];


 			$sql="UPDATE blog SET activo=".$st." WHERE id=".$id." ";
						if (mysqli_query($con,$sql)) {
						Header("Location: panel-principal.php?ok=3");
						}else{
						Header("Location: panel-principal.php?error=6");
						}

 		}


 }else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>