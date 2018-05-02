
<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es-Mx">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    <meta name="description" content="Somos una empresa mexicana especializada en brindar servicios de Diseño Gráfico, Imagen, Publicidad y MKT Digital, de una forma creativa e innovadora">
    <meta name="keywords" content="Agencia de publicidad, diseño, marketing digital, branding, imagen corporativa, fotografía, multimedia, pantallas interactivas, producción de video, posicionamiento SEO, logotipos">
    <meta property="og:url" content="http://www.creactivmedia.com.mx" />
    <meta property="og:title" content="CreActiv Media Diseño, Web, Mkt Digital" />
    <meta property="og:description" content="Somos una empresa mexicana especializada en brindar servicios de Diseño Gráfico, Imagen, Publicidad y MKT Digital, de una forma creativa e innovadora." />
    <meta property="og:image" content="http://www.creactivmedia.com.mx/image/share-index.jpg" />

    <meta name="author" content="Creactiv Media - Santiago Arenas">
    <title>CreActiv Media Diseño, Web, Mkt Digital</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/modal_animate.css">
    
    <script src="scrollmagic/minified/ScrollMagic.min.js"></script>
    <script src="scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>

    <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>

    <!--  <script src="scrollmagic/minified/plugins/debug.addIndicators.min.js"></script> -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cubo.css">

   <!-- PRELOADER -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <!-- FIN PRELOADER -->



    <!-- 
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-80500677-1', 'auto');
	  ga('send', 'pageview');
	</script>
    -->


	<!--Start of Zopim Live Chat Script
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3opI8bRHGhZc4H7VZBgPzdZNdIdPcrE3";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>-->
<!--End of Zopim Live Chat Script-->


<link rel="stylesheet" src="js/jquery.bxslider/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script>
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        auto: true,
        minSlides: 2,
        maxSlides: 8,
        slideWidth: 250,
        slideMargin: 10,
        pager: false,
        autoControls: false,
        hideControlOnEnd: false,
        infiniteLoop: false,
        controls: false
    });
  });
</script>


</head>
<body>

    <!-- Elemento muestra preloader  -->
    <div class="preloader" id="preloader">
        
        <img class="logo" src="img/log-creactiv-ft.png">
       
        <div class="animationload">
            <div class="osahanloading"></div>
        </div>
        <p class="text-center loadText">cargando . . . </p>
    </div>
    <!-- fin de elemento muestra preloader -->

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init({
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        });
    </script>

    <script>
    // init controller
    var controller = new ScrollMagic.Controller();
</script>


<header>
    <!-- MENU RESPONSIVO MOVIL -->
    <nav class="btn-toggle">
        <div class="">
            <a href="index.php"><img src="img/creactiv-logo-brand.png" alt="Logo Creactiv Media" class="brand"></a>
        </div>
        <div class="menu-nav">
            <div id="nav">
                <li><a id="btn_nosotros">Nosotros</a></li>
                <li><a id="btn_servicio">Servicios</a></li>
                <li><a href="portafolio.php">Portafolio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </div>
        </div>
        <div class="brand-datos">
            <img src="img/web-30.png" alt="" width="31" height="31">(33) 3834 8000  <img src="img/web-31.png" alt="" width="31" height="31">info@creactivmedia.com.mx
        </div>
        <a href="#" onclick="return false" id="btn-toggle"><img src="img/menu.png" class="btn-menu" height="64" width="64" alt=""></a>
    </nav>
    <!-- MENU PANTALLA PC -->
    <section class="seccionToggle">
        <div class="wrap">
            <div class="container-fluid">
                <div class="movil">
                    <div class="cont1">         
                        <p class="title-men"><a href="index.php">INICIO</a></p>
                    </div>
                    <div class="cont2">
                        <p class="title-men"><a href="#nosotros">NOSOTROS</a></p>
                    </div>
                    <div class="cont3">
                        <p class="title-men"><a href="#seccion_servicios">SERVICIOS</a></p>
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

<!-- CARRUSEL INICIO -->
<div class="sombra_transparente"></div>
<div id="carousel-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1" class=""></li>
        <li data-target="#carousel-slider" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/n_fondo/1.jpg" alt="First slide" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>EJEM</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/n_fondo/2.jpg" alt="First slide" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/n_fondo/4.jpg" alt="First slide" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<div id="boton_contactanos"><a href=" contacto.php"><font color="white">contactanos</font></a></div>

<svg width="100%" height="100%" class="pol-01" >
  <polygon points="0,0 3500,225 0,225"/>
</svg>

