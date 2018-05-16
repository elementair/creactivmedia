<?php
include("conexion.php");
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
		<meta property="og:url" content="http://www.creactivmedia.com.mx/portafolio.php" />
		<meta property="og:title" content="Blog CreActiv Media - Tus ideas, nuestra pasión." />
		<meta property="og:description" content="Diseño | Marketing Digital | Social Media | Tech" />
		<meta property="og:image" content="http://www.creactivmedia.com.mx/image/share-blog.jpg" />
		<meta name="author" content="Creactiv Media">
		<title>Contacto CreActiv Media Diseño, Web, Mkt Digital</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600italic,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
		<link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >	
		<link rel="stylesheet" href="css/map.css" type="text/css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/contacto.css">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/demo.css" type="text/css"/>
		<link rel="stylesheet" href="css/elastislide.css" type="text/css"/>
		<link rel="stylesheet" href="css/custom.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One" > 
		<link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans'  type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.1.1.js"
		integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
		crossorigin="anonymous"></script>

		<script src="js/modernizr.custom.17475.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/jquery.bxslider/jquery.bxslider.js"></script>
        <script src="js/parallax.js"></script>

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
        <script type="text/javascript">
            $(document).ready(function(){
                var offset = 200;
                var duration = 500;

                $(window).scroll(function(){
                    if($(this).scrollTop()> offset){
                        $('.to-top').fadeIn(duration);
                        $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.9)");
                    }else{
                        $('.to-top').fadeOut(duration);
                        $(".btn-toggle").css("background", "#16171900");
                    }
                });
                $('.to-top').click(function(){
                    $('body').animate({scrollTop:0},duration);
                })
            });
        </script>

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
    			<nav class="btn-toggle">
    				<div class="">
    					<a href="index.php"><img src="img/creactiv-logo-brand.png" alt="Logo Creactiv Media" class="brand"></a>
    				</div>
    				<div class="menu-nav">
    					<ul id="nav">
    						<li><a href="index.php#nosotros">Nosotros</a></li>
    						<li><a href="index.php#servicios">Servicios</a></li>
    						<li><a href="portafolio.php">Portafolio</a></li>
    						<li><a href="blog.php">Blog</a></li>
    						<li><a href="contacto.php">Contacto</a></li>
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
                            <p class="title-men"><a href="index.php">INICIO</a></p>
                        </div>
                        <div class="cont2">
                            <p class="title-men"><a href="index.php#nosotros">NOSOTROS</a></p>
                        </div>
                        <div class="cont3">
                            <p class="title-men"><a href="index.php#servicios">SERVICIOS</a></p>
                        </div>
                        <div class="cont4">
                            <p class="title-men"><a href="portafolio.php">PORTAFOLIO</a></p>
                        </div>
                        <div class="cont5">
                            <p class="title-men"><a href="blog.php">BLOG</a></p>
                        </div>
                        <div class="cont7">
                            <p class="title-men"><a href="contacto.php">CONTACTO</a></p>
                        </div>
                        <div class="cont8">
                            <p class="cont-icon">
                                <a href="https://www.facebook.com/CreActivMedia/"><img src="img/ico/ico-fb.png" class="ico-nav" alt=""></a>
                                <a href="https://twitter.com/creactivmedia"><img src="img/ico/ico-tw.png" class="ico-nav" alt=""></a>
                            </p>
                        </div>
                        <div class="cont9">
                            <form action="blog.php" method="get">
                                <input type="text" class="search-nav" name="search" id="_search" placeholder=" Buscar un artículo en el blog...">
                                <button type="submit" class="btn-search" id="" acceskey="intro">Buscar</button>
                            </form>
                        </div>
                      </div>
                  </div>
              </div>
            </section>
    		</header>
            <div  class="fodo_transparente_contacto"></div>
            <div id="seccion_contacto" class="container-fluid parallax-window portada-destacado" data-parallax="scroll" data-image-src="img/n_fondo/3.jpg">
                <div class="row">
                    
                        <!--<div class="log-movil"><a href="portafolio.php"><img src="image/logo-creactivmedia-blog.png" class="logo-blog" alt="CreActiv Media"></a>
                        </div>
                        <div class="slogan-movil"><img src="image/slogan-creactivmedia.png" class="logo-slogan" alt="Tus ideas, nuestra pasión.">
                        </div>-->
                        
                    <div  class="destacado">    
                        <div  class="dest-box">             
                            <h1 class="animated fadeInDown">CONTACTO</h1>                 
                        </div>
                    </div>

                </div>
            </div>
    		<div class="container-fluid">
    			<div class="row entradas"> 		 
    				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 blog-cont">		    				
    					<div class="row text-center">
    						<h2>Empieza una nueva aventura con nosotros</h2>	
    						<spam>
    							Rellene el siguiente formulario y uno de nuestro equipo se pondrá en contacto con usted lo antes posible.
    						</spam>
    						<br>
    					</div>
    					<div class="container">
    						<div id="contact_form" class="row">
    							<div class="col-md-12">    								
    								<form role="form" id="feedbackForm">
    									<div class="form-group">
    										<label class="control-label" for="name">Nombres *</label>
    										<div class="input-group">
    											<input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su nombre" />
    											<span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
    										</div>
    										<span class="help-block" style="display: none;">Por favor, escriba su nombre.</span>
    									</div>

    									<div class="form-group">
    										<label class="control-label" for="email">Motivo de Contacto*</label>
    										<select name="reason" class="form-control">
    											<option value="Consulta General">Consulta General</option>
    											<option value="Realizar Pedido">Realizar cotización</option>
    											<option value="Informe un problema">Informe un problema</option>
    										</select>
    										<span class="help-block" style="display: none;">Por favor, introduce una dirección de correo electrónico válida.</span>
    									</div>
    									<div class="form-group">
    										<label class="control-label" for="email">Dirección de Correo Electrónico *</label>
    										<div class="input-group">
    											<input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electrónico" />
    											<span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
    										</div>
    										<span class="help-block" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
    									</div>
    									<div class="form-group">
    										<label class="control-label" for="message">Mensaje *</label>
    										<div class="input-group">
    											<textarea class="form-control" id="message" name="message" placeholder="Introduzca su mensaje" ></textarea>
    											<span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
    										</div>
    										<span class="help-block" style="display: none;">Por favor, introduzca un mensaje.</span>
    									</div>
    									<img id="captcha" src="library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
    									<a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-info btn-sm">Mostrar una imagen diferente</a><br/>
    									<div class="form-group" style="margin-top: 10px;">
    										<label class="control-label" for="captcha_code">Texto dentro de la Imagen *</label>
    										<div class="input-group">
    											<input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Por razones de seguridad, por favor ingrese el código que aparece en el cuadro." />
    											<span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
    										</div>
    										<span class="help-block" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
    									</div>
    									<span class="help-block" style="display: none;">Por favor ingrese el código de la seguridad.</span>
    									<button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" data-loading-text="Enviando..." style="display: block; margin-top: 10px;">Enviar comentarios</button>
    								</form>


                                    <div id="mapa" class="map"></div>
    							</div><!--/span-->
    						</div><!--/row-->
    						<hr>
    					</div><!--/.container-->			
    				</div>
    				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

    					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <h2>Siguenos en:</h2>
                          <p>Creamos las Página web y diseño de mkt perfecta para que potenciales clientes te encuentren, siguenos en nuestras redes sociales y enterate mas de nuestros servicios.</p>

                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home"><img src="img/iconos_seguidores/boton-del-logo-de-facebook.svg">Facebook</a></li>
                            <li><a data-toggle="tab" href="#menu1"><img src="img/iconos_seguidores/boton-de-logo-del-twitter.svg">Twitter</a></li>
                          </ul>

                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                              <h3>Facebook</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="aside">
                                    <div class="plugin-fb">
                                        <div class="fb-page" data-href="https://www.facebook.com/creactivmedia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/creactivmedia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/creactivmedia">CreActiv Media</a></blockquote></div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <h3>Twitter</h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                 <div class="aside">                
                                    <a class="twitter-timeline" data-theme="light" data-link-color="#19CF86" href="https://twitter.com/CreActivMedia">Tweets by CreActivMedia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                          </div>
                        </div>  
    				</div>
    			</div>
    		</div>
    		<!-- footer home html -->
            <footer>
                Visítanos
                <div class="caja-redes">
                    <a href="https://twitter.com/CreActivMedia" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                    <a href="https://www.facebook.com/CreActivMedia/" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                    <a href="https://plus.google.com/100131094567274417996" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                </div>

                <br/>
                <address>
                    Av. Ángel Leaño # 401 - 3C Col. Los Robles, Zapopan, Jal. M&eacute;xico C.P. 45134 <br/>
                </address>
                <img src="img/web-30.png" width="30" height="30" alt="">(33) 3834 8000 | <img src="img/web-31.png" width="30" height="30" alt="">info@creactivmedia.com.mx<br/>
                <br/><br/>
                <p class="">© COPYRIGHT CREACTIV 2018, TODOS LOS DERECHOS RESERVADOS.</p>
            </footer>
            <a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <style type="text/css">
                 .fodo_transparente_contacto{
                    width:100%;
                    height: 40vh;
                    position: absolute;
                    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(104,143,5,0));
                    z-index: 1;

                  }
                .to-top{
                    position: fixed;
                    bottom: 20px;
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
    		
    		<script src="js/jquery.min.js"></script>
    		<!-- Maps API Javascript -->
    		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk"
    		type="text/javascript"></script>
    		<script src="js/mapa.js"></script>
    		<script src="js/menu.js"></script>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    		<!-- Include all compiled plugins (below), or include individual files as needed -->
    		<script src="bootstrap/js/bootstrap.min.js"></script>
    		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    		<!-- <======= UP TO HERE -->
    		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    		<script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    		<script src="assets/js/contact-form.js"></script>
    		<script>
    			$(document).ready(function(){
    				$("#Formulario").submit(function( event ){
    					event.preventDefault();

    					$.ajax({
    						type: 'POST',
    						url: '../php/contacto2.php',
    						data: $(this).serialize(),
    						success: function(data){
    							$("#respuesta").slideDown();
    							$("#respuesta").html(data);
    							$('#respuesta2').modal('show');
    							document.getElementById('Formulario').reset();
    						}
    					});

    					return false;
    				});
    			});
    		</script>
    	</body>
    	</html>



    	<!-- cierre footer html -->
    	<?php
    }
    ?>