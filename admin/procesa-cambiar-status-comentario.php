<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


 		if(isset($_GET["id"])){

 			$id=$_GET["id"];
 			$st=$_GET["st"];
 			$comentario=$_GET["c"];

 			$sql="UPDATE comentarios SET ocultar=".$st." WHERE id=".$comentario." ";
						if (mysqli_query($con,$sql)) {
						Header("Location: comentarios-blog.php?id=".$id."&ok=1");
						}else{
						Header("Location: comentarios-blog.php?id=".$id."&error=1");
						}

 		}


 }else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>