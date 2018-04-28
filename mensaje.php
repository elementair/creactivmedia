<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	



<?php
$VisitIP="203.168.168.009";

//Fecha y hora de envio
//$HrDif="-0500";
//$HrAct=date(DATE_RFC2822,strtotime($HrDif));
date_default_timezone_set("America/Mexico_City");
$HrAct=date("d-m-Y  H:i:s");

$nombre="Santiago A.";
$email="santiago_arenas@creactivmedia.com.mx";
$mensaje="mensaje de prueba";
$asunto="asunto de prueba";
$destinatario="info@creactivmedia.com.mx";
$tel="01142454654";

$nombre=strtoupper(trim($nombre));
$email=trim($email);
$mensaje=trim($mensaje);

$rutaImg="img/email-brand.jpg";
$slogan="<i>'Tus ideas, nuestra pasión'</i>";

$empresa="empresa";
$puesto="marketing";

$contenidoDelMensaje="<html><head><title>Formulario Web</title></head><body><table align=\"center\" width=\"500px\" cellpadding=\"1\" cellspacing=\"3\"><tr><td colspan=\"2\"><center><img src='".$rutaImg."' width='501' height='151'/></center><br /></td></tr><tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/></td></tr><tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">IP visitante:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$VisitIP."</strong></font></td></tr>
<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Fecha envio:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$HrAct."</strong></font></td></tr><tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Nombre:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$nombre."\"</strong></font></td></tr>

<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Empresa:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$empresa."</strong></font></td></tr>

 <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Puesto:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$puesto."</font></td></tr> 

<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">email:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$email."\"</strong></font></td></tr> <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Tel:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$tel."</font></td></tr> 


<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Asunto:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$asunto."\"</strong></font></td></tr><tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Mensaje:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".htmlentities($mensaje)."<br /></font></td></tr><tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/><p align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" color=\"#666666\" size=\"2\">www.creactivmedia.com.mx<br />&copy;2016 CreActiv Media.<br/>".$slogan."</font></p></td></tr></table></body></html>";



echo $contenidoDelMensaje;








?>



</body>
</html>