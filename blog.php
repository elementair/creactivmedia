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
<link rel="stylesheet" href="css/blog1.css">

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

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1891108381153461',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
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

	 <!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3opI8bRHGhZc4H7VZBgPzdZNdIdPcrE3";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->


<link rel="stylesheet" src="js/jquery.bxslider/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="js/jquery.scrollUp.js"></script>

<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
<style type="text/css">
	.fodo_transparente_blog{
        width:100%;
        height: 40%;
        position: absolute;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(104,143,5,0));
        z-index: 1;

     }
    .to-top{
        position: fixed;
        bottom: 40px;
        right: 20px;
        background: #000;
        color:#fff;
        padding: 12px 12px;
        border-radius: 50%;
        z-index: 10;

    }
    .to-top:hover{
        background: #fff;
        color:#000;
    }
</style>


</head>


<body id="top">

<div id="fb-root"></div>
<script type="text/javascript">
    $(document).ready(function(){
        var offset = 200;
        var duration = 500;

      $(window).scroll(function(){
            if($(this).scrollTop()> offset){
                $('.to-top').fadeIn(duration);
                $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.9)");
                $(".btn-toggle").css("border-bottom", "2px solid");
                $(".btn-toggle").css("border-bottom-color", "#fff");
            }else{
                $('.to-top').fadeOut(duration);
                $(".btn-toggle").css("background", "#16171900");
                $(".btn-toggle").css("border-bottom", "0px solid");
                $(".btn-toggle").css("border-bottom-color", "#fff");

            }
        });
        $('.to-top').click(function(){
            $('body').animate({scrollTop:0},duration);
        })
    });
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=364692143850";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
                      	  f("cont-categoria").fadeOut("slow");
                          f("#search").fadeIn(500).html(data);
                      }
                    });
              });
        });
	</script>

	<script>
		var j = jQuery.noConflict();
	    j(document).ready(function(){
	      j('.bxslider').bxSlider({
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
                        <p class="title-men"><a href="index.php#nosotros">SERVICIOS</a></p>
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
                    	<!-- 
                        <form action="blog.php" method="get">
                            <input type="text" class="search-nav" name="search" id="_search" placeholder=" Buscar un articulo en el blog...">
                            <button type="submit" class="btn-search" id="" acceskey="intro">Buscar</button>
                        </form>
                   		-->
                    </div>
          </div>
      </div>
  </div>
</section>
</header>

<div class="btn-search-blog">
  <input type="text" class="" name="search" id="_search" placeholder="  Buscar un artículo en el blog...">
  <span class="input-group-btn">
    <button type="button" class="" id="buscar" acceskey="intro">Buscar</button>
  </span>
</div><!-- /input-group -->

<div class="container-fluid portada-destacado">
	<div class="row">
		
		<div class="log-movil">
			<a href="blog.php"><img src="image/logo-creactivmedia-blog.png" class="logo-blog" alt="CreActiv Media"></a>
		</div>
		<div class="slogan-movil">
			<img src="image/slogan-creactivmedia.png" class="logo-slogan" alt="Tus ideas, nuestra pasión.">
		</div>

			
		<div class="destacado">
			<div class="dest-box">
			<?php
				if ($sqld = mysqli_query($con, "SELECT id, id_entrada, title, intro, fecha FROM blog WHERE activo=1 ORDER BY id DESC LIMIT 0,1")) {

						if(mysqli_num_rows($sqld) == 0){
						echo "No existen registros disponibles";
						}else{

						      while($rowD = mysqli_fetch_assoc($sqld)) {
						      	echo "<div>
										<a href='blog.php?id=".$rowD["id_entrada"]."'><img src='blog/".$rowD["id_entrada"].".jpg' class='dest-img img-responsive' alt='".$rowD["title"]."'></a>
										</div>
										<div class='dest-titles'>
											<h3>".$rowD["title"]."</h3>
											<p><span class='fecha'>".$rowD["fecha"]."</span>  ".$rowD["intro"]."</p>
											<a href='blog.php?id=".$rowD["id_entrada"]."' class='dest-btn'>Más Información</a>
										</div>";
								}
						}
				       //mysql_free_result($sql);
				}
			?>
			</div>
		</div>


		<div class="cont-autor">
			<?php
			if ($sqlU = mysqli_query($con, "SELECT id, user, nombre, activo, img, puesto FROM user WHERE NOT id=1 ORDER BY id DESC")) {
				
				echo "<ul class='bxslider'>";
				while($row = mysqli_fetch_assoc($sqlU)) {
					echo "<li>";
					echo "<a href='blog.php?autor=".$row["id"]."'><img src='image/img-profile/".$row["img"].".jpg' class='img-circle img-autor' width='100px' height='100px' alt=''></a><p class='p-autor'>";
					echo $row["nombre"];
					echo "</p></li>";
				}
				echo "</ul>";
			}
			?>

			
		</div>

	</div>
</div>






<div class="container-fluid">
	<div class="row">
		<div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 clearPad">

		<br/><br/>
<div id="search" style="display:none;"></div>
<!-- cierre htmml -->
<?php






// consulta search
if(isset($_GET["search"])){

						//consulta search 
							$search=$_GET["search"];

							if($search=="" || $search==NULL){  

								echo "<h3>No existen elementos para buscar</h3><br/><br/>";

							}else{
								$search=urldecode($_GET["search"]);
								$search=strip_tags(html_entity_decode($search));

								if ($sql2 = mysqli_query($con, "

									SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, U.id, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B 
									LEFT OUTER JOIN user AS U ON B.id_autor=U.id
									JOIN categorias AS C ON B.id_categoria=C.id
									WHERE articulo LIKE '_%".addslashes($search)."_%' OR title LIKE '_%".addslashes($search)."_%' OR intro LIKE '_%".addslashes($search)."_%' OR C.nombre LIKE '_%".addslashes($search)."_%' AND B.activo=1 ORDER BY fecha ASC LIMIT 1,500
									")) {
									
									
											    		//echo "<strong>Notas Relacionadas:</strong><br/><br/>";
									if(mysqli_num_rows($sql2) == 0){
										echo "<p>No hay notas relacionadas con: <strong>".$search."</strong></p>";
									}else{ 

										$numRes=mysqli_num_rows($sql2);
										echo "<div class='cont-categoria'>";
										echo "<div class=''><h3> Resultados encontrados: ".$numRes."</h3></div>";

										while($row = mysqli_fetch_assoc($sql2)) {		

												      		$marcadorTitle=str_replace($search,"<span class='marcador'>".$search."</span>",$row["title"]);
												      		$marcadorIntro=str_replace($search,"<span class='marcador'>".$search."</span>",$row["intro"]);

												      		echo "<div class='item'>
												      		<a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' ><img src='blog/".$row["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
												      		<p class='cat'><a href='blog.php?categoria=".$row["idCat"]."' target='_self'>".$row["nombreCat"]."</a> - ".$row["fecha"]." - Escrito por: ".$row["nombre"]."</p>
												      		<h2><a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' >".$marcadorTitle."</a></h2>
												      		<p class='desc-corta'> ".$marcadorIntro."</p>
												      		</div>";   
												      	}

												      	echo "</div>";
												      }


												  }else{
												  	echo  "<strong>".$search."</strong> la consulta no pudo ser procesada.";
												  }


									}

												

						
}elseif(isset($_GET["autor"])){


					//consulta por Autor
					if(isset($_GET["autor"])){

						$autor=$_GET["autor"];

						if($autor=="" || $autor==NULL){

							echo "<h3>No existen elementos para mostrar</h3><br/><br/>";

						}else{
							$autor=urldecode($_GET["autor"]);
							$autor=strip_tags(html_entity_decode($autor));

							if ($sql3 = mysqli_query($con, "

							SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, U.id, C.id AS idCat, U.nombre AS usuario, C.nombre AS nombreCat FROM blog AS B 
							LEFT OUTER JOIN user AS U ON B.id_autor=U.id
							JOIN categorias AS C ON B.id_categoria=C.id
							WHERE U.id=".$autor." AND B.activo=1 ORDER BY B.fecha DESC LIMIT 1,500")) {
								
								
										    		//echo "<strong>Notas Relacionadas:</strong><br/><br/>";
								if(mysqli_num_rows($sql3) == 0){
									echo "<h3>No hay notas relacionadas con el autor seleccionado. <strong></strong></h3><br/><br/>";
								}else{ 
									
									$numRes=mysqli_num_rows($sql3);


									echo "<div class='cont-categoria' id='_cont-items'>";
									echo "<div class='center-block'><h3> ".$numRes." Resultados encontrados por autor </h3></div><br/><br/>";

									while($row = mysqli_fetch_assoc($sql3)) {
											      		echo "<div class='item'>
											      		<a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' ><img src='blog/".$row["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
											      		<p class='cat'><a href='blog.php?categoria=".$row["idCat"]."' target='_self'>".$row["nombreCat"]."</a> - ".$row["fecha"]." - Escrito por: ".$row["nombre"]."</p>
											      		<h2><a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' >".$row["title"]."</a></h2>
											      		<p class='desc-corta'>".$row["intro"]."</p>
											      		</div>";
											      	}
											      	echo "</div>";
											      }

											  }else{
											  	echo  "<strong>".$autor."</strong> la consulta no pudo ser procesada.";
											  }
									}

											

					}



}elseif(isset($_GET["categoria"])){


	$categoria=$_GET["categoria"];
	//echo "resultados de categoria";
 
					//consulta por Autor
					if(isset($_GET["categoria"])){

						$categoria=$_GET["categoria"];

						if($categoria=="" || $categoria==NULL){

							echo "<h3>No existen elementos para mostrar</h3><br/><br/   >";

						}else{
							$categoria=urldecode($_GET["categoria"]);
							$categoria=strip_tags(html_entity_decode($categoria));

							if ($sql3 = mysqli_query($con, "   
							SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.id_categoria, B.activo, U.nombre, U.id, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B 
							LEFT OUTER JOIN user AS U ON B.id_autor=U.id
							JOIN categorias AS C ON B.id_categoria=C.id
							WHERE C.id=".$categoria." AND B.activo=1 ORDER BY B.fecha DESC" )) {
								
								
						        //echo "<strong>Notas Relacionadas:</strong><br/><br/>";
								if(mysqli_num_rows($sql3) == 0){
									echo "<h3>No hay notas relacionadas con: <strong>".$categoria."</strong></h3><br/><br/>";
								}else{

									$numRes=mysqli_num_rows($sql3);
									echo "<div class='cont-categoria' id='_cont-items'>";
									echo "<div class=''><h3> ".$numRes." Resultados encontrados por categoría.</h3></div>";

									while($row = mysqli_fetch_assoc($sql3)) {		
											      		/*
											      		echo "<div class='box-item'>";
											      		echo "<a href='blog.php?id=".$row["id_entrada"]."'><img src='blog/".$row["id_entrada"].".jpg' alt='' class='img-cat'></a>";
											      		echo "<p><a href='blog.php?id=".$row["id_entrada"]."'>".$row["title"]."</a></p></a>";
											      		echo "</div>";
											      		*/

											      		//$marcadorTitle=str_replace($categoria,"<span class='marcador'>".$categoria."</span>",$row["title"]);
											      		//$marcadorIntro=str_replace($categoria,"<span class='marcador'>".$categoria."</span>",$row["intro"]);
											      			$post=$row["intro"];
											      		echo "<div class='item'>
											      		<a href='blog.php?id=".$row["id_entrada"]."' class='' id='' ><img src='blog/".$row["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
											      		<p class='cat'>".$row["nombreCat"]."  - ".$row["fecha"]." - Escrito por: ".$row["nombre"]."</p>
											      		<h2><a href='blog.php?id=".$row["id_entrada"]."' class='link' id='' >".$row["title"]."</a></h2>
											      		<p class='desc-corta'>".$post."</p>
											      		</div>";   
											      	}

											      	echo "</div>";
											      }


											  }else{
											  	echo  "<strong>".$categoria."</strong> la consulta no pudo ser procesada.";
											  }


											}

											

					}


}else{
								if ($sql = mysqli_query($con, "
									SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, B.activo, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B
									LEFT OUTER JOIN user AS U ON B.id_autor=U.id 
									JOIN categorias AS C ON B.id_categoria=C.id
									WHERE B.activo=1 ORDER BY B.fecha DESC LIMIT 1,500")) {
						        
						            if(mysqli_num_rows($sql) == 0){
						            echo "<div class='browser_width colelem' id='u2258-bw'>
						            No existen registros disponibles</div>";
						            }else{

						            	echo "<div class='' id='_cont-items'>";
						                  while($row0 = mysqli_fetch_assoc($sql)) {

						                    $post=$row0["intro"];
						                    echo "<div class='item'>
						                    		
													<a href='blog.php?id=".$row0["id_entrada"]."' class='' id='' ><img src='blog/".$row0["id_entrada"].".jpg' class='img-rounded img-responsive'  alt='' /></a>
													<p class='cat'><a href='blog.php?categoria=".$row0["idCat"]."' target='_self'>".$row0["nombreCat"]."</a> - ".$row0["fecha"]." - Escrito por: ".$row0["nombre"]."</p>
													<h2><a href='blog.php?id=".$row0["id_entrada"]."' class='link' id='' >".$row0["title"]."</a></h2>
													<p class='desc-corta'>".$post."</p>
													
											    </div>";
						 				}
						              	echo "</div>";
						            }
						               //mysql_free_result($sql);
						        }
}


?>



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
	<div class=" row">
	    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<br/><br/>
		    <h4 class="sitemap">Site Map</h4>

		    <ul class="ft-site">
		    	<li><a href="#">Identidad</a></li>
		    	<li><a href="digital.php">Mkt Digital</a></li>
		    	<li><a href="#">Multimedia</a></li>
		    	<li><a href="#">Editorial</a></li>
		    	<li><a href="diseno.php">Diseño Web</a></li>
		    	<li><a href="#">Blog</a></li>
		    	<li><a href="#">Pantallas Interactivas</a></li>
		    	<li><a href="Portafolio.php">Portafolio</a></li>
		    	<li><a href="#">Contacto</a></li>
		    </ul>

	    </div>

	    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

		  <img src="img/log-creactiv-ft.png" class="ft-logo" alt="">

		  
		
	    </div>
	</div>
	
</div>
	<div class="copy">© COPYRIGHT CREACTIV 2016, TODOS LOS DERECHOS RESERVADOS.</div>
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
}else{
?>
<html lang="es-Mx"><!-- html entrada blog -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
<?php
if ($sqlDes = mysqli_query($con,"SELECT id_entrada, title, intro, tags, id_autor FROM blog WHERE id_entrada='".$_GET["id"]."' AND activo=1 ")) {

	while($row = mysqli_fetch_assoc($sqlDes)) {
echo "<meta name=\"description\" content=\"".$row["intro"]."\">"."\n";
echo "<meta name=\"keywords\" content=\"".$row["tags"]."\">"."\n";
echo "<meta name=\"author\" content=\"Creactiv Media - ".$row["id_autor"]."\">"."\n";
echo "<title>".$row["title"]."</title>"."\n";

echo "<!-- sample fb meta -->"."\n";
echo "<meta property='og:title' content='".$row["title"]."' />"."\n";
echo "<meta property='og:type' content='website' />"."\n";
echo "<meta property='og:url' content='http://www.creactivmedia.com.mx/blog.php?id=".$row["id_entrada"]."' />"."\n";
echo "<meta property='og:image' content='http://www.creactivmedia.com.mx/blog/".$row["id_entrada"].".jpg' />"."\n";
echo "<meta property='og:description' content='".$row["intro"].".'/>"."\n";

echo "<!-- sample twitter meta -->"."\n";
echo "<meta name='twitter:card' content='summary_large_image'>"."\n";
echo "<meta name='twitter:site' content='@CreActivMedia'>"."\n";
echo "<meta name='twitter:url' content='http://www.creactivmedia.com.mx/blog.php?id=".$row["id_entrada"]."'>"."\n";
echo "<meta name='twitter:creator' content='@CreActivMedia'>"."\n";
echo "<meta name='twitter:title' content='".$row["title"]."'>"."\n";
echo "<meta name='twitter:description' content='".$row["intro"]."'>"."\n";
echo "<meta name='twitter:image' content='http://www.creactivmedia.com.mx/blog/".$row["id_entrada"].".jpg'>"."\n";

	}

}else{
echo "<meta name='description' content=''>";
echo "<meta name='keywords' content=''>";
echo "<meta name='author' content='Creactiv Media'>";
echo "<title>CreActiv Media Diseño, Web, Mkt Digital</title>";
}
?>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600italic,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/blog1.css">
<link rel="stylesheet" href="css/rrssb.css">
<link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/jquery.bxslider/jquery.bxslider.js"></script>.
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


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1891108381153461',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


  <link rel="icon" type="image/png" href="http://kurtnoble.com/labs/rrssb/media/favicon.png" />

  <!-- Stylesheet required to power RRSSB. Copy this css file to your header or merge directly into your css -->

<style type="text/css">
	body {
        margin-top: -20px;
    }

</style>
	<script type="text/javascript">
	    $(document).ready(function(){
	        var offset = 200;
	        var duration = 500;

	      $(window).scroll(function(){
	            if($(this).scrollTop()> offset){
	                $('.to-top').fadeIn(duration);
	                $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.9)");
	                $(".btn-toggle").css("border-bottom", "2px solid");
	                $(".btn-toggle").css("border-bottom-color", "#fff");
	            }else{
	                $('.to-top').fadeOut(duration);
	                $(".btn-toggle").css("background", "#16171900");
	                $(".btn-toggle").css("border-bottom", "0px solid");
	                $(".btn-toggle").css("border-bottom-color", "#fff");

	            }
	        });
	        $('.to-top').click(function(){
	            $('body').animate({scrollTop:0},duration);
	        })
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


	 <!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3opI8bRHGhZc4H7VZBgPzdZNdIdPcrE3";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->

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
					<li><a href="#">Nosotros</a></li>
					<li><a href="#">Servicios</a></li>
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
                            <p class="title-men"><a href="#">NOSOTROS</a></p>
                        </div>
                        <div class="cont3">
                            <p class="title-men"><a href="#">SERVICIOS</a></p>
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



<div class="container-fluid">
	<div class="row">
		    <?php
				if ($sqlDes = mysqli_query($con,"SELECT B.id AS `id`, B.id_entrada AS `id_entrada`, B.title AS `title`, B.articulo AS `articulo`, B.tags AS `tags`, B.categoria AS `categoria`, B.id_autor AS `id_autor`, B.fecha AS `fecha`, 
				    U.nombre AS `nombre`, U.puesto AS `puesto`, U.bio AS `bio`, U.img AS foto

					FROM `blog` AS B 
					LEFT OUTER JOIN `user` AS U ON U.id = B.id_autor WHERE id_entrada='".$_GET["id"]."' AND B.activo=1")) {

					echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 portada'>";
					echo "<div  class='fodo_transparente_blog'></div>";
					while($row = mysqli_fetch_assoc($sqlDes)) {
						    	
					echo "<img src='blog/".$row["id_entrada"].".jpg' class='img-PB' alt=''>";
					echo "<div class='box-title'><h1 class=''>".$row["title"]."</h1><br/>
					<p class='fecha'>".$row["fecha"]."</p><br/></div>";

					echo "</div></div><div class='row'>
						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 colorBlack'>";

							echo "<div class='user'>";
								echo "<a href='blog.php?autor=".$row["id_autor"]."'><img src='image/img-profile/".$row["foto"].".jpg' class='img-circle' alt='' width='100px' height='100px'></a>
								<h4>".$row["nombre"]."</h4>
								<p>".$row["puesto"]."</p>
								";
							echo "</div>";
				}

					echo "<a href='javascript:window.history.back();' class='btn-back'>Regresar</a><br/>
						</div></div>";

				}
			?>
	</div>
</div>






<div class="container-fluid">
	<div class="row">



		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-10">
			<br/><br/>
<?php

$idBlog="";

echo "<div class='nota'>";

if ($sql2 = mysqli_query($con, "SELECT B.id AS `id`, B.id_entrada AS `id_entrada`, B.title AS `title`, B.articulo AS `articulo`, B.tags AS `tags`, B.categoria AS `categoria`, B.id_categoria, B.id_autor AS `id_autor`, B.fecha AS `fecha`, 
    U.nombre AS `nombre`, U.puesto AS `puesto`, U.bio AS `bio`

	FROM `blog` AS B 
	LEFT OUTER JOIN `user` AS U ON U.id = B.id_autor WHERE id_entrada='".$_GET["id"]."' AND B.activo=1 ")) {

if(mysqli_num_rows($sql2) == 0){
echo "
<h1>El item que esta buscando no existe.</h1>
<p><a href='blog.php'>Regresar a la secci&oacute;n de blog.</a></p>";
}else{

  $numComent=mysqli_num_rows($sql2);

      while($row1 = mysqli_fetch_assoc($sql2)) {  

      	$BlogEntrada=$row1["id_entrada"];

        $idBlog=$row1["id"];

			echo " <script>
				      var m = jQuery.noConflict();
				      m(document).ready(function() {
				          m('#comentarios').load('load_comentarios.php?id=".$row1["id"]."');
				        });
				    </script>
			    ";

			echo "
			
			<p class=''>".$row1["articulo"]."</p>

			<div class='perfil'>
			<img src='image/img-profile/".$row1["id_autor"].".jpg' width='100px' height='100px' class='img-responsive' alt=''>
			<h5>".$row1["nombre"]."</h5>
			<p>".$row1["puesto"]."</p>
			<p><em>".$row1["bio"]."</em></p>

			</div>";
?>
<!-- plugin redes-->


<!-- Buttons start here. Copy this ul to your document. -->
 <div class="btnComp">
    <ul class="rrssb-buttons">

      <li class="rrssb-email">
        <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
        <a href="mailto:?subject=<?php echo urldecode($row1["title"]); ?>&amp;body=http://www.creactivmedia.com.mx/blog.php?id=<?php echo $_GET["id"];  ?> ">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg>
          </span>
          <span class="rrssb-text">email</span>
        </a>
      </li>

      <li class="rrssb-facebook">
        <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
              https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
<!-- 
http://www.facebook.com/sharer.php?s=100&p[url]=http://developando.com?s=100&p[title]=Conoce+a+Developando&p[images][0]=http://developando.com/images/developandoLogo.jpeg&p[summary]=Desarrollo+web+y+movil
-->

        <a href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://www.creactivmedia.com.mx/blog.php?id=<?php echo $_GET["id"]; ?>&amp;p[title]=<?php echo $row1["title"]; ?>&amp;p[images][0]=http://www.creactivmedia.com.mx/blog/<?php echo $_GET["id"]; ?>.jpg" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
          </span>
          <span class="rrssb-text">facebook</span>
        </a>
      </li>
     

      <li class="rrssb-twitter">
        <!-- Replace href with your Meta and URL information  -->
        <a href="http://twitter.com/share?via=CreActivMedia" data-via="CreActivMedia"
        class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
          </span>

          <span class="rrssb-text">twitter</span>
        </a>
        
      </li>
      
      
      <li class="rrssb-googleplus">
        <!-- Replace href with your meta and URL information.  -->
        <a href="https://plus.google.com/share?url=<?php echo urldecode($row1["id_entrada"]); ?>%20http://www.creactivmedia.com.mx/blog.php?id=<?php echo urldecode($row1["id_entrada"]); ?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
          <span class="rrssb-text">google+</span>
        </a>
      </li>
     
      
      <li class="rrssb-print">
        <a href="javascript:window.print()">
          <span class="rrssb-icon">
            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          </span>
          <span class="rrssb-text">print</span>
        </a>
      </li>

     

      <li class="rrssb-whatsapp">
        <a href="whatsapp://send?text=http://www.creactivmedia.com.mx/blog.php?id=<?php echo urldecode($row1["id_entrada"]); ?>" data-action="share/whatsapp/share">
        	
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90"><path d="M90 43.84c0 24.214-19.78 43.842-44.182 43.842a44.256 44.256 0 0 1-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 0 1-6.34-22.637C1.635 19.63 21.415 0 45.818 0 70.223 0 90 19.628 90 43.84zM45.818 6.983c-20.484 0-37.146 16.535-37.146 36.86 0 8.064 2.63 15.533 7.076 21.61l-4.64 13.688 14.274-4.537A37.122 37.122 0 0 0 45.82 80.7c20.48 0 37.145-16.533 37.145-36.857S66.3 6.983 45.818 6.983zm22.31 46.956c-.272-.447-.993-.717-2.075-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.36-1.717-.54-2.438.536-.72 1.076-2.797 3.495-3.43 4.212-.632.72-1.263.81-2.347.27-1.082-.536-4.57-1.672-8.708-5.332-3.22-2.848-5.393-6.364-6.025-7.44-.63-1.076-.066-1.657.475-2.192.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.718.182-1.345-.09-1.884-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.793-2.436-1.793-.63 0-1.353-.09-2.075-.09-.722 0-1.896.27-2.89 1.344-.99 1.077-3.788 3.677-3.788 8.964 0 5.288 3.88 10.397 4.422 11.113.54.716 7.49 11.92 18.5 16.223 11.01 4.3 11.01 2.866 12.996 2.686 1.984-.18 6.406-2.6 7.312-5.107.9-2.513.9-4.664.63-5.112z"/></svg>
          </span>
          <span class="rrssb-text">Whatsapp</span>
        </a>
      </li>
    </ul>
</div>
    <!-- Buttons end here -->


<?php
			

		    echo "<br/>";

			echo "<script>
					$(document).ready(function(){
				    $('#item-cat').load('load_categorias.php?cat=".urlencode($row1["id_categoria"])."');
					})
				</script>";

		  echo "<br/><div id='item-cat'>";
		  echo "</div>";

/*

			    $people = $value;
				$newstring= implode("</span><span class='tags'>",$people);
				echo "<span class='tags'>".$newstring."</span>";
       */
      }
  
?>

 <br/><br/>

  <script>
    var m = jQuery.noConflict();

    m(document).ready(function() {
        m('#guardar').click(function(){

             var datos = {
                     "nombre" : m('#_nombre').val(),
                     "idBlog" : m('#_idBlog').val(),
                     "comentario" : m('#_comentario').val()
             };

               m.ajax({
                data: datos,
                url: "procesa-comentario.php",
                type: "POST",
                success: function(res){
                  m('#res-coment').html(res);
                }
              });
        })
    });
  </script>

<br/>



<br/><br/>
<div id="frm">
      <form id="frm-comentarios" role="form">
        <legend>Comentarios</legend>
        <div class="form-group">
          <label for="">Nombre:</label>
          <input type="text" class="form-control" name="nombre" id="_nombre" required="required" placeholder="Escriba su nombre">
        </div>
        <div class="form-group">
          <label for="">Comentario:</label>
          <textarea name="" class="form-control" name="comentario" id="_comentario" rows="3" required="required" placeholder="Escriba un comentario.."></textarea>
        </div>
        <input type="hidden" name="idBlog" id="_idBlog" value="<?php echo $idBlog; ?>" > 
        <button type="button" class="btn btn-primary" id="guardar" >Guardar Comentario</button>
      </form>
</div>
<br/>
<div id="res-coment"></div>
<br/>

<div id="comentarios"></div>

<?php
	   echo "<div class='fb-comments' data-href='http://creactivmedia.com.mx/blog.php?id=".$BlogEntrada."' data-width='100%' data-numposts='10'></div>";
	  }
	       //mysql_free_result($sql2);
	}
	echo "</div>";

?>
<!-- html -->




		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 aslide">
			<br/><br/>

			<h3>Categorías</h3>
			<?php
				if ($sql = mysqli_query($con,"SELECT B.id, B.id_entrada, B.title, B.intro, B.fecha, B.categoria, U.nombre, U.id, U.nombre, C.id AS idCat, C.nombre AS nombreCat FROM blog AS B
							LEFT OUTER JOIN user AS U ON B.id_autor=U.id
							JOIN categorias AS C ON B.id_categoria=C.id
							GROUP BY nombreCat ORDER BY nombreCat ASC ")) {
					echo "<ul class='ulCat'>";
						 while($row = mysqli_fetch_assoc($sql)) {
						 		echo "<li><a href='blog.php?categoria=".$row['idCat']."'>".$row['nombreCat']."</a></li>";
						 }
					echo "</ul>";
				}
			?>
			<br/>
			<h3>Autores</h3>
			<br/>

			<?php
				if ($sql3 = mysqli_query($con,"SELECT id, nombre, img AS foto, puesto FROM user")) {
							echo "<ul class='ulAutor'>";
							 while($row = mysqli_fetch_assoc($sql3)) {
									echo "<li><a href='blog.php?autor=".$row["id"]."'><img src='image/img-profile/".$row["foto"].".jpg' width='100px' height='100px' class='img-circle' alt=''></a>
													<p><span class='nombre'>".$row["nombre"]."</span>
													<br/><span class='puesto'>".$row["puesto"]."</span></p>
													</li>";
						     }
							echo "</ul>";
				  }else{
				  	echo  "<strong></strong> la consulta no pudo ser procesada.";
				  }		
			?>

			<br/>
			<h3>Tags</h3>
			<br/>   


			<?php
				if ($sql3 = mysqli_query($con,"SELECT tags FROM blog WHERE id_entrada='".$_GET["id"]."' ")) {
							
					while($row = mysqli_fetch_assoc($sql3)) {
						$string= $row["tags"];
						$new_array= explode(',',$string);
						foreach($new_array as $value){
						echo "<span class='tags'><a href='blog.php?search=".trim($value)."'>".$value."</a></span>";
						}
					}

				  }else{
				  	echo "<strong></strong> la consulta no pudo ser procesada.";
				  }
			?>

			<br/><br/>
		</div>
	</div>
</div>



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
	<div class=" row">
	    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<br/><br/>
		    <h4 class="sitemap">Site Map</h4>

		    <ul class="ft-site">
		    	<li><a href="#">Identidad</a></li>
		    	<li><a href="digital.php">Mkt Digital</a></li>
		    	<li><a href="#">Multimedia</a></li>
		    	<li><a href="#">Editorial</a></li>
		    	<li><a href="diseno.php">Diseño Web</a></li>
		    	<li><a href="#">Blog</a></li>
		    	<li><a href="#">Pantallas Interactivas</a></li>
		    	<li><a href="Portafolio.php">Portafolio</a></li>
		    	<li><a href="#">Contacto</a></li>
		    </ul>

	    </div>

	    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

		  <img src="img/log-creactiv-ft.png" class="ft-logo" alt="">

		  
		
	    </div>
	</div>
	
</div>
	<div class="copy">© COPYRIGHT CREACTIV 2016, TODOS LOS DERECHOS RESERVADOS.</div>
</footer>
<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
<style type="text/css">
	.fodo_transparente_blog{
        width:100%;
        height: 30%;
        position: absolute;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(104,143,5,0));
        z-index: 1;

     }
    .to-top{
        position: fixed;
        bottom: 40px;
        right: 20px;
        background: #000;
        color:#fff;
        padding: 12px 12px;
        border-radius: 50%;
        z-index: 10;

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery.1.10.2.min.js"><\/script>')
  </script>

  <script src="js/rrssb.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
<!-- cierre html -->
<?php
}
?>