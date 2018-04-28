<?php
include("class.phpmailer.php");
include("obtenerIP.php");


//$boletin=($_POST["boletin"]=="true") ? 1: 0 ;

$nombre=$_POST["nombre"];
$email= $_POST["email"];
$telefono=$_POST["telefono"];
$celular=$_POST["celular"];
$nombreEmpresa=$_POST["nombre-empresa"];
$direccionEmpresa=$_POST["direccion-empresa"];
$telefonoEmpresa=$_POST["telefono-empresa"];
$rsocial=$_POST["rsocial"];
$rfc=$_POST["rfc"];
$sector=$_POST["sector-empresa"];
$empleados=$_POST["empleados"];
$antiguedad=$_POST["antiguedad"];
$comentario=$_POST["comentario"];
$web=($_POST["web"]=="true") ?  1: 0 ;
$marketing=($_POST["marketing"]=="true") ?  1: 0 ;
$identidad=($_POST["identidad"]=="true") ?  1: 0 ;
$fotografia=($_POST["fotografia"]=="true") ?  1: 0 ;
$redes=($_POST["redes"]=="true") ? 1: 0 ;
$ecommerce=($_POST["ecommerce"]=="true") ?  1: 0 ;
$video=($_POST["video"]=="true") ?  1: 0 ;
$app=($_POST["app"]=="true") ?  1: 0 ;
$otro=($_POST["otro"]=="true") ?  1: 0 ;
$explique=$_POST["explique"];
$capacitacion=($_POST["capacitacion"]=="true") ?  1: 0 ;
$renovacion=($_POST["renovacion"]=="true") ?  1: 0 ;
$posicionamiento=($_POST["posicionamiento"]=="true") ? 1: 0 ;
$creacion=($_POST["creacion"]=="true") ?  1: 0 ;
$seguidores=($_POST["seguidores"]=="true") ?  1: 0 ;



function vot($dat){
	$res="";
	if($dat==1){
	   $res="SI";
	}else{
		$res="NO";
	}

	return $res;
}




	 //fecha
	date_default_timezone_set('America/Mexico_City');
	$fechaAct=date("Y-m-d"); //Fecha Entrada
	$horaAct=date("H:i:s"); //hora Entrada
	$year=date("Y"); 


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