<div id="nosotros" class="container-fluid parallax-window" data-parallax="scroll" data-image-src="img/n_fondo/3.jpg">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row title1">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 txt_nosotros">
            <h2>NOSOTROS</h2>
            <!-- <div class="barra_inferior_titulo_verde"></div> -->
            <p>Somos una empresa mexicana especializada en brindar servicios de Diseño Gráfico, Imagen, Publicidad y MKT Digital, de una forma creativa e innovadora a empresas e instituciones públicas y privadas. Tenemos para ti soluciones innovadoras en Comunicación Gráfica, Medios Audiovisuales, Web y MKT Digital, que contribuyen al crecimiento, competitividad y posicionamiento de tu Empresa, agregando valor a su Identidad Institucional.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 txt_que_ofrecemos" >
            <div class="container contenedor_que_ofrecemos">
              <h2>¿QUÉ OFRECEMOS?</h2>
              <!-- <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p> -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class='glyphicon glyphicon-wrench'></span>DIAGNÓSTICO DE IDENTIDAD</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Damos valor a tu Marca, aprovechamos tus fortalezas y las convertimos en negocio.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class='glyphicon glyphicon-screenshot'></span>IDENTIFICACION DE OPORTUNIDADES</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Para detectar áreas de desarrollo e ir siempre un paso adelante.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class='glyphicon glyphicon-knight'></span>ESTRATEGIAS CREACTIVAS</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Según las necesidades de tu empresa, investigación de mercado, competencias y ofertas de valor.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class='glyphicon glyphicon-plane'></span>DESARROLLO DE PLAN Y EJECUCIÓN</a>
                    </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">Aplicación, seguimiento y búsqueda de nuevas ideas y proyectos para hacer crecer tu negocio.</div>
                  </div>
                </div>
            </div> 
        </div>
        </div>
    </div>
</div>

<svg id="seccion_servicios" width="100%" height="100%" class="pol-2">
  <polygon points="0,0 3500,225 0,225"/>
</svg>
<div class="txt_servicios" >
SERVICIOS
<hr> 
<p>Diseñamos soluciones a tu medida</p>
</div>
<div class="container-fluid">
    <div class="row pc">
        <img src="img/home/pc_layout.png" class="img-responsive center-block wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s" alt="">
    </div>
</div>

<div class="container-fluid ser">
    <div class="row servicios" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                    <ul ontouchstart class="col_servicios">
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 columna_servicio'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a href='blog.php' target='_blank'></a>
                              <a href='blog.php' target='_blank'></a>
                              <a href='blog.php' target='_blank'></a>
                              <a href='blog.php' target='_blank'></a>
                              <div class='cube blog'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                  <img src="img/servicios/blog.svg">
                                </div>
                                <div>BLOG 
                                    <p>Sigue nuestro blog y recibe contenido especialmente para ti.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                      </div>
                      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_1'></a>
                              <a data-toggle="modal" href='#modal_id_1'></a>
                              <a data-toggle="modal" href='#modal_id_1'></a>
                              <a data-toggle="modal" href='#modal_id_1'></a>
                              <div class='cube multimedia'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                    <img src="img/servicios/multimedia.svg">
                                </div>
                                <div>MULTIMEDIA
                                    <p>Damos vida a tu marca a través de fotografía, audiovisuales y animación impactante.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                      </div>
                      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_2'></a>
                              <a data-toggle="modal" href='#modal_id_2'></a>
                              <a data-toggle="modal" href='#modal_id_2'></a>
                              <a data-toggle="modal" href='#modal_id_2'></a>
                              <div class='cube m_digital'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                    <img src="img/servicios/marketing_digital.svg">
                                </div>
                                <div>MARKETING DIGITAL
                                    <p>Lleva tu marca al mundo digital, te ayudamos a llegar a más personas.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          </div>
                        
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a href='portafolio.php' target='_blank'></a>
                              <a href='portafolio.php' target='_blank'></a>
                              <a href='portafolio.php' target='_blank'></a>
                              <a href='portafolio.php' target='_blank'></a>
                              <div class='cube portafolio'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                 <img src="img/servicios/potafolio.svg">
                                </div>
                                <div>PORTAFOLIO
                                    <p>Nuestros clientes y sus proyectos. Su confianza nos respalda.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                      </div>
                      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_3'></a>
                              <a data-toggle="modal" href='#modal_id_3'></a>
                              <a data-toggle="modal" href='#modal_id_3'></a>
                              <a data-toggle="modal" href='#modal_id_3'></a>
                              <div class='cube indentidad'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                  <img src="img/servicios/identidad.svg">
                                </div>
                                <div>IDENTIDAD<br>
                                    <P>Hacemos que tu marca impacte desde la primera impresión.</P>
                                </div>
                              </div>
                            </div>
                          </li>
                      </div>
                      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_4'></a>
                              <a data-toggle="modal" href='#modal_id_4'></a>
                              <a data-toggle="modal" href='#modal_id_4'></a>
                              <a data-toggle="modal" href='#modal_id_4'></a>
                              <div class='cube p_interactiva'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                   <img src="img/servicios/pantallas_interactivas.svg">
                                </div>
                                <div>PANTALLAS INTERACTIVAS
                                    <p>Contenido multimedia, móvil y dinámico al alcance de tus manos.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          </div>
                       
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_5'></a>
                              <a data-toggle="modal" href='#modal_id_5'></a>
                              <a data-toggle="modal" href='#modal_id_5'></a>
                              <a data-toggle="modal" href='#modal_id_5'></a>
                              <div class='cube d_web'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                 <img src="img/servicios/diseno_web.svg">
                                </div>
                                <div>DISEÑO WEB
                                    <p>A tu medida, Posicionamos tu sitio y lo llevamos al siguiente nivel.</p>
                                </div>
                              </div>
                            </div>
                          </li class="servicio_individual">
                      </div>
                      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                          <li class="servicio_individual">
                            <div class='link'>
                              <a data-toggle="modal" href='#modal_id_6'></a>
                              <a data-toggle="modal" href='#modal_id_6'></a>
                              <a data-toggle="modal" href='#modal_id_6'></a>
                              <a data-toggle="modal" href='#modal_id_6'></a>
                              <div class='cube editorial'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                 <img src="img/servicios/editorial.svg">
                                </div>
                                <div>EDITORIAL
                                    <p>Hacemos que tus proyectos tomen cuerpo y forma de manera impresa.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                      </div>
                        </ul>

                        
                        <svg class='clips' viewbox='0 0 0 0' xmlns='http://www.w3.org/2000/svg'>
                          <defs>
                            <clippath id='clip-right'>
                              <polygon id='right' points='48 0 48 96 0 48'></polygon>
                            </clippath>
                            <clippath id='clip-left'>
                              <polygon id='left' points='0 0 0 96 48 48'></polygon>
                            </clippath>
                            <clippath id='clip-bottom'>
                              <polygon id='bottom' points='96 48 0 48 48 0'></polygon>
                            </clippath>
                            <clippath id='clip-top'>
                              <polygon id='top' points='0 0 96 0 48 48'></polygon>
                            </clippath>
                          </defs>
                        </svg>
            </div>
        </div>
    </div>
