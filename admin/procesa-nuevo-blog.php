<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){

include "conexion.php";

		$titulo=trim($_POST['titulo']);
		$titulo=addslashes($titulo);

		$metadesc=trim($_POST['desc-corta']);
		$tags=trim($_POST["tags"]);

		$opCat=$_POST["sCat"];
		/*$slname=array(1=>"Design", "Marketing Digital", "Web", "Editorial", "Social Media", "Tech");
		$categoria=$slname[$opCat];*/

		$status=$_POST["status"];
		$id_autor=$_POST["autor"];

		$articulo=$_POST["art"];

		$TypArch=$_FILES['Fimg']['type'];
		$TamArch=$_FILES['Fimg']['size'];
		$TemNameArch=$_FILES['Fimg']['tmp_name'];
		$ErrArch=$_FILES['Fimg']['error'];

		// Inicializamos sesion 
		$_SESSION['DatBlog']= array($titulo, $metadesc, $tags, $opCat, $status, $articulo);


		$longTitle=strlen($titulo);
		$longSubTitle=strlen($metadesc);


function sanear_string($string){
 
    $string = trim($string);
    $string = strtolower($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $string
    );
 
    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array('\'', '¨', 'º', '-', '~', '\\', '=', '-', '_', '.',
             '#', '@', '|', '!', '*',
             '·', '$', '%', '&', '/', 'û',
             '(', ')', '?', '¡', '“', '^',
             '¿', '[', '^', '<code>', ']',
             '+', '}', '{', '¨', '´', '”',
             '>', '<', ';', ',', ':', ';',
             '.'),'',
        $string
    );
 
    return $string;
}
 


		if($titulo=="" || $titulo==NULL)
		header('Location: nuevo-blog.php?error=1');

        elseif($metadesc=="" || $metadesc==NULL)
		header('Location: nuevo-blog.php?error=2');

	    elseif($tags=="" || $tags==NULL)
		header('Location: nuevo-blog.php?error=3');

  		elseif($opCat=="" || $opCat==NULL || $opCat==0)
		header('Location: nuevo-blog.php?error=4');

		elseif($articulo=="" || $articulo==NULL)
		header('Location: nuevo-blog.php?error=5');

	    elseif($TypArch==NULL || $TypArch=="")
		header('Location: nuevo-blog.php?error=6');

		elseif($TamArch>200500)
		header('Location: nuevo-blog.php?error=7');

		elseif(!(strpos($TypArch,"jpeg")) )
		header('Location: nuevo-blog.php?error=8');

		elseif($ErrArch!=0)
		header('Location: nuevo-blog.php?error=9');

		else{

		$titulo2=sanear_string($titulo);
        //$titulo=elimina_acentos($titulo);
		$idEntrada=str_replace(" ", "-", $titulo2);
		$fecha=date("Y-m-d"); //Fecha Reporte
		//$RutaPromosServer="public_html/2011/img/promo/";
		$Ruta="../blog/";

		//$random=rand(200,500);
		//$nombreImagen=$fecha."-".$id_autor."-".$random.".jpg";
		$NameIMG=$idEntrada.".jpg";

		move_uploaded_file($TemNameArch, $Ruta.$NameIMG);

		$sSQLimg="INSERT INTO blog (id_entrada, title, intro, articulo, tags, id_categoria, id_autor, fecha, activo) VALUES ('".$idEntrada."', '".addslashes($titulo)."', '".addslashes($metadesc)."', '".$articulo."', '".$tags."', '".$opCat."',  '".$id_autor."',  '".$fecha."', '".$status."' )";

			$Comprobacion=mysqli_query($con,$sSQLimg);
			if($Comprobacion==NULL){
				echo "Existio un error al subir los datos";
				mysqli_error();
				echo $sSQLimg;
				@mysqli_free_result($Comprobacion);
				mysqli_close($con);
			}else{
				@mysqli_free_result($Comprobacion);
				mysqli_close($con);
				//echo "Los datos se agregaron correctamente";
				unset($_SESSION['DatBlog']);
				header('Location: panel-principal.php?ok=1');
			}
			
		}



}else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>