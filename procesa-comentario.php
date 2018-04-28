<?php
 	include("conexion.php");


	$nombre=$_POST["nombre"];
	$comentario=htmlentities($_POST["comentario"]);
	$idBlog=$_POST["idBlog"];
	$fecha=date("Y-m-d"); //Fecha Entrada

	if($nombre=="" || $nombre==NULL){
?>
	<script>
    $(document).ready(function() {
    	$("#error1").fadeIn("slow").delay(3000).fadeOut();
    });

	</script>

	<div id="error1"  style="display:none" class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    <span class="n">Error:</span> Complete el campo Nombre
	</div>
<?php
	}elseif($comentario=="" || $comentario==NULL){
?>
	<script>
    $(document).ready(function() {
    	$("#error2").fadeIn("slow").delay(3000).fadeOut();
    });

	</script>

	<div id="error2"  style="display:none" class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    <span class="n">Error:</span> Complete el comentario
	</div>

<?php

	}else{


	//$('#myModal').modal('hide');

			$sql="INSERT INTO comentarios (id_blog, nombre, comentario, fecha, ocultar, leido) VALUES ('".$idBlog."', '".$nombre."', '".$comentario."', '".$fecha."', 0 , 1) ";
			if (mysqli_query($con,$sql)) {
				
				echo "
						<script>
						var k = jQuery.noConflict();
					    k(document).ready(function() {
					    	
					    	k('#ok').fadeIn('slow').delay(3000).fadeOut();
					    	k('#frm-comentarios')[0].reset(); //resetea el formulario actual
					    	k('#comentarios').load('load_comentarios.php?id=".$idBlog."'); //actualiza el registro de items
					    	k('#frm').fadeOut('slow');
					    });
						</script>

						

					";

					?>

					<div id="ok"  style="display:none" class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				    <span class="n">Ok:</span> El comentario ha sido enviado correctamente. Gracias por su opinión.
					</div>
				
			<?php 
			}else{
					?>
						<script>
					    $(document).ready(function() {
					    	$("#error5").fadeIn("slow").delay(3000).fadeOut();
					    });

						</script>

						<div id="error5"  style="display:none" class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					    <span class="n">Error:</span> Existio un error al guardar en la base de datos.
						</div>
					<?php
			}	
					    

	}


?>