</div>

<svg width="100%" height="100%" class="pol-3">
  <polygon points="0,0 3500,225 0,225"/>
</svg>
<!-- <a class="btn btn-primary" >Trigger modal</a> -->
<!-- MODAL CONTENIDO -->
<div class="modal fade" id="modal_id_1"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">MULTIMEDIA</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Producción y edición de video<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Fotografía Comercial e Institucional<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Animación Digital</p>

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_id_2"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">MARKETING DIGITAL</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Estrategias de posicionamiento<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Marketing Digital<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Redes Sociales<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Mantenimiento de Blogs<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Adwords<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Mailing</p>

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_id_3"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">IDENTIDAD</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Marca<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Empaque<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Papeleria<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Diseño Publicitario<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Punto de Venta</p>

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_id_4"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">PANTALLAS INTERACTIVAS</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Tecnología que despierta el interes del consumidor en tu producto o servicio.</p>
                   

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_id_5"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">DISEÑO WEB</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Diseño de sitios<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">E-commerce<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Hosting<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Posicionamiento<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">SEM/SEO</p>
                   

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_id_6"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">EDITORIAL</h4>
            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Catálogos<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Libros<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Revistas<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Periódico<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Boletines</p>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Manuales</p>
                   

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row rs">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>REDES SOCIALES</h3>
            <div class="barra_inferior_titulo_blanco"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis et ex eget pretium. Maecenas et ligula nibh. Pellentesque sit amet convallis erat. Nullam congue augue sit amet mi iaculis bibendum.</p>
            <img src="img/home/movil.png" id="movil" class="img-responsive wow slideInLeft"  data-wow-duration="1s" data-wow-delay="1s"' alt="">
            <img src="img/home/emoji-001.png" class="emoji-01 animated " id="emoji-01" alt="">
            <img src="img/home/emoji-002.png" class="emoji-02 animated " id="emoji-02" alt="">
            <img src="img/home/emoji-003.png" class="emoji-03 animated " id="emoji-03" alt="">
            <img src="img/home/emoji-004.png" class="emoji-04 animated " id="emoji-04" alt="">
            <img src="img/home/emoji-005.png" class="emoji-05 animated " id="emoji-05" alt="">
            <img src="img/home/emoji-006.png" class="emoji-06 animated " id="emoji-06" alt="">
        </div>
    </div>
</div>

<svg width="100%" height="100%" class="pol-1" >
  <polygon points="0,0 3500,225 0,225"/>
