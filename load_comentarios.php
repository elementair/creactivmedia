<?php
include("conexion.php");

if(isset($_GET["id"])){

	$id=$_GET["id"];

		if ($sql = mysqli_query($con, "SELECT B.id, B.id_entrada, C.id, C.nombre AS `nombre`, C.comentario AS `comentario`, C.fecha AS `Fecha` FROM `blog` AS B
				LEFT OUTER JOIN `comentarios` AS C ON B.id = C.id_blog
				WHERE B.id =".$id." AND C.ocultar=0 ORDER BY C.id DESC ")) {
              
                while($row0 = mysqli_fetch_assoc($sql)) {

                  $comentario=strip_tags(html_entity_decode($row0["comentario"]));
                  
                	echo "<div class='nombre'>".$row0["nombre"]."</div>";
                	echo "<div>".$row0["Fecha"]."</div>";
                	echo "<div class='comentario'>".$comentario."</div>";
                  }
                   mysqli_free_result($sql);
         }

}else{

	echo "no existe variable disponible";

}

?>
