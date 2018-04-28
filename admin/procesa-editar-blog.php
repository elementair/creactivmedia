<?php
ob_start();
session_start();
 if(isset($_SESSION['login'])){


include "conexion.php";

$titulo=trim($_POST['titulo']);
$titulo=addslashes($titulo);
$titulo_Original=addslashes($titulo);

$metadesc=trim($_POST['desc-corta']);
$tags=trim($_POST["tags"]);

$opCat=$_POST["sCat"];

/*$slname=array(1=>"Design", "Marketing Digital", "Web", "Editorial", "Social Media", "Tech");
$categoria=$slname[$opCat];*/

$status=$_POST["status"];

$articulo=$_POST["art"];

$TypArch=$_FILES['Fimg']['type'];
$TamArch=$_FILES['Fimg']['size'];
$TemNameArch=$_FILES['Fimg']['tmp_name'];
$ErrArch=$_FILES['Fimg']['error'];

// Inicializamos sesion
$_SESSION['EditBlog']= array($metadesc, $tags, $opCat, $status, $articulo);

$longTitle=strlen($titulo);
$longSubTitle=strlen($metadesc);

$id=$_POST['id'];
$nombreImg=$_POST['nameImg'];



function scanear_string($string){
 
   // $string = trim($string);
    $string = strtolower($string);
    $string = utf8_encode($string);
 
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
 




$titulo2=scanear_string(utf8_decode($titulo));
//$titulo=elimina_acentos($titulo);
$idEntrada=str_replace(" ", "-", $titulo2);




	if($_FILES['Fimg']['type']==NULL){
		//header('Location: nuevo-blog.php?error=3');
		//echo "no hay archivo";

			if($titulo=="" || $titulo==NULL)
			header('Location: nuevo-blog.php?error=9');

			elseif($metadesc=="" || $metadesc==NULL)
			header("Location: editar-blog.php?id=".$id."&error=1");

		    elseif($tags=="" || $tags==NULL)
			header("Location: editar-blog.php?id=".$id."&error=2");

	  		elseif($opCat=="" || $opCat==NULL || $opCat==0)
			header("Location: editar-blog.php?id=".$id."&error=3");

			elseif($articulo=="" || $articulo==NULL)
			header("Location: editar-blog.php?id=".$id."&error=4");

	        
	        else{


					$sql="UPDATE blog SET id_entrada='".$idEntrada."', img='".$id."', title='".$titulo."', intro='".$metadesc."', articulo='".$articulo."', tags='".$tags."', id_categoria='".$opCat."', activo='".$status."' WHERE id=".$id." ";
					if (mysqli_query($con,$sql)) {
					Header("Location: editar-blog.php?id=".$id."&ok=TRUE");
					}else{
					Header("Location: editar-blog.php?id=".$id."&error=8");
					}

	        }


	}else{

			if($titulo=="" || $titulo==NULL)
			header('Location: nuevo-blog.php?error=9');

		    elseif($metadesc=="" || $metadesc==NULL)
			header("Location: editar-blog.php?id=".$id."&error=1");

		    elseif($tags=="" || $tags==NULL)
			header("Location: editar-blog.php?id=".$id."&error=2");

	  		elseif($opCat=="" || $opCat==NULL || $opCat==0)
			header("Location: editar-blog.php?id=".$id."&error=3");

			elseif($articulo=="" || $articulo==NULL)
			header("Location: editar-blog.php?id=".$id."&error=4");

			elseif($_FILES['Fimg']['size']>200500)
			header("Location: editar-blog.php?id=".$id."&error=5");

			elseif(!(strpos($TypArch,"jpeg")) )
			header("Location: editar-blog.php?id=".$id."&error=6");

			elseif($ErrArch!=0)
			header("Location: editar-blog.php?id=".$id."&error=7");

			else{
			//$nombreImg=str_replace(" ", "-", $articulo);
			//$RutaPromosServer="public_html/2011/img/promo/";

			


			$ruta='../blog/';

			@unlink($ruta.$nombreImg."jpg");

			$nombreImg=$idEntrada;

			$NameIMG=$nombreImg.".jpg";

			



			move_uploaded_file($TemNameArch, $ruta.$NameIMG);

				$sql="UPDATE blog SET id_entrada='".$idEntrada."', img='".$id."', title='".$titulo."', intro='".$metadesc."', articulo='".$articulo."', tags='".$tags."', categoria='".$categoria."', activo='".$status."'  WHERE id=".$id." ";
					if (mysqli_query($con,$sql)) {
						Header("Location: editar-blog.php?id=".$id."&ok=TRUE");
					}else{
						Header("Location: editar-blog.php?id=".$id."&error=8");
					}
				
			}


	}



}else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}

ob_end_flush();
?>