</svg>
<div class="txt_nuestros_clientes">
INCREMENTA TUS SEGUIDORES
<p> NUESTROS CLIENTES YA LO HAN COMPROBADO</p>
 </div>
<div class="container-fluid">
    <div class="row marcas">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="marcas">
            <!-- marcas -->
            <ul class="bxslider">
              <li><img src="img/clientes/001.png" alt=""></li>
              <li><img src="img/clientes/002.png" alt=""></li>
              <li><img src="img/clientes/003.png" alt=""></li>
              <li><img src="img/clientes/004.png" alt=""></li>
              <li><img src="img/clientes/005.png" alt=""></li>
              <li><img src="img/clientes/006.png" alt=""></li>
              <li><img src="img/clientes/007.png" alt=""></li>
              <li><img src="img/clientes/008.png" alt=""></li>
              <li><img src="img/clientes/009.png" alt=""></li>
              <li><img src="img/clientes/010.png" alt=""></li>
              <li><img src="img/clientes/011.png" alt=""></li>
              <li><img src="img/clientes/012.png" alt=""></li>
              <li><img src="img/clientes/013.png" alt=""></li>
              <li><img src="img/clientes/014.png" alt=""></li>
              <li><img src="img/clientes/015.png" alt=""></li>
              <li><img src="img/clientes/016.png" alt=""></li>
          </ul>
      </div>
  </div>
</div>




<div class="container-fluid">
    <div class="row blog-items" >    
        <?php



        if ($sqld = mysqli_query($con, "SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, U.id AS id_autor, C.id AS idCat, U.nombre AS usuario, C.nombre AS nombreCat FROM blog AS B 
            LEFT OUTER JOIN user AS U ON B.id_autor=U.id
            JOIN categorias AS C ON B.id_categoria=C.id
            WHERE B.activo=1 ORDER BY B.fecha DESC LIMIT 0,3")) {

            if(mysqli_num_rows($sqld) == 0){
                echo "No existen registros disponibles";
            }else{

                while($rowD = mysqli_fetch_assoc($sqld)) {

                    // echo "
                    // <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 animated' id='itBlog'>
                    // <a href='blog.php?id=".$rowD["id_entrada"]."'><img src='blog/".$rowD["id_entrada"].".jpg' class='img-rounded img-responsive' alt='".$rowD["title"]."'></a>
                    // <div class='row'>
                    // <div class='col-xs-4 col-sm-4 col-md-4 col-lg-2'>
                    // <br/>
                    // <span class='autor'><img src='image/img-profile/".$rowD["id_autor"].".jpg' class='center-block img-responsive img-circle' /></span>
                    // </div>
                    // <div class='col-xs-8 col-sm-8 col-md-8 col-lg-10'>
                    // <h3><a href='blog.php?id=".$rowD["id_entrada"]."'>".$rowD["title"]."</a></h3>
                    // <p><span class='intro'>".$rowD["intro"]."</span></p>

                    // <span class='fecha'>".$rowD["fecha"]."</span> -
                    // <span class='categoria'></span> ".$rowD["categoria"]."<br/> - 
                    // <span class='autor'> Escrito por: ".$rowD["usuario"]."</span>


                    // </div>
                    // </div>
                    // ";
                    // echo "</div>";
                }
            }
               //mysql_free_result($sql);
        }
        ?>

    </div> 
</div>


<img class="boton_subir_inicio" src="img/button-round-dark-arrow-up-icon.png">
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



<!-- 
<footer>
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                

                
            </div>

        <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <br/><br/>
                    <h4 class="sitemap">Site Map</h4>

                    <ul class="ft-site">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <img src="img/log-creactiv-ft.png" class="ft-logo" alt="">
                      
                </div>
        </div>

    </div>
</footer>
-->




<script src="js/jquery.min.js"></script>

<!-- Maps API Javascript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk"
type="text/javascript"></script>
<script src="js/mapa-min.js"></script>

<div id="mapa" class="map"></div>
<script src="js/menu.js"></script>

<script>
    var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 2000}});
    // build scene
    new ScrollMagic.Scene({triggerElement: "#emoji-06"})      
    .setClassToggle("#emoji-01", "bounceIn") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#movil"})      
    .setClassToggle("#emoji-02", "fadeOutUp") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#emoji-06"})
    .setClassToggle("#emoji-03", "bounceInUp") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#d1"})
    .setClassToggle("#emoji-04", "fadeOutUp") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#emoji-04"})
    .setClassToggle("#emoji-05", "zoomIn") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#emoji-01"}) 
    .setClassToggle("#emoji-06", "bounceIn") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#marcas"}) 
    .setClassToggle("#itBlog", "fadeInUp") // add class toggle  fadeOutUp
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);
    
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>

</body>
</html>