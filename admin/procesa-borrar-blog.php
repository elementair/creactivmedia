<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


 		if(isset($_GET["id"])){

		$id=$_GET["id"];
		$name=$_GET["name"];
		$Archivo=$name.".jpg";

		    //borrar comentarios


				if ($comentario = mysqli_query($con,"SELECT id_blog FROM comentarios WHERE id_blog=".$id." ")) {
   
				    if(mysqli_num_rows($comentario) == 0){
				    	//sin comentarios
				    	$sSQLde3="DELETE FROM blog WHERE id=".$id." ";
						mysqli_query($con,$sSQLde3);

						//$RutaPromos1='C:\wamp\www\probagro\blog\\';
						$img="../blog/".$Archivo;
						@unlink($img);
						header("Location: panel-principal.php?ok=2");

					
				    }else{
				    	//comentarios

						    	$sql2 = "DELETE FROM comentarios WHERE id_blog=".$id." ";
								if (mysqli_query($con,$sql2)) {
								// echo "El usuario ha sido eliminado correctamente";

									$sSQLde3="DELETE FROM blog WHERE id=".$id." ";
									mysqli_query($con,$sSQLde3);

									//$RutaPromos1='C:\wamp\www\probagro\blog\\';
									$img="../blog/".$Archivo;
									@unlink($img);
									header("Location: panel-principal.php?ok=2");


																	
								} else {
								echo "Error al borrar comentarios del blog: " . mysqli_error($con);

								}

				    }
				}





				

        }


}else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>