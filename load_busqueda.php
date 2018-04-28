<?php
include("conexion.php");


if(isset($_POST["search"])){

	$search=$_POST["search"];

	if($search=="" || $search==NULL){

		echo "<h3>Complete el campo de busqueda.</h3><br/><br/>";

	}else{
		$search=urldecode($_POST["search"]);
		$search=strip_tags(html_entity_decode($search));

		if ($sql2 = mysqli_query($con, "
			SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, U.id, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B 
			LEFT OUTER JOIN user AS U ON B.id_autor=U.id
			JOIN categorias AS C ON B.id_categoria=C.id
			WHERE articulo LIKE '_%".addslashes($search)."_%' OR title LIKE '_%".addslashes($search)."_%' OR intro LIKE '_%".addslashes($search)."_%' OR C.nombre LIKE '_%".addslashes($search)."_%' AND B.activo=1 ORDER BY fecha ASC LIMIT 1,500")) {

			echo "<div class='cont-categoria'>";
					    		//echo "<strong>Notas Relacionadas:</strong><br/><br/>";
			if(mysqli_num_rows($sql2) == 0){
				echo "<p>No hay notas relacionadas con: <strong>".$search."</strong></p><br/><br/>";
			}else{ 

				$numRes=mysqli_num_rows($sql2);

				echo "<div class=''><h3> Resultados encontrados: ".$numRes."</h3></div>";

				while($row = mysqli_fetch_assoc($sql2)) {
						      		/*
						      		echo "<div class='box-item'>";
						      		echo "<a href='blog.php?id=".$row["id_entrada"]."'><img src='blog/".$row["id_entrada"].".jpg' alt='' class='img-cat'></a>";
						      		echo "<p><a href='blog.php?id=".$row["id_entrada"]."'>".$row["title"]."</a></p></a>";
						      		echo "</div>";
						      		*/
						      		$marcadorTitle=str_replace($search,"<span class='marcador'>".$search."</span>",$row["title"]);
						      		$marcadorIntro=str_replace($search,"<span class='marcador'>".$search."</span>",$row["intro"]);

						      		echo "<div class='item'>
							      		<a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' ><img src='blog/".$row["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
							      		<p class='cat'><a href='blog.php?categoria=".$row["idCat"]."' target='_self'>".$row["nombreCat"]."</a> - ".$row["fecha"]." - Escrito por: ".$row["nombre"]."</p>
							      		<h2><a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' >".$marcadorTitle."</a></h2>
							      		<p class='desc-corta'> ".$marcadorIntro."</p>
							      		</div>";     
						      	}
						      		echo "</div>";
						      }


						  }else{
						  	echo  "<strong>".$search."</strong> la consulta no pudo ser procesada.<br/><br/>";
						  }


			}


/*

*/
}else{
	echo "<div class='cont-categoria'>";
	echo "<p>No existen datos para procesar.</p>";
	echo "</div>";
}




?>