<?php
include("conexion.php");





$_GET['portafolio_por_categoria'] == 0;
 //GRUPO PRODUCTOS( )
if($_GET['portafolio_por_categoria'] == -1 ){
   $sql=mysqli_query($con,"SELECT p.id,p.id_entrada,p.title,p.img,p.img1,p.img2,p.img3,p.descort,p.desclarge,p.activo,p.facebook,p.twitter,p.youtube,p.google
  from (((portafolio as p left outer join portafolio_servicios as o
  on id_portafolio=p.id) left outer join servicios as s on o.id_servicios=s.id) left outer join categoria_servicios as c on s.id_categoria_servicios=c.id) where p.activo='1' group by p.title order by title ASC");
}
else {
    $sql=mysqli_query($con,"SELECT p.id,p.id_entrada,p.title,p.img,p.img1,p.img2,p.img3,p.descort,p.desclarge,p.activo,p.facebook,p.twitter,p.youtube,p.google
  from (((portafolio as p left outer join portafolio_servicios as o
  on id_portafolio=p.id) left outer join servicios as s on o.id_servicios=s.id) left outer join categoria_servicios as c on s.id_categoria_servicios=c.id)  where p.activo='1' and s.id='".$_GET["portafolio_por_categoria"]."' group by p.title order by title ASC");
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
                <li><a href="index#nosotros">NOSOTROS</a></li>
                <li><a href="index#seccion_servicios">SERVICIOS</a></li>
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
           </li>
           <?php $contador +=1; } ?>

       </ul>

			<div class="content row" >
		      <div class="grid">
            <?php
     				if($sql){
     						if(mysqli_num_rows($sql) == 0){
     			            echo "<div class='browser_width colelem' id='u2258-bw'>
     			            No existen registros disponibles</div>";
     			            }else{
     	        				while($res= mysqli_fetch_assoc($sql)){
             					?>
            <div class="cliente-card">
              <div class="logo-cliente">
                <?php
    	            	echo '<img class="imagen" src="admin/'.$res["img"].'">';
            		?>
              </div>
              <button class="btn-ver-mas" type="button" name="button">Ver más</button>
            </div>
          <?php }?>
          <?php }?>
        <?php }?>
          </div>
			</div>
			<!-- cierre htmml -->

	</div>
</div>
<!-- footer home html -->
<footer id="footer">
    <div class="container-fluid">
    <div class="row">
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
