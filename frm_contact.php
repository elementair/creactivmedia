<?php
session_start();
include("class.phpmailer.php");
include("obtenerIP.php");


$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$tel=$_POST['telefono'];
$cel=$_POST['celular'];
$email=$_POST['email'];

  $opSer=$_POST["asunto"];
  $slname=array("Servicios de Branding", "Marketing Digital", "Servicios Multimedia", "Servicios Editoriales", "Servicios Web", "Pantallas Interactivas");
  $asunto=$slname[$opSer];




$mensaje=$_POST['mensaje'];



//comprobacion de correo
function comprobar_email($email){ 
   	$mail_correcto = 0; 
   	//compruebo unas cosas primeras 
   	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
      	 if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
         	 //miro si tiene caracter . 
         	 if (substr_count($email,".")>= 1){ 
            	 //obtengo la terminacion del dominio 
            	 $term_dom = substr(strrchr ($email, '.'),1); 
            	 //compruebo que la terminación del dominio sea correcta 
            	 if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
               	 //compruebo que lo de antes del dominio sea correcto 
               	 $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
               	 $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
               	 if ($caracter_ult != "@" && $caracter_ult != "."){ 
                  	 $mail_correcto = 1; 
               	 } 
            	 } 
         	 } 
      	 } 
   	} 
   	if ($mail_correcto) 
      	 return 1; 
   	else 
      	 return 0; 
}


//funcion de quitar espacios al principio y final de las cadenas
function quitar_spaces($Cad){
	$CadEdit=trim($Cad);
	return $CadEdit;
}


//funcion para codificar errores method get
function CodStrGet($Cad){
	$DatCod=base64_encode($Cad);
	$DatInv2=strrev($DatCod);
	$CadEdit=str_replace("=", "~", $DatInv2);
	return $CadEdit;
}

/*
$Simbol=$_SESSION['Capcha3'];
//$Oper=5+5;

if($_SESSION['Capcha3']=="+"){
$Oper=$_SESSION['Capcha1']+$_SESSION['Capcha2'];
}else{
$Oper=$_SESSION['Capcha1']*$_SESSION['Capcha2'];
}

$Vcapth=0;
if(($CodCap)!=($Oper)){
		$Vcapth=0;
	}else{
		$Vcapth=1;
}
*/

//proceso de validacion de campos del formulario, si existe errores regresar al formulario
if($nombre==""||$nombre==NULL){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error1").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_nombre").addClass("error");
	    });
	</script>
	<div id="error1" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete su Nombre
	</div>
<?php
}elseif($empresa=="" || $empresa==NULL){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error2").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_empresa").addClass("error");
	    });
	</script>
	<div id="error2" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete el nombre de su empresa
	</div>
<?php
}elseif($tel=="" || $tel==NULL){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error2").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_telefono").addClass("error");
	    });
	</script>

	<div id="error2" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete su numero de T&eacute;lefono
	</div>
<?php
}elseif($cel=="" || $cel==NULL){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error2").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_celular").addClass("error");
	    });
	</script>

	<div id="error2" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete su numero de celular
	</div>
<?php
}elseif(comprobar_email($email)!=1){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error3").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_email").addClass("error");
	    });
	</script>

	<div id="error3" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Ingrese un email valido
	</div>
<?php
}elseif($opSer==0){
?>
	<script>
	    $(document).ready(function() {
	    	$("#error4").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_asunto").addClass("error");
	    });
	</script>

    <div id="error4" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Seleccione un servicio de la lista desplegable.
	</div>
<?php
/*
elseif(($OpAsunt==""||$OpAsunt==NULL)||($long3>1))
echo header("Location: contacto.php?error=".CodStrGet("3")."");
*/
}elseif($mensaje==""||$mensaje==NULL){
?>

	<script>
	    $(document).ready(function() {
	    	$("#error5").fadeIn("slow").delay(3000).fadeOut();
	    	$("#_mensaje").addClass("error");
	    });
	</script>

	<div id="error4" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Ingrese el contenido de su mensaje.
	</div>

<?php

//elseif(($CodCap==""||$CodCap==NULL)||($long5>3)||($Vcapth==0))
//echo header("Location: contacto.php?error=".CodStrGet("5")."");

}else{
//echo "enviar correo";

$VisitIP=obtenerIPCliente();
//$VisitIP="203.168.168.009";

//Fecha y hora de envio
//$HrDif="-0500";
//$HrAct=date(DATE_RFC2822,strtotime($HrDif));
date_default_timezone_set("America/Mexico_City");
$HrAct=date("d-m-Y  H:i:s");

$nombre=strtoupper(trim($nombre));
$email=trim($email);

$mensaje=trim($mensaje);
//$rutaImg="img/email-brand.jpg";
$rutaImg="cid:logotipo";
$destinatario="info@creactivmedia.com.mx";
$slogan="<i>'Tus ideas, nuestra pasión'</i>";
$web="www.creactivmedia.com.mx";

$contenidoDelMensaje="<html><head><title>Formulario Web</title></head><body><table align=\"center\" width=\"500px\" cellpadding=\"1\" cellspacing=\"3\"><tr><td colspan=\"2\"><center><img src='".$rutaImg."' width='501' height='151'/></center><br /></td></tr><tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/></td></tr><tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">IP visitante:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$VisitIP."</strong></font></td></tr>
<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Fecha envio:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$HrAct."</strong></font></td></tr><tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Nombre:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$nombre."\"</strong></font></td></tr>

<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Empresa:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$empresa."</strong></font></td></tr>

 <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">M&oacute;vil:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$cel."</font></td></tr> 

<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">email:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$email."\"</strong></font></td></tr> <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Tel:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$tel."</font></td></tr> 


<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Asunto:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$asunto."\"</strong></font></td></tr><tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Mensaje:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".htmlentities($mensaje)."<br /></font></td></tr><tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/><p align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" color=\"#666666\" size=\"2\">".$web."<br />&copy;2016 CreActiv Media.<br/>".$slogan."</font></p></td></tr></table></body></html>";


				$correo = new PHPMailer();
				$correo->IsHTML(true);
				$correo->host = "creactivmedia.com.mx";
				//Indicamos el nombre del remitente. 
				$correo->From = "no-replay@creactivmedia.com.mx";
				// Indicamos la dirección de corrreo del destinatario. $Destinatario
				$correo->AddAddress($destinatario);
				//$correo->AddBCC("contacto-web@acegdl.com");
				$correo->AddReplyTo($email);
				
				$correo->AddEmbeddedImage("img/email-brand.jpg","logotipo");
				// El asunto del mensaje. 
				$correo->Subject = $asunto;
				// La dirección de correo del remitente.
				$correo->FromName = "CreActiv Media - Formulario Web";
				$correo->Body = $contenidoDelMensaje;
				//Definimos AltBody por si el destinatario del correo no admite email con formato html 
				// $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
				// El máximo de caracteres por línea.
				$correo->WordWrap = 50;
					if ($correo->Send()){
						//echo "El correo fue enviado correctamente";
						?>
						<script>
						 	$(document).ready(function() {
							    $("#frm").fadeOut("fast");
							    $(".msgTk").fadeIn("slow");
							});
						</script>

						    <div class="msgTk">
							    <p>¡Gracias por contáctarnos!<br/>
									Nos pondremos en contacto en breve.
							    </p>
							   <img src="image/img-frm-thank.png"  class="imgTk" alt="">
							</div>
						<?php
						
					}else{
						echo "<p>Existio un error en el envio</p>";
						
					}		
					

}



?>