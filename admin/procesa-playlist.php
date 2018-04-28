<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");

$nombre=$_POST['nombre'];
$puesto=$_POST['puesto'];
$bio=$_POST['bio'];
$playlist=$_POST['playlist'];


	//proceso de validacion de campos del formulario, si existe errores regresar al formulario
	if($nombre==""||$nombre==NULL){
	?>
		<script>
		    $(document).ready(function() {
		    	$("#error1").fadeIn("slow").delay(3000).fadeOut();
		    	
		    });
		</script>
		<div id="error1"  style="display:none" class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		    <span class="sr-only">Error:</span> Agrega el link url de spotifi
		</div>
	<?php
	}else{

			 $sql="UPDATE user SET nombre='".$nombre."', puesto='".$puesto."', bio='".$bio."', playlist='".$playlist."' WHERE id=".$_SESSION['id']." ";
			if (mysqli_query($con,$sql)) {
			?>
				<script>
				    $(document).ready(function() {
				    	$("#ok-play").fadeIn("slow").delay(3000).fadeOut();
				    });
				</script>
				<div id="ok-play"  style="display:none" class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				    <span class="sr-only">Ok:</span> Los datos han sido actualizados correctamente.
				</div>
			<?php
			}else{
			?>
				<script>
				    $(document).ready(function() {
				    	$("#error2").fadeIn("slow").delay(3000).fadeOut();
				    });
				</script>
				<div id="error2"  style="display:none" class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				    <span class="sr-only">Error:</span> Existio un error al agregar la playlist
				</div>
			<?php
			}

	}
}
ob_end_flush();
?>
