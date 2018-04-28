<?php 
ob_start();
session_start();
 if(isset($_SESSION['login'])){

include "conexion.php";

		$titulo=trim($_POST['nombre']);
		$titulo=addslashes($titulo);
		$metadesc=trim($_POST['desc-corta']);				
		$status=$_POST["status"];
		$metadescrip=trim($_POST['desc-lg']);

		$TypArchi=$_FILES['Imagmini']['type'];
		$TamArchi=$_FILES['Imagmini']['size'];
		$TemNameArchi=$_FILES['Imagmini']['tmp_name'];
		$ErrArchi=$_FILES['Imagmini']['error'];

		$TypArch1=$_FILES['Imagslider1']['type'];
		$TamArch1=$_FILES['Imagslider1']['size'];
		$TemNameArch1=$_FILES['Imagslider1']['tmp_name'];
		$ErrArch1=$_FILES['Imagslider1']['error'];

		$TypArch2=$_FILES['Imagslider2']['type'];
		$TamArch2=$_FILES['Imagslider2']['size'];
		$TemNameArch2=$_FILES['Imagslider2']['tmp_name'];
		$ErrArch2=$_FILES['Imagslider2']['error'];

		$TypArch3=$_FILES['Imagslider3']['type'];
		$TamArch3=$_FILES['Imagslider3']['size'];
		$TemNameArch3=$_FILES['Imagslider3']['tmp_name'];
		$ErrArch3=$_FILES['Imagslider3']['error'];

		$facebook=trim($_POST['facebook']);
		$twitter=trim($_POST['twitter']);
		$youtube=trim($_POST['youtube']);
		$google=trim($_POST['google']);


		// Inicializamos sesion 
		$_SESSION['DatPorta']= array($titulo, $metadesc,$metadescrip, $status, $facebook,$twitter,$youtube,$google);


		$longTitle=strlen($titulo);
		$longSubTitle=strlen($metadesc);
		$longSubTitle=strlen($metadescrip);


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
		header('Location: nuevo-portafolio.php?error=1');

        elseif($metadesc=="" || $metadesc==NULL)
		header('Location: nuevo-portafolio.php?error=2');

		elseif($metadescrip=="" || $metadescrip==NULL)
		header('Location: nuevo-portafolio.php?error=3');
	    

  		elseif($status=="" || $status==NULL || $status==0)
		header('Location: nuevo-portafolio.php?error=4');


	    elseif($TypArch1==NULL || $TypArch1=="")
		header('Location: nuevo-portafolio.php?error=5');

		elseif($TamArch1>200500)
		header('Location: nuevo-portafolio.php?error=6');

		elseif(!(strpos($TypArch1,"jpeg")) )
		header('Location: nuevo-portafolio.php?error=7');

		elseif($ErrArch1!=0)
		header('Location: nuevo-portafolio.php?error=8');

		elseif($TypArch2==NULL || $TypArch2=="")
		header('Location: nuevo-portafolio.php?error=5');

		elseif($TamArch2>200500)
		header('Location: nuevo-portafolio.php?error=6');

		elseif(!(strpos($TypArch2,"jpeg")) )
		header('Location: nuevo-portafolio.php?error=7');

		elseif($ErrArch2!=0)
		header('Location: nuevo-portafolio.php?error=8');

		elseif($TypArch3==NULL || $TypArch3=="")
		header('Location: nuevo-portafolio.php?error=9');

		elseif($TamArch3>200500)
		header('Location: nuevo-portafolio.php?error=10');

		elseif(!(strpos($TypArch3,"jpeg")) )
		header('Location: nuevo-portafolio.php?error=11');

		elseif($ErrArch3!=0)
		header('Location: nuevo-portafolio.php?error=12');

		elseif($TypArchi==NULL || $TypArchi=="")
		header('Location: nuevo-portafolio.php?error=9');

		elseif($TamArchi>200500)
		header('Location: nuevo-portafolio.php?error=10');

		elseif(!(strpos($TypArchi,"jpeg")) )
		header('Location: nuevo-portafolio.php?error=11');

		elseif($ErrArchi!=0)
		header('Location: nuevo-portafolio.php?error=12');

		else{


		$titulo2=sanear_string($titulo);
        //$titulo=elimina_acentos($titulo);
		$idEntrada=str_replace(" ", "-", $titulo2);
		$fecha=date("Y-m-d"); //Fecha Reporte
		//$RutaPromosServer="public_html/2011/img/promo/";
		$Ruta="fotos/thumbs/";
		$Ruta1="fotos/view/";
		$Ruta2="fotos/view/";
		$Ruta3="fotos/view/";

		//$random=rand(200,500);

		//$nombreImagen=$fecha."-".$id_autor."-".$random.".jpg";
		$NameIMG=$idEntrada.".jpg";
		$NameIMG1=$idEntrada."_1.jpg";
		$NameIMG2=$idEntrada."_2.jpg";
		$NameIMG3=$idEntrada."_3.jpg";

		move_uploaded_file($TemNameArch1, $Ruta1.$NameIMG);
		move_uploaded_file($TemNameArch2, $Ruta2.$NameIMG);
		move_uploaded_file($TemNameArch3, $Ruta3.$NameIMG);
		move_uploaded_file($TemNameArchi, $Ruta.$NameIMG);

		$sSQLimg="INSERT INTO portafolio (id_entrada, title,img,img1,img2,img3, descort, desclarge, activo, facebook, twitter, youtube, google) VALUES ('".addslashes($idEntrada)."', '".addslashes($titulo)."','".addslashes($Ruta.$NameIMG)."','".addslashes($Ruta1.$NameIMG1)."','".addslashes($Ruta2.$NameIMG2)."','".addslashes($Ruta3.$NameIMG3)."','".addslashes($metadesc)."', '".addslashes($metadescrip)."','".$status."', '".addslashes($facebook)."', '".addslashes($twitter)."', '".addslashes($youtube)."', '".addslashes($google)."')";

			$Comprobacion=mysqli_query($con,$sSQLimg);
			if($Comprobacion==NULL){
			echo "Existio un error al subir los datos";
			mysqli_error($Comprobacion);
			echo $sSQLimg;
			@mysqli_free_result($Comprobacion);
			mysqli_close($con);
			}else{
			@mysqli_free_result($Comprobacion);
			mysqli_close($con);
			//echo "Los datos se agregaron correctamente";
			unset($_SESSION['DatPorta']);
			header('Location: panel-principal.php?ok=1');
			}
			
		}



}else{
  echo "Acceso Restringido: Favor de Iniciar Sesion";
}
ob_end_flush();
?>
