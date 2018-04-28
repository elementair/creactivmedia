<?php
include("conexion.php");

if(isset($_GET["cat"])){

	

	$categoria=urldecode($_GET["cat"]);
	$categoria=strip_tags(html_entity_decode($categoria));

	if ($sql3 = mysqli_query($con, "   
		SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, U.id, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B 
		LEFT OUTER JOIN user AS U ON B.id_autor=U.id
		JOIN categorias AS C ON B.id_categoria=C.id
		WHERE id_categoria=".$categoria." AND B.activo=1 ORDER BY RAND() LIMIT 0,6" )) {


		//echo "<strong>Notas Relacionadas:</strong><br/><br/>";
					if(mysqli_num_rows($sql3) == 0){
						echo "<h3>No hay notas relacionadas con: <strong>".$categoria."</strong></h3><br/><br/>";
					}else{ 

						$numRes=mysqli_num_rows($sql3);
						echo "<div class='cont-categoria' id='_cont-items'>";
						echo "<div class=''><h3>Notas relacionadas</h3></div>";

						while($row = mysqli_fetch_assoc($sql3)) {		
						/*
						echo "<div class='box-item'>";
						echo "<a href='blog.php?id=".$row["id_entrada"]."'><img src='blog/".$row["id_entrada"].".jpg' alt='' class='img-cat'></a>";
						echo "<p><a href='blog.php?id=".$row["id_entrada"]."'>".$row["title"]."</a></p></a>";
						echo "</div>";
						*/

						//$marcadorTitle=str_replace($categoria,"<span class='marcador'>".$categoria."</span>",$row["title"]);
						//$marcadorIntro=str_replace($categoria,"<span class='marcador'>".$categoria."</span>",$row["intro"]);
						$post=$row["intro"];
						echo "<div class='item-notRel'>
						<a href='blog.php?id=".$row["id_entrada"]."' class='' id='' ><img src='blog/".$row["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
						<p class='cat'>".$row["nombreCat"]."  - ".$row["fecha"]." - Escrito por: ".$row["nombre"]."</p>
						<h2><a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' >".$row["title"]."</a></h2>
						<p class='desc-corta'>".$post."</p>
						</div>";   
						}

						echo "</div>";
						}


			}else{
				echo  "<strong>".$categoria."</strong> la consulta no pudo ser procesada.";
			}


		


}else{
	echo "<div class='cont-categoria'>";
	echo "<p>No hay notas relacionadas con esta entrada.</p>";
	echo "</div>";
}
?>

