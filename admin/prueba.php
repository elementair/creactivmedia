
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

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
 

$titulo="¿!Inventan 2 programa que transforma imágenes de baja a alta calidad?¡";

$titulo2=scanear_string(utf8_decode($titulo));
//$titulo=elimina_acentos($titulo);
$idEntrada=str_replace(" ", "-", $titulo2);



echo $idEntrada;


?>


	
</body>
</html>