<?php
include("conexion.php");
//si existe variable mostrar home blog
if(!isset($_GET["id"])){

	?>
	<html lang="es-Mx"><!-- home blog html -->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta property="og:url" content="http://www.creactivmedia.com.mx/blog.php" />
		<meta property="og:title" content="Blog CreActiv Media - Tus ideas, nuestra pasión." />
		<meta property="og:description" content="Diseño | Marketing Digital | Social Media | Tech" />
		<meta property="og:image" content="http://www.creactivmedia.com.mx/image/share-blog.jpg" />
		<meta name="author" content="Creactiv Media">
		<title>Blog CreActiv Media Diseño, Web, Mkt Digital</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600italic,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/map.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/multimedia.css">
		<link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
		<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/jquery.bxslider/jquery.bxslider.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
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

<script type="text/javascript">

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
</script>
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
	<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1092607814149378&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

	</head>


	<body>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=364692143850";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>



		<header>

			<nav class="btn-toggle">
				<div class="">
					<a href="index.php"><img src="img/creactiv-logo-brand.png" alt="Logo Creactiv Media" class="brand"></a>
				</div>
				<div class="menu-nav">
					<ul id="nav">
						<li><a href="#">Nosotros</a></li>
						<li><a href="#" onclick="return false" id="btn-toggle2">Servicios</a></li>
						<li><a href="portafolio.php">Portafolio</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</div>
				<div class="brand-datos">
					<img src="img/web-30.png" alt="" width="31" height="31">(33) 3834 8000  <img src="img/web-31.png" alt="" width="31" height="31">info@creactivmedia.com.mx
				</div>
				<a href="#" onclick="return false" id="btn-toggle"><img src="img/menu.png" class="btn-menu" height="64" width="64" alt=""></a>
			</nav>


			<section class="seccionToggle">
				<div class="wrap">
					<div class="container-fluid">
						<div class="movil">
							<div class="cont1">			
								<a href="#"><img src="img/ico/gif/identidad.gif" alt="" class="img-men img1-gif"></a>
								<a href="#"><img src="img/ico/png/identidad.png" alt="" id="identidad" class="img-men img1-png"></a>
								<p class="title-men"><a href="#">IDENTIDAD</a></p>
								<img src="img/line_01.png" class="img-responsive line" alt="">
								<p class="desc-men">Hacemos que tu marca impacte desde la primera impresión.</p>
							</div>
							<div class="cont2">
								<a href="#"><img src="img/ico/gif/mkt.gif" alt="" class="img-men img2-gif"></a>
								<a href="#"><img src="img/ico/png/mkt.png" alt="" id="mkt" class="img-men img2-png"></a>
								<p class="title-men"><a href="#">MKT DIGITAL</a></p>
								<img src="img/line_03.png" class="img-responsive line" alt="">
								<p class="desc-men">Lleva  tu marca al mundo digital,  te ayudamos a llegar a más personas.</p>
							</div>
							<div class="cont3">
								<a href="#"><img src="img/ico/gif/multimedia.gif" alt="" class="img-men img3-gif"></a>
								<a href="#"><img src="img/ico/png/multimedia.png" alt="" id="multimedia" class="img-men img3-png"></a>
								<p class="title-men"><a href="#">MULTIMEDIA</a></p>
								<img src="img/line_05.png" class="img-responsive line" alt="">
								<p class="desc-men">Damos vida a tu marca a través de fotografía, audiovisuales y animación impactante.</p>
							</div>


							<div class="cont4">
								<a href="#"><img src="img/ico/gif/editorial.gif" alt="" class="img-men img4-gif"></a>
								<a href="#"><img src="img/ico/png/editorial.png" alt="" id="editorial" class="img-men img4-png"></a>
								<p class="title-men"><a href="#">EDITORIAL</a></p>
								<img src="img/line_02.png" class="img-responsive line" alt="">
								<p class="desc-men">Hacemos que tus proyectos tomen  cuerpo  y forma  de manera impresa.</p>
							</div>
							<div class="cont5">
								<a href="#"><img src="img/ico/gif/web.gif" alt="" class="img-men img5-gif"></a>
								<a href="#"><img src="img/ico/png/web.png" alt="" id="web" class="img-men img5-png"></a>
								<p class="title-men"><a href="#">DISEÑO WEB</a></p>
								<img src="img/line_04.png" class="img-responsive line" alt="">
								<p class="desc-men">A tu medida,  Posicionamos tu sitio y lo llevamos  al siguiente nivel.</p>
							</div>
							<div class="cont6">
								<a href="blog.php"><img src="img/ico/gif/blog.gif" alt="" class="img-men img6-gif"></a>
								<a href="blog.php"><img src="img/ico/png/blog.png" alt="" id="blog" class="img-men img6-png"></a>
								<p class="title-men"><a href="blog.php">BLOG</a></p>
								<img src="img/line_09.png" class="img-responsive line" alt="">
								<p class="desc-men">Sigue nuestro blog  y recibe contenido  especialmente para ti. </p>
							</div>


							<div class="cont7">
								<a href="#"><img src="img/ico/gif/pantalla.gif" alt="" class="img-men img7-gif"></a>
								<a href="#"><img src="img/ico/png/pantalla.png" alt="" id="pantalla" class="img-men img7-png"></a>
								<p class="title-men"><a href="#">PANTALLAS INTERACTIVAS</a></p>
								<img src="img/line_07.png" class="img-responsive line" alt="">
								<p class="desc-men">Contenido multimedia, móvil y dinámico al alcance de tus manos.</p>
							</div>
							<div class="cont8">
								<a href="portafolio.php"><img src="img/ico/gif/portafolio.gif" alt="" class="img-men img8-gif"></a>
								<a href="portafolio.php"><img src="img/ico/png/portafolio.png" alt="" id="portafolio" class="img-men img8-png"></a>
								<p class="title-men"><a href="#">PORTAFOLIO</a></p>
								<img src="img/line_08.png" class="img-responsive line" alt="">
								<p class="desc-men">Nuestros clientes y sus proyectos. Su confianza nos respalda.</p>
							</div>
							<div class="cont9">
								<a href="index.php#contacto"><img src="img/ico/gif/contacto.gif" alt="" class="img-men img9-gif"></a>
								<a href="index.php#contacto"><img src="img/ico/png/contacto.png" alt="" id="contacto" class="img-men img9-png"></a>
								<p class="title-men"><a href="index.php#contacto">CONTACTO</a></p>
								<img src="img/line_10.png" class="img-responsive line" alt="">
								<p class="desc-men">¿Tienes un proyecto en puerta?  ¡Nosotros te ayudamos!</p>
							</div>


						</div>

					</div>


				</div>
			</section>
		</header>

		<div class="container-fluid portada-destacado">		
			<section class="content-section video-section">
				<div class="pattern-overlay">
					<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=fdJc1_IBKJA',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
							<h1>MULTIMEDIA</h1>  
								<h3>Lo mejor en edición de Audio, Video e Imágen</h3>
							</div>
						</div>
					</div>
				</div>
			</section>				
		</div>

		<div class="container-fluid">
			<div class="row entradas">






				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 blog-cont">







					<br/><br/>

					<div id="search" style="display:none;"></div>

					<!-- cierre htmml -->
					<?php
					if ($sql = mysqli_query($con, "SELECT id, id_entrada, title, intro, fecha FROM blog WHERE activo=1 ORDER BY fecha DESC LIMIT 1,100 ")) {

						if(mysqli_num_rows($sql) == 0){
							echo "<div class='browser_width colelem' id='u2258-bw'>
							No existen registros disponibles</div>";
						}else{

							echo "<div class='cont-items' id='_cont-items'>";
							while($row0 = mysqli_fetch_assoc($sql)) {

								$post=$row0["intro"];
								echo "<div class='item'>

								<a href='blog.php?id=".$row0["id_entrada"]."' class='link' id='' ><img src='blog/".$row0["id_entrada"].".jpg' class='img-responsive'  alt='' /></a>
								<h2 class='title1'><a href='blog.php?id=".$row0["id_entrada"]."' class='link' id='' >".$row0["title"]."</a></h2>
								<p class='desc-corta'><span class='fecha'>".$row0["fecha"]."</span> ".$post."</p>

							</div>";                
						}
						echo "</div>";

					}
                   //mysql_free_result($sql);
				}

				?>



			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

				<div class="aside">

					<div class="plugin-fb">
						<div class="fb-page" data-href="https://www.facebook.com/creactivmedia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/creactivmedia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/creactivmedia">CreActiv Media</a></blockquote></div>
					</div>

					<br/><br/>

					<div class="item-servicios">
						<a href="#"><img src="image/servicios/002.jpg" class="img-responsive" alt=""></a>
					</div>

					<div class="item-servicios">
						<a href="#"><img src="image/servicios/001.jpg" class="img-responsive" alt=""></a>
					</div>

					<div class="item-servicios">
						<a href="#"><img src="image/servicios/003.jpg" class="img-responsive" alt=""></a>
					</div>


					<a class="twitter-timeline" data-theme="light" data-link-color="#19CF86" href="https://twitter.com/CreActivMedia">Tweets by CreActivMedia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

					<br/><br/>


					<?php
/*
			if ($sql = mysql_query("SELECT COUNT('categoria') AS categoria FROM blog GROUP BY categoria",$con)) {
					 while($row0 = mysql_fetch_assoc($sql)) {
					 		echo $row0['categoria'];
					 }
			}
*/
			?>
		</div>
	</div>
	
</div>
</div>


<!-- footer home html -->
<footer>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				Vis&iacute;tanos
				<div class="caja-redes">
					<a href="https://twitter.com/CreActivMedia" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
					<a href="https://www.facebook.com/CreActivMedia/" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
					<a href="https://plus.google.com/100131094567274417996" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
				</div>

				<br/>
				<address>
					Av. Ángel Leaño # 401 - 3C Col. Los Robles, Zapopan, Jal. M&eacute;xico C.P. 45134 <br/>
				</address>
				<img src="img/web-30.png" width="30px" height="30px" alt="">(33) 3834 8000 | <img src="img/web-31.png" width="30px" height="30px" alt="">info@creactivmedia.com.mx<br/>
				<br/><br/>
			</div>


		</div>
	</div>


	<div id="mapa" class="map"></div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<br/><br/>
				<h4 class="sitemap">Site Map</h4>

				<ul class="ft-site">
					<li><a href="#">Identidad</a></li>
					<li><a href="#">Mkt Digital</a></li>
					<li><a href="#">Multimedia</a></li>
					<li><a href="#">Editorial</a></li>
					<li><a href="#">Diseño Web</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Pantallas Interactivas</a></li>
					<li><a href="#">Portafolio</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-right">

				<img src="img/log-creactiv-ft.png" class="ft-logo" alt="">

				<p class="copy">© COPYRIGHT CREACTIV 2016, TODOS LOS DERECHOS RESERVADOS.</p>

			</div>
		</div>

	</div>

</footer>
<script src="js/jquery.min.js"></script>
<!-- Maps API Javascript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk"
type="text/javascript"></script>
<script src="js/mapa.js"></script>


<script src="js/menu.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



<!-- cierre footer html -->
<?php
}
	?>
	