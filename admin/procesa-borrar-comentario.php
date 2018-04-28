<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


 		if(isset($_GET["c"])){

		$comentario=$_GET["c"];
		$id=$_GET["id"];

		$sSQLde3="DELETE FROM comentarios WHERE id=".$comentario." ";
		mysqli_query($con,$sSQLde3);
		header("Location: comentarios-blog.php?id=".$id."&ok=2");
        }


}else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>