//proceso de validacion de campos del formulario, si existe errores regresar al formulario
if($nombre==""||$nombre==NULL){
?>
	<script>
	    var r = jQuery.noConflict();
	    r(document).ready(function() {
	    	r("#error").fadeIn("slow").delay(3000).fadeOut();
	    	r("#_nombre").addClass("error");
	    });
	</script>
	<div id="error" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete su Nombre
	</div>
<?php
}elseif($nombreEmpresa=="" || $nombreEmpresa==NULL){
?>
	<script>
	var r = jQuery.noConflict();
	    r(document).ready(function() {
	    	r("#error").fadeIn("slow").delay(3000).fadeOut();
	    	r("#_empresa").addClass("error");
	    });
	</script>
	<div id="error" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete el nombre de su empresa
	</div>
<?php
}elseif(comprobar_email($email)!=1){
?>
	<script>
	var r = jQuery.noConflict();
	    r(document).ready(function() {
	    	r("#error").fadeIn("slow").delay(3000).fadeOut();
	    	r("#_email").addClass("error");
	    });
	</script>

	<div id="error" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Ingrese un email valido
	</div>
<?php
}elseif($telefono=="" || $telefono==NULL){
?>
	<script>
	var r = jQuery.noConflict();
	    r(document).ready(function() {
	    	r("#error").fadeIn("slow").delay(3000).fadeOut();
	    	r("#_telefono").addClass("error");
	    });
	</script>

	<div id="error" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Complete su numero de T&eacute;lefono
	</div>
<?php
}elseif($rfc==""||$rfc==NULL){
?>

	<script>
	var r = jQuery.noConflict();
	    r(document).ready(function() {
	    	r("#error").fadeIn("slow").delay(3000).fadeOut();
	    	r("#_mensaje").addClass("error");
	    });
	</script>

	<div id="error" style="display:none" class="err">
	    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	    Error: Ingrese un RFC para continuar
	</div>

<?php
}else{





$VisitIP=obtenerIPCliente();
//$VisitIP="203.168.168.009";


date_default_timezone_set("America/Mexico_City");
$HrAct=date("d-m-Y  H:i:s");

$nombre=strtoupper(trim($nombre));
$email=trim($email);


//$rutaImg="img/email-brand.jpg";
$rutaImg="cid:logotipo";
$destinatario="info@creactivmedia.com.mx";
$slogan="<i>'CreActiv Media'</i>";
$webDir="www.creactivmedia.com.mx";

$contenidoDelMensaje="<html><head><title>Formulario Web</title></head><body><table align=\"center\" width=\"500px\" cellpadding=\"1\" cellspacing=\"3\"><tr><td colspan=\"2\"><center><img src='".$rutaImg."' width='501' height='151'/></center><br /></td></tr><tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/></td></tr><tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">IP visitante:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$VisitIP."</strong></font></td></tr>
<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Fecha envio:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$HrAct."</strong></font></td></tr><tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Nombre:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$nombre."\"</strong></font></td></tr>



<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">email:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>\"".$email."\"</strong></font></td></tr>



 <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Tel:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$telefono."</font></td></tr> 

 <tr><td width=\"100px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Celular:</font></td><td width=\"400px\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$celular."</font></td></tr> 


<tr><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Empresa:</font></td><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><strong>".$nombreEmpresa."</strong></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Dirección:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$direccionEmpresa."<br /></font></td></tr>


<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Razón Social:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$rsocial."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">RFC:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$rfc."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">sector:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$sector."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Numero de Empleadosn:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$empleados."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Antiguedad Empresa:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$antiguedad."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">¿Porqué le gustaría participar en esta dinámica?:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$comentario."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Web:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($web)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Marketing:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($marketing)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Branding:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($identidad)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">fotografía:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($fotografia)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Redes Sociales:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($redes)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">E-commerce:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($ecommerce)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Video Corporativo:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($video)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Desarrollo Apps:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($app)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Otros:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($otro)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">¿Que otros servicios necesita y/o como podemos ayudarle?:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$explique."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> Capacitación de clientes:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($capacitacion)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Renovación de Identidad:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($renovacion)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Posicionamiento y Visibilidad Online:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($posicionamiento)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Creación de nuevo negocio:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($creacion)."<br /></font></td></tr>

<tr valign=\"top\"><td><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Íncrementar Seguidores e Interacción Online:</font></td><td align=\"justify\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".vot($seguidores)."<br /></font></td></tr>



<tr><td colspan=\"2\"><hr size=\"2\" color=\"#076ebc\"/><p align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" color=\"#666666\" size=\"2\">".$webDir."<br />&copy;2016 CreActiv.<br/>".$slogan."</font></p></td></tr></table></body></html>";


				$correo = new PHPMailer();
				$correo->IsHTML(true);
				$correo->host = "creactiv.com.mx";
				//Indicamos el nombre del remitente. 
				$correo->From = "no-replay@sistepack.com";
				// Indicamos la dirección de corrreo del destinatario. $Destinatario
				$correo->AddAddress($destinatario);
				//$correo->AddBCC("contacto-web@acegdl.com");
				$correo->AddReplyTo($email);
				
				$correo->AddEmbeddedImage("../img/email-brand.jpg","logotipo");
				// El asunto del mensaje. 
				$correo->Subject = "Formulario Promoción Navidad";
				// La dirección de correo del remitente.
				$correo->FromName = "Campaña Navidad";
				$correo->Body = $contenidoDelMensaje;
				//Definimos AltBody por si el destinatario del correo no admite email con formato html 
				// $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
				// El máximo de caracteres por línea.
				$correo->WordWrap = 50;
					if ($correo->Send()){
						//echo "El correo fue enviado correctamente";
			
						?>

					
						<script>
						var r = jQuery.noConflict();
						 	r(document).ready(function() {
							    r("#contacto").fadeOut("fast");
							    r(".msgTk").fadeIn("slow");
							});
						</script>

						    <div class="msgTk">
							    <h1>¡Gracias por participar,<br/>
									Nos pondremos en contacto en breve.!
							    </h1>
							   <img src="http://www.creactivmedia.com.mx/navidad/img/img-frm-thank.png"  class="msj-frm" alt="">
							</div>
						<?php
						
					}else{
							//echo $contenidoDelMensaje;
						?>
						<script>
						var r = jQuery.noConflict();
						 	r(document).ready(function() {
							    r("#contacto").fadeOut("fast");
							    r(".error").fadeIn("slow");
							});
						</script>

						    <div class="error">
							    <p>Existio un error en el envio. Intente m&aacute;s tarde</p>
							   
							</div>
						<?php
						
						
					}		
					

}
