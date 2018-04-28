<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


$categoria=$_POST['nombre-cat'];



//proceso de validacion de campos del formulario, si existe errores regresar al formulario
if($categoria==""||$categoria==NULL){
header("Location: nueva-categoria.php?error=1");
}else{


$sql="INSERT INTO categorias (id, nombre, activo)
VALUES (NULL, '".$categoria."', 1)";


	if (mysqli_query($con,$sql)) {
		header('Location: nueva-categoria.php?ok=1');
	}else{
		header('Location: nueva-categoria.php?error=10');
	}

}

	
}
ob_end_flush();
?>
