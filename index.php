
<?php
include("conexion.php");
$sql=mysqli_query($con,"SELECT p.id,p.id_entrada,p.title,p.img,p.img1,p.img2,p.img3,p.descort,p.desclarge,p.activo,p.facebook,p.twitter,p.youtube,p.google
  from (((portafolio as p left outer join portafolio_servicios as o
  on id_portafolio=p.id) left outer join servicios as s on o.id_servicios=s.id) left outer join categoria_servicios as c on s.id_categoria_servicios=c.id) where p.activo=1 group by p.title  order by title ASC LIMIT 4" );
?>
<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Somos una empresa mexicana especializada en brindar servicios de Diseño Gráfico, Imagen, Publicidad y MKT Digital, de una forma creativa e innovadora">
    <meta name="keywords" content="Agencia de publicidad, diseño, marketing digital, branding, imagen corporativa, fotografía, multimedia, pantallas interactivas, producción de video, posicionamiento SEO, logotipos">
    <meta name="author" content="Creactiv Media">
    <title>CreActiv Media</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/carousel_portafolio_inicio.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/modal_animate.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- <script src="scrollmagic/minified/ScrollMagic.min.js"></script> -->
    <!-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script> -->
    <script src="scrollmagic/minified/plugins/animation.gsap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>


    <!--<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
    <script src="scrollmagic/minified/plugins/debug.addIndicators.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/Slider.css"> -->

    <link rel="stylesheet" type="text/css" href="css/map.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cubo.css">

 <!-- <link rel="stylesheet" type="text/css" href="css/autoplay_carousel.css"> -->
   <!-- PRELOADER -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <link rel="stylesheet" type="text/css" href="css/flexel/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- FIN PRELOADER -->

    <link rel="stylesheet" type="text/css" href="css/contador_seguidores.css">
    <script type="text/javascript" src="js/contador_seguidores.js"></script>
    <link rel="stylesheet" src="js/jquery.bxslider/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script>
        $(document).ready(function(){
          $('.bxslider').bxSlider({
            auto: true,
            minSlides: 2,
            maxSlides: 6,
            slideWidth: 300,
            slideMargin: 20,
            pager: false,
            autoControls: false,
            hideControlOnEnd: true,
            infiniteLoop: true,
            controls: false
        });
      });
    </script>
</head>
<body id="top">
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
   <!--  <script>
        new WOW().init({
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        });
    </script> -->
    <script>
    // init controller
    var controller = new ScrollMagic.Controller();
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
                        <p class="title-men"><a href="index#nosotros">NOSOTROS</a></p>
                    </div>
                    <div class="cont3">
                        <p class="title-men"><a href="index#seccion_servicios">SERVICIOS</a></p>
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

<!-- CARRUSEL INICIO -->
<!-- <div class="sombra_transparente"></div> -->
<section class="seccion_inicio">
   <!--  <video class="video_inicio center-block fondocss"  loop="loop" autoplay="autoplay">
        <source src="video/fondo_inicio.mp4" type="video/mp4">
    </video> -->

    <video class="video_inicio center-block fondocss" autoplay="" muted="" loop="" id="myVideo">
            <source src="video/fondo_inicio.mp4" type="video/mp4">
        </video>
</section>


<section id="seccion_servicios" >
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo" >
        <b>NUESTROS</b> SERVICIOS
        <br><br><br>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="contendor_servicios_gris">
            <div class="contenedor_servicio-w col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <a data-toggle="modal" href='#modal_id_5'><img src="img/servicios/DW.png">
                <p><font color="black"><strong>DISEÑO WEB</strong></font></p></a>
            </div>
            <div class="contenedor_servicio-w col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <a data-toggle="modal" href='#modal_id_2'><img src="img/servicios/MD.png">
                <p><font color="black"><strong>MARKETING DIGITAL</strong></font></p></a>
            </div>
            <div class="contenedor_servicio-w col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <a data-toggle="modal" href='#modal_id_1'><img src="img/servicios/M.png">
                <p><font color="black"><strong>MULTIMEDIA</strong></font></p></a>
            </div>
            <div class="contenedor_servicio col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <a data-toggle="modal" href='#modal_id_3'><img src="img/servicios/IC.png">
                <p><font color="black"><strong>IDENTIDAD CORPORATIVA</strong></font></p></a>
            </div>
            <div class="contenedor_servicio col-xs-12 col-sm-12 col-md-6 col-lg-2">
                <a data-toggle="modal" href='#modal_id_6'><img src="img/servicios/E.png">
                <p><font color="black"><strong>EDITORIAL</strong></font></p></a>
            </div>
            </div>
        </div>
    </div>
</section>
<section id="servicio_destacado">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo" >
        <b>SERVICIO</b> DESTACADO
    </div>
    <div class="contenedor_servicio_destacado col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
        <img src="img/servicios/REDES SOCIALES.png">
        <p>REDES <strong>SOCIALES</strong></p>
    </div>
</section>

<!-- MODAL CONTENIDO -->
<div class="modal fade" id="modal_id_1"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <center><h4 class="modal-title">MULTIMEDIA</h4>
                <img src="img/servicios/M.png"></center>

            </div>
            <div class="modal-body" >
                <p><img class="icono_cubo" src="img/icono_cubo2.png">Producción y edición de video<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Fotografía Comercial e Institucional<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Animación Digital</p>

                <h3>¿Tienes dudas de este servicio?</h3>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</a>
                <a class="btn btn-info btn-sm" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_id_2"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <center><h4 class="modal-title">MARKETING DIGITAL</h4></h4>
                <img src="img/servicios/MD.png"></center>

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
                <a class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</a>
                <a class="btn btn-info btn-sm" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_id_3"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <center><h4 class="modal-title">IDENTIDAD</h4>
                <img src="img/servicios/IC.png"></center>


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
                <a class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</a>
                <a class="btn btn-info btn-sm" href="contacto.php">Contactanos</a>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
                <center><h4 class="modal-title">DISEÑO WEB</h4>
                <img src="img/servicios/DW.png"></center>

            </div>

            <div class="modal-body" >
                <p>Desarrollamos diseño de sitios web totalemente responsivos, pensando en su adaptabilidad con tablets, laptops o smartphones. Buscamos reflejar la personalidad de tu empresa en cada diseño.</p>

                <p><img class="icono_cubo" src="img/icono_cubo2.png">Diseño de sitios<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">E-commerce <a href="portafolio?portafolio_por_categoria=16">ver proyectos en el portafolio</a><br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Hosting<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">Posicionamiento<br>
                   <img class="icono_cubo" src="img/icono_cubo2.png">SEM/SEO</p>


                <h3>¿Te interesa este servicio?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                <a class="btn btn-info btn-sm" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_id_6"  data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <center><h4 class="modal-title">EDITORIAL</h4>
                <img src="img/servicios/E.png"></center>

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
                <a class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</a>
                <a class="btn btn-info btn-sm" href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
</div>

<section id="seccion_portafolio">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo" >
        <b>PORTAFOLIO</b>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!--<div id="search" style="display:none;"></div>-->
            <div class="contenedor_portafolio_indidual">
            <div style="display: inherit;" class="content" >

                <div> <?php
                   $servicios_individuales=mysqli_query($con,"SELECT * from servicios");
                        foreach ($servicios_individuales as $servicio_name){
                    }?>
                 </div>
            <?php

                if($sql){
                        if(mysqli_num_rows($sql) == 0){
                        echo "<div class='browser_width colelem' id='u2258-bw'>
                        No existen registros disponibles</div>";
                        }else{
                            while($res= mysqli_fetch_assoc($sql)){
                            ?>

                <div  class="grid">
                    <figure class="effect-marley">

                        <?php

                            echo '<img src="admin/'.$res["img1"].'" class="img-responsive" width="auto" heigth="auto">';
                            ?>
                       <!--  <figcaption>
                            <?php
                                // echo '<h2>'.$res["title"].'</h2>';
                            ?>
                            <div>
                            <?php

                            // echo '<p> '.utf8_encode($res["descort"]).' </p>';

                             ?>
                            </div>
                            <a href="#<?php echo 'modal-id-'.$res['id']; ?>" class="" data-toggle="modal" data-target="#<?php echo 'modal-id-'.$res['id']; ?>"></a>
                        </figcaption> -->
                    </figure>
                </div>

                    <div class="modal fade" id="<?php echo 'modal-id-'.$res['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="Portafolio" aria-hidden="true">
                            <div class="modal-dialog"  data-dismiss="modal">
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
                                    <!--<div class="modal-body" style="padding:0px 0px;">   -->
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
    </div>  
  
</section>

<section id="Clientes">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo" >
        <b>CLIENTES</b> SATISFECHOS
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
</section>
<footer id="footer">
    <div class="container-fluid">
    <div class="row">
        <div class="titulo_footer">
        <h1>¡Hola!</h1>
        <h3>Déjanos Ayudarte.</h3>
        </div>

        <!--============================
                     FORMULARIO
        =============================== -->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-offset-1 formulario_cantactos">
            <div class="form">
            <form name="index" action="envio_correo.php" method="POST">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 primer_form">
                     <!-- NOMBRE -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/nombre.png"></div>
                        <input name="Nombre" class="form-control input-md" id="nombre" placeholder="Nombre/Apellidos" type="text">
                    </div>
                     <!-- EMPRESA -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/empresa.png"></div>
                        <input name="Empresa" class="form-control input-md" id="empresa" placeholder="Empresa" type="text">
                    </div>
                     <!-- TELEFONO -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/telefono.png"></div>
                        <input name="Telefono" class="form-control input-md" id="telefono" placeholder="Teléfono fijo" type="tel">
                    </div>
                     <!-- MOVIL -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/movil.png"></div>
                        <input name="Movil" class="form-control input-md" id="num_movil" placeholder="Móvil" type="tel">
                    </div>
                    <!-- CORREO -->
                    <div class="form-group col-md-12 input_individual">
                        <div class="contedor_img"><img src="img/iconos/email.png"></div>
                        <input name="Correo" class="form-control input-md"  id="correo" placeholder="Email" type="email">
                    </div>
                </div>
                <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6  segundo_form">
                    <!-- MENSAJE -->
                    <div class="form-group col-md-12">
                        <textarea name="Mensaje" class="form-control input-md"  id="mensaje" rows="3" data-rule="required" placeholder="Mensaje"></textarea>
                    </div>
                       <!-- ASUNTO -->
                    <div class="form-group col-md-12">
                        <select name="Asunto" id="asunto" class="form-control input-md" required="">
                          <option ><strong>Estoy Interesado en contratar:</strong></option>
                                <option value="Servicios Web">-Servicios Web</option>
                                <option value="Marketing Digital">- Marketing Digital</option>
                                <option value="Servicios Multimedia">-Servicios Multimedia</option>
                                <option value="Identidad corporativa">-Identidad corporativa</option>
                                <option value="Servicios Editoriales">-Servicios Editoriales</option>
                                <option value="Redes sociales">-Redes sociales</option>
                        </select>
                    </div>
                    <!-- CHECKBOX CAPTCHA -->
                    <div class="form-group col-md-12" >
                       <div class="g-recaptcha" data-sitekey="6Le7TXEUAAAAAHbrmJLJGa7Gh420i5Ssqf0QNq8f"></div>
                    </div>
                     <!-- BTN ENVIAR -->
                    <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default boton-contacto"><strong>Enviar</strong></button>
                    </div>
                </div>
            </form>
            </div>
            <script src="js/contacto.js"></script>
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
            z-index: 4px;
            background: #000;
            color:#fff;
            padding: 9px 12px;
            border-radius: 50%;

        }
        .to-top:hover{
            background: #fff;
            color:#000;
        }
    </style>

<script src="js/jquery.min.js"></script>
<script src="js/flexisel.js" ></script>

<!-- Maps API Javascript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk"
type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/mapa-min.js"></script>

<!-- <div id="mapa" class="map"></div> -->
<script src="js/menu.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var offset = 250;
        var duration = 500;

        $(window).scroll(function(){
            if($(this).scrollTop()> offset){
                $('.to-top').fadeIn(duration);
            }else{
                $('.to-top').fadeOut(duration);

            }
        });
        $('.to-top').click(function(){
            $('body').animate({scrollTop:0},duration);
        })
  


    // CASOUSEL PORTAFOLIOS
  $('#CarouselPortafolio').carousel({
  interval: 10000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
      });

</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/flexisel.js" ></script>
<script src="js/jquery.flexisel.js "></script>
<!-- <script src="js/funciones.js"></script> -->

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        