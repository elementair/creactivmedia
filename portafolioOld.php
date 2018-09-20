<?php
include("conexion.php");





$_GET['portafolio_por_categoria'] == 0;
 //GRUPO PRODUCTOS( )
if($_GET['portafolio_por_categoria'] == -1 ){
   $sql=mysqli_query($con,"SELECT p.id,p.id_entrada,p.title,p.img,p.img1,p.img2,p.img3,p.descort,p.desclarge,p.activo,p.facebook,p.twitter,p.youtube,p.google
  from (((portafolio as p left outer join portafolio_servicios as o
  on id_portafolio=p.id) left outer join servicios as s on o.id_servicios=s.id) left outer join categoria_servicios as c on s.id_categoria_servicios=c.id) group by p.title order by title ASC");
}
else {
    $sql=mysqli_query($con,"SELECT p.id,p.id_entrada,p.title,p.img,p.img1,p.img2,p.img3,p.descort,p.desclarge,p.activo,p.facebook,p.twitter,p.youtube,p.google
  from (((portafolio as p left outer join portafolio_servicios as o
  on id_portafolio=p.id) left outer join servicios as s on o.id_servicios=s.id) left outer join categoria_servicios as c on s.id_categoria_servicios=c.id)  where s.id=".$_GET["portafolio_por_categoria"]." group by p.title order by title ASC");
 }
//si existe variable mostrar home blog
if(!isset($_GET["id"])){

?>
<html lang="es-Mx" ><!-- Portafolio html -->

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:url" content="http://www.creactivmedia.com.mx/portafolio" />
<meta property="og:title" content="Blog CreActiv Media - Tus ideas, nuestra pasión." />
<meta property="og:description" content="Diseño | Marketing Digital | Social Media | Tech" />
<meta property="og:image" content="http://www.creactivmedia.com.mx/image/share-blog.jpg" />
<meta name="author" content="Creactiv Media">
<title>Portafolio CreActiv Media Diseño, Web, Mkt Digital</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600italic,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/map.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/portafolio.css">
<link rel="stylesheet" href="css/animate.css">
<!-- <link rel="stylesheet" href="css/particulas.css">
<link rel="stylesheet" href="css/demo.css" type="text/css"/>
<link rel="stylesheet" href="css/elastislide.css" type="text/css"/>
<link rel="stylesheet" href="css/custom.css" type="text/css"/> -->
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One" >
<link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/parallax.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
<!--
<script src="js/modernizr.custom.17475.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/jquery.bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="js/jquery.scrollUp.js"></script>
<!-- <script type="text/javascript" src="js/scroll.js"></script> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80500677-1', 'auto');
  ga('send', 'pageview');
</script>

 <!--<script type="text/javascript">

		var f = jQuery.noConflict();
        f(document).ready(function(){


              f("#buscar").click(function (){
                    var datos={
                           "search" : f("#_search").val()
                      }

                    f.ajax({
                      type: "POST",
                      url: "load_busqueda.php",
                      data: datos,
                      contentType: "application/x-www-form-urlencoded",
                      beforeSend: function() {
                      f("#search").html("<img src='img/ico/loading.gif' width='60px' height='60px' >");
                      },
                      dataType: "html",
                      success: function(data){
                          f("#_cont-items").fadeOut("slow");

                          f("#search").fadeIn(500).html(data);
                      }
                    });
              });
        });
	</script>-->

	<!-- Facebook Pixel Code -->
	 <script>
	 !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	 n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	 n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	 t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	 document,'script','https://connect.facebook.net/en_US/fbevents.js');

	 fbq('init', '1092607814149378');
	 fbq('track', "PageView");
	 fbq('track', 'Search');

	</script>

	    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?3opI8bRHGhZc4H7VZBgPzdZNdIdPcrE3";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->

	 <noscript><img height="1" width="1" style="display:none"
	 src="https://www.facebook.com/tr?id=1092607814149378&ev=PageView&noscript=1"
	 /></noscript>
	 <!-- End Facebook Pixel Code -->

</head>


<body id="top">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=364692143850";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header>
    <!-- MENU RESPONSIVO MOVIL -->
    <nav class="btn-toggle">
        <div class="brand_container">
            <a href="index"><img src="img/creactiv_txt_negro.png" alt="Logo Creactiv Media" class="brand"></a>
        </div>
        <div class="menu-nav">
            <div id="nav">
                <li><a href="#nosotros">NOSOTROS</a></li>
                <li><a href="#seccion_servicios" >SERVICIOS</a></li>
                <li><a href="portafolio?portafolio_por_categoria=-1">PORTAFOLIO</a></li>
                <li><a href="blog_">BLOG</a></li>
                <li><a href="contacto">CONTACTOS</a></li>
            </div>
        </div>
        <div class="brand-datos">
            <a href="https://www.facebook.com/CreActivMedia/" target="_blank"><img src="img/redes_sociales/facebook.png"></a>
            <a href="https://www.instagram.com/creactivmedia/" target="_blank"><img src="img/redes_sociales/instagram.png"></a>
            <a href="https://twitter.com/creactivmedia" target="_blank"><img src="img/redes_sociales/twitter.png"></a>
        </div>
        <a href="#" onclick="return false" id="btn-toggle"><img src="img/menu_responsivo.png" class="btn-menu" height="34" width="38" alt=""></a>
    </nav>
    <!-- MENU PANTALLA PC -->
    <section class="seccionToggle">
        <div class="wrap">
            <div class="container-fluid">
                <div class="movil">
                    <div class="cont1">
                        <p class="title-men"><a href="index">INICIO</a></p>
                    </div>
                    <div class="cont2">
                        <p class="title-men"><a href="#nosotros">NOSOTROS</a></p>
                    </div>
                    <div class="cont3">
                        <p class="title-men"><a href="#seccion_servicios">SERVICIOS</a></p>
                    </div>
                    <div class="cont4">
                        <p class="title-men"><a href="portafolio?portafolio_por_categoria=-1">PORTAFOLIO</a></p>
                    </div>
                    <div class="cont5">
                        <p class="title-men"><a href="blog_">BLOG</a></p>
                    </div>
                    <div class="cont7">
                        <p class="title-men"><a href="contacto">CONTACTO</a></p>
                    </div>
                    <div class="cont8">
                        <p class="cont-icon">
                            <a href="https://www.facebook.com/CreActivMedia/" target="_top"><img src="img/ico/ico-fb.png" class="ico-nav" alt=""></a>
                            <a href="https://twitter.com/creactivmedia"><img src="img/ico/ico-tw.png" class="ico-nav" alt=""></a>
                        </p>
                    </div>
                    <div class="cont9">

                        <div class="brand_datos_reponsivo">
                            <a href="https://www.facebook.com/CreActivMedia/" target="_blank"><img src="img/redes_sociales/facebook.png"></a>
                            <a href="https://www.instagram.com/creactivmedia/" target="_blank"><img src="img/redes_sociales/instagram.png"></a>
                            <a href="https://twitter.com/creactivmedia" target="_blank"><img src="img/redes_sociales/twitter.png"></a>
                        </div>
                       <!--  <form action="blog_" method="get">
                            <input type="text" class="search-nav" name="search" id="_search" placeholder=" Buscar un artículo en el blog...">
                        <button type="submit" class="btn-search" id="" acceskey="intro">Buscar</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>


<div  class="fondo_transparente_portafolio"></div>
<div id="seccion_portafolio" class="container-fluid parallax-window portada-destacado" data-parallax="scroll" data-image-src="img/n_fondo/6.png">
	<div class="row">

			<!--<div class="log-movil"><a href="portafolio.php"><img src="image/logo-creactivmedia-blog.png" class="logo-blog" alt="CreActiv Media"></a>
			</div>
			<div class="slogan-movil"><img src="image/slogan-creactivmedia.png" class="logo-slogan" alt="Tus ideas, nuestra pasión.">
			</div>-->

		<div  class="destacado">
			<div  class="dest-box">
				<h1 class="animated fadeInDown">
          <div id="textTitle">PORTAFOLIO</div>
        </h1>
			</div>
		</div>

	</div>
</div>

<div id="contenedor_portafolio" class="container-fluid">
	<div class="row entradas">
	<div id="category-wrapper" class="col-xs-12">
    <div class="title">
      <span>Todos los <strong>Portafolios</strong></span>
    </div>
	</div>

       <ul class="category-list">
           <li class="element">
               <a class="category-link" href="portafolio?portafolio_por_categoria=-1">TODOS</a>
           </li>
   <!-- <button data-toggle="collapse" data-target="#demo">Collapsible</button> -->
           <?php
           // $servicios=mysqli_query($con,"SELECT * from servicios inner join  categoria_servicios on servicios.id_categoria_servicios=categoria_servicios.id");
           $contador=1;
   $categoria_servicios=mysqli_query($con,"SELECT * from categoria_servicios where status=1");
   foreach ($categoria_servicios as $categoria){
         ?>
           <li class="element">
               <a class="category-link" data-toggle="collapse" data-target="#demo<?php echo $contador;?>" href="#"><?php echo utf8_encode($categoria['nombre']); ?></a>
               <div id="demo<?php echo $contador;?>" class="collapse">
     <?php
     $consulta_servicios=mysqli_query($con,"SELECT * from categoria_servicios  inner join  servicios on servicios.id_categoria_servicios=categoria_servicios.id where categoria_servicios.id=".$contador."");
     // print_r($consulta_servicios);
     foreach ($consulta_servicios as $servicios){
     ?>
     <div style="font-size: 12px; margin-left: 10px; padding-left: 40px;  padding-bottom: -10px; padding-left:0px !important;">
         <a style="padding: -20px;" href="portafolio?portafolio_por_categoria=<?php echo utf8_encode($servicios['id']);?>"><?php echo utf8_encode($servicios['nombre']);?></a>
     </div>
     <?php
      }?>
     </div>
           </li>
           <?php $contador +=1; } ?>
          <!--  <li>
               <a href="#">DISEÑO WEB</a>
           </li>
           <li>
               <a href="#">FOTOGRAFIA</a>
           </li>
           <li>
               <a href="#">REDISEÑO IMAGEN</a>
           </li>
           <li>
               <a href="#">VIDEO</a>
           </li>
           <li>
               <a href="#">MKT DIGITAL</a>
           </li>
           <li>
               <a href="#">D WEB ECOMMERCE</a>
           </li>
           <li>
               <a href="#">DESARROLLO DE LOGO</a>
           </li>
           <li>
               <a href="#">PAPELERIA</a>
           </li> -->
       </ul>
		<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7 blog-cont">
			<!--<div id="search" style="display:none;"></div>-->
			<div class="content container-fluid" >
			 <?php
				if($sql){
						if(mysqli_num_rows($sql) == 0){
			            echo "<div class='browser_width colelem' id='u2258-bw'>
			            No existen registros disponibles</div>";
			            }else{
	        				while($res= mysqli_fetch_assoc($sql)){
        					?>

				<div class="grid">
					<figure class=" col-xs-12 col-sm-4 col-md-3 effect-marley">

						<?php

	            			echo '<img src="admin/'.$res["img"].'" class="img-responsive" width="auto" heigth="auto">';
        					?>
						<figcaption>
							<?php
								echo '<h2>'.$res["title"].'</h2>';
							?>
							<div>
							<?php

							echo '<p> '.utf8_encode($res["descort"]).' </p>';

							 ?>
							</div>
							<a href="#<?php echo 'modal-id-'.$res['id']; ?>" class="" data-toggle="modal" data-target="#<?php echo 'modal-id-'.$res['id']; ?>"></a>
						</figcaption>
					</figure>
				</div>

					<div class="modal fade " id="<?php echo 'modal-id-'.$res['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="Portafolio" aria-hidden="true" >
						    <div class="modal-dialog">
						        <div class="modal-content">
						          	<div class="modal-header"  style="padding:35px 50px;">
						            	<div class="row">
							                  <div class="col-lg-12">
							                 	 <div class="titulo">
							                      <?php
													echo ''.$res["title"].'';
													 ?>
													 </div>
							                  </div>
							                  <div class="col-md-12">
								                    <ul class="social-network social-circle">
								                    <?php
													echo '<li><a href="'.$res["facebook"].'" class="icoFacebook" title="Facebook">';
													 echo '<i class="fa fa-facebook"></i><span></span></a></li>';

													echo '<li><a href="'.$res["twitter"].'" class="icoTwitter" title="Twitter">';
													 echo '<i class="fa fa-twitter"></i><span></span></a></li>';

													echo '<li><a href="'.$res["google"].'" class="icoGoogle" title="Google +">';
													echo '<i class="fa fa-google-plus"></i><span></span></a></li>'; ?>
								                    </ul>
												</div>
							                </div>
									</div>
						          	<!--<div class="modal-body" style="padding:0px 0px;">	-->
								    <div id="<?php echo 'myCarousel-'.$res['id']; ?>" class="carousel slide" data-ride="carousel">


									    <!-- Wrapper for slides -->
									    <div class="carousel-inner">

									      <div class="item active">
									      <?php
											echo "<img src='admin/".$res["img1"]."' width='auto' heigth='auto' class='img-responsive'>";
															        					?>
									        <div class="carousel-caption">
									          <p style="text-shadow: 1px 1px 2px #000; "><?php
																						echo ' "'.utf8_encode($res['desclarge']).'" ';
																						 ?> </p>
									        </div>
									      </div>
											<div class="item">
										      <?php
											echo "<img src='admin/".$res["img2"]."' width='auto' heigth='auto' class='img-responsive'>";
															        					?>

										      </div>
										      <div class="item">
										      <?php
											echo "<img src='admin/".$res["img3"]."' width='auto' heigth='auto' class='img-responsive'>";
															        					?>
										      </div>



									    </div>

									    <!-- Left and right controls -->
									    <a class="left carousel-control" href="#<?php echo 'myCarousel-'.$res['id']; ?>" role="button" data-slide="prev">
									      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									      <span class="sr-only">Previous</span>
									    </a>
									    <a class="right carousel-control" href="#<?php echo 'myCarousel-'.$res['id']; ?>" role="button" data-slide="next">
									      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									      <span class="sr-only">Next</span>
									    </a>
									  </div>


							       		<!--</div>-->
								        <div class="modal-footer">
								            <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
								        </div>
							   	</div>
							</div>
					</div>


				<?php }?>
				<?php }?>
      <?php }?>
			</div>
			<!-- cierre htmml -->

		</div>

	</div>
</div>
<!-- footer home html -->
<footer id="footer">
    <div class="container-fluid">
    <div class="row">
        <div class="titulo_footer">
        <h1>¡Hola!</h1>
        <h3>Déjanos Ayudarte.</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-offset-1 formulario_cantactos">
            <div class="form">
            <form name="index" action="" method="POST">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 primer_form">
                     <!-- NOMBRE -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/nombre.png"></div>
                        <input name="Nombre" class="form-control input-md" id="nombre" placeholder="Nombre/Apellidos" type="text">
                    </div>
                     <!-- EMPRESA -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/empresa.png"></div>
                        <input name="Nombre" class="form-control input-md" id="nombre" placeholder="Empresa" type="text">
                    </div>
                     <!-- TELEFONO -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/telefono.png"></div>
                        <input name="Nombre" class="form-control input-md" id="nombre" placeholder="Teléfono fijo" type="tel">
                    </div>
                     <!-- MOVIL -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/movil.png"></div>
                        <input name="Nombre" class="form-control input-md" id="nombre" placeholder="Móvil" type="tel">
                    </div>
                    <!-- CORREO -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/email.png"></div>
                        <input class="form-control input-md" name="Correo" id="correo" placeholder="Email" type="email">
                    </div>
                </div>
                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6  segundo_form">
                    <!-- MENSAJE -->
                    <div class="form-group col-md-12">
                        <textarea class="form-control input-md" name="Mensaje" id="mensaje" rows="5" data-rule="required" placeholder="Mensaje"></textarea>
                    </div>
                       <!-- ASUNTO -->
                    <div class="form-group col-md-12">
                        <select name="asunto" id="_asunto" class="form-control input-md" required="">
                          <option value="0"><strong>Estoy Interesado en contratar:</strong></option>
                                <option value="1">- Servicios de Branding</option>
                                <option value="2">- Marketing Digital</option>
                                <option value="3">- Servicios Multimedia</option>
                                <option value="4">- Servicios Editoriales</option>
                                <option value="5">- Servicios Web</option>
                                <option value="6">- Pantallas Interactivas</option>
                        </select>
                    </div>
                     <!-- BTN ENVIAR -->
                    <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default boton-contacto"><strong>Enviar</strong></button>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="text_visitanos">

            <h1>Visitanos</h1>
            <div class="visitanos_redes_sociales">
                <a href="https://www.facebook.com/CreActivMedia/" target="_blank"><img src="img/redes_sociales/facebook.png"></a>
                <a href="https://www.instagram.com/creactivmedia/" target="_blank"><img src="img/redes_sociales/instagram.png"></a>
                <a href="https://twitter.com/creactivmedia" target="_blank"><img src="img/redes_sociales/twitter.png"></a>
            </div><br>

             <address class="datos_contacto">
                (33) 3834 8000<img src="img/iconos/visitanos_numero.png"><br/>
                info@creactivmedia.com.mx <img src="img/iconos/visitanos_email.png"><br/>
                Av. Ángel Leaño # 401 - 3C Col. Los Robles, Zapopan, Jal. M&eacute;xico C.P. 45134 <img src="img/iconos/ubicacion.png"><br/>
            </address>
            <div class="logo_visitanos">
                <img src="img/logo.png">
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright">© COPYRIGHT CREACTIV 2016, TODOS LOS DERECHOS RESERVADOS.</div>
</footer>
<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
    <style type="text/css">
        .to-top{
            position: fixed;
            bottom: 40px;
            right: 20px;

            background: #000;
            color:#fff;
            padding: 12px 12px;
            border-radius: 50%;

        }
        .to-top:hover{
            background: #fff;

            color:#000;
        }
    </style>
<script src='http://css-tricks.com/examples/BlurredText/js/jquery.lettering.js'></script>
<script src="js/jquery.min.js"></script>
        <!-- Maps API Javascript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk"
  type="text/javascript"></script>
<!-- <script src="js/mapa.js"></script> -->
<script src="js/menu.js"></script>
	<!-- <script type="text/javascript" src="js/particle.js"></script> -->
<!-- <script type="text/javascript" src="js/particles.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://css-tricks.com/examples/BlurredText/js/jquery.lettering.js'></script>
<!-- <script type="text/javascript" src="js/fun_menu_portafolio.js"></script> -->

<script type="text/javascript">
$("#textTitle").lettering();

// hack to get animations to run again
$("#textTitle").on('click', function() {
  var el = $(this),
     newone = el.clone();
  el.before(newone);
  el.remove();
});
</script>

</body>
</html>



<!-- cierre footer html -->
<?php
}
?>
