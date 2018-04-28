<?php 
session_start();
if(isset($_SESSION['login'])){
  include("conexion.php");

 //Escribir Asistencia
  date_default_timezone_set('America/Mexico_City');
$fechaAct=date("Y-m-d"); //Fecha Entrada
$horaAct=date("H:i:s"); //hora Entrada
$year=date("Y"); 


//inicializacion de variables
$msj1=FALSE;
$msj2=FALSE;
$msj3=FALSE;
$msj4=FALSE;
$msj5=FALSE;
$msj6=FALSE;
$msj7=FALSE;
$msj8=FALSE;
$msj9=FALSE;
$msj10=FALSE;

$ok1="";
$ok2="";
$ok3=""; //cambio estatus de blog

    //comprobacion de valores recibidos
    if(isset($_GET['ok'])){

      if($_GET['ok']==1){
        $ok1=1;
      }

      if($_GET['ok']==2){
        $ok2=2;
      }

      if($_GET['ok']==3){
        $ok3=3;
      }
    }


    if(isset($_GET['error'])){
      if($_GET['error']=="1"){
        $msj1=TRUE;
      }
      if($_GET['error']=="2"){
        $msj2=TRUE;
      }
      if($_GET['error']=="3"){
        $msj3=TRUE;
      }
      if($_GET['error']=="4"){
        $msj4=TRUE;
      }
      if($_GET['error']=="5"){
        $msj5=TRUE;
      }
      if($_GET['error']=="6"){
        $msj6=TRUE;
      }
      if($_GET['error']=="7"){
        $msj7=TRUE;
      }
      if($_GET['error']=="8"){
        $msj8=TRUE;
      }
      if($_GET['error']=="9"){
        $msj9=TRUE;
      }
      if($_GET['error']=="10"){
        $msj10=TRUE;
      }
      if($_GET['error']=="11"){
        $msj11=TRUE;
      }
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <META HTTP-EQUIV="expires" CONTENT="Sun, 28 Dec 1997 09:32:45 GMT">
      <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Panel Principal</title>

      <!-- Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    body{
      margin: 0px;
      padding: 0px;
    }

    .barra{
      width: 20%;
      min-width: 200px;
      float: left;
      margin: 0px;
      padding: 0px;
      height: 600px;
      background-color: #8CB503;
      overflow: hidden;
    }

    .panel2{
      width: 100%;
      margin: 0px;
      padding: 0px;
    }
    

    .thumbnail{
      height: 400px;
    }

    .title{
      height: 40px;

    }

    .desc{
      height: 70px;
      overflow: auto;
    }


    .btn2 {
      background: #3498db;
      background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
      background-image: -moz-linear-gradient(top, #3498db, #2980b9);
      background-image: -ms-linear-gradient(top, #3498db, #2980b9);
      background-image: -o-linear-gradient(top, #3498db, #2980b9);
      background-image: linear-gradient(to bottom, #3498db, #2980b9);
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      border-radius: 0px;
      font-family: Arial;
      color: #ffffff;
      font-size: 22px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      width: 100%;
    }

    .btn2:hover {
      background: #215473;
      text-decoration: none;
      color: #ffffff;
    }


    .portada{
      background-image: url('images/bg003.jpg');
      background-position: top;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100%;
      margin-bottom: 0px;
      background-color: FFF;
      margin-top: -20px;
      background-color: #000;
    }

    .blanco{
      color: #FFF;
    }


    /* Modal */
    .modalmask {
      position: fixed;
      font-family: Arial, sans-serif;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0,0,0,0.6);
      z-index: 100;
      /*opacity:0;*/
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      /*pointer-events: none;*/
      display: none;
    }
    .modalmask:target {
      /*opacity:1;*/
      pointer-events: auto;
    }
    .modalbox{
      width: 640px;
      height: 380px;
      top:100px;
      position: relative;
      padding: 0;
      border-radius:3px;
      -webkit-transition: all 500ms ease-in;
      -moz-transition: all 500ms ease-in;
      transition: all 500ms ease-in;
      /*z-index: 99999;*/
    }

    #res-video{
      position: relative;
      z-index: 99999;
    }

    .cerrarV{
      margin-top: -5px;
      display: block;
      height: 160px;
      background: rgba(0,0,0,0.7);
      padding: 10px;
      overflow: auto;
    }

    .cerrarV p, h3{
      color: #D0CBCB;
      text-align: justify;
    }

    .movedown {
      margin: 0 auto;
    }
    .rotate {
      margin: 10% auto;
      -webkit-transform: scale(-5,-5); 
      transform: scale(-5,-5);
    }
    .resize {
      margin: 10% auto;
      width:0;
      height:0;

    }
    .modalmask:target .movedown{    
      margin:10% auto;
    }
    .modalmask:target .rotate{    
      transform: rotate(360deg) scale(1,1);
      -webkit-transform: rotate(360deg) scale(1,1);
    }

    .modalmask:target .resize{
      width:400px;
      height:200px;
    }



    .close {
      background: #606061;
      color: #FFFFFF;
      line-height: 25px;
      position: absolute;
      right: 1px;
      text-align: center;
      top: 1px;
      width: 24px;
      text-decoration: none;
      font-weight: bold;
      border-radius:3px;
      font-size:16px;
      /*z-index: 200;*/
    }

    .close:hover { 
      background: #0785B9; 
      color:#222;
    }

    

    .tdTitle{
      width: 20%;

    }

    .tdArt{
      width: 30%;
      text-align: justify;

    }

    .tdDate{
      width: 10%;

    }

    .modal-dialog{
     width: 30% !important;
   }

   .title-delete{
    font-weight: bold;
  }

  .img-profile{
    float: left;
    display: block;
    margin-right: 10px;
    margin-bottom: 20px;
  }

  .welcome{
    float: left;
    text-align: left;
    color: #FFF;
  }

  .bio{
    float: left;
  }


  .#modal-music{
    width: 80% !important;
  }

  .cont-user{
    width: 400px;
    margin:0 auto;
    text-align: center;
    padding-top: 10px;
  }

</style>


<script type="text/javascript">
  var f = jQuery.noConflict();
  f(document).ready(function(){
    f("#guardar-playlist").click(function (){
      var datos={
        "nombre" : f("#_nombre").val(),
        "puesto" : f("#_puesto").val(),
        "bio" : f("#_bio").val(),
        "playlist" : f("#_playlist").val()
      }

      f.ajax({
        type: "POST", 
        url: "procesa-playlist.php", 
        data: datos,
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function() {
          f("#status-play").html("<img src='img/ico/loading.gif' width='60px' height='60px' >"); 
        },
        dataType: "html",
        success: function(data){
          f("#status-play").html(data);
        }
      });
    });
  });

</script>

</head>
<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="panel-principal.php"><img src="img/brand-creactivmedia.png" height="23" width="118" alt="CreActiv Media"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <p class="navbar-text">Bienvenido: <?php echo $nombre=ucwords($_SESSION['nombre']); ?></p>
        <ul class="nav navbar-nav">
          <li class="active"><a href="panel-principal.php">Panel Principal</a></li>
          <li><a href="nuevo-blog.php">Nuevo Blog</a></li>
          <li><a href="nuevo-portafolio.php">Nuevo Portafolio</a></li>
        <?php
          if($_SESSION['permiso']==1){
            echo "<li><a href='nuevo-usuario.php'>Nuevo Usuario</a></li>
            <li><a href='nueva-categoria.php'>Nueva Categor&iacute;a</a></li>";
          }
        ?>
        </ul>
      <!-- 
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="salir-panel.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href='#modal-music' data-toggle="modal">Música</a></li>
          <?php
          if($_SESSION['permiso']==1){
            echo "<li><a href='usuarios.php'>Usuarios</a></li>
            <li><a href='categorias.php'>Categorias</a></li>";
          }
          ?>           
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div>
</nav>


<div class="modal fade" id="modal-music" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Música</h4>
      </div>
      <div class="modal-body">

        <?php

        if($sqlm= mysqli_query($con,"SELECT playlist FROM user WHERE id=".$_SESSION['id']." ") ){

          while($rowM = mysqli_fetch_assoc($sqlm)) {
            if($rowM["playlist"]==""){
              echo "<p>Aún no ha configurado una playlist de Spotify</p>";
              echo "<br><p>Seleccione su foto de perfil para agregar una playlist.</p>";
            }else{
              echo "<iframe src='https://embed.spotify.com/?uri=".$rowM["playlist"]."&theme=white' width='100%' height='300' frameborder='0' allowtransparency='true'></iframe>";
            }
          }
        }


        ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<?php
/*
 	if($_SESSION['permiso']==1){
  }
  */
  ?>
  <div class="jumbotron portada">
    <div class="container">
     <div class="row">
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
         <?php

         echo "<a href='#modal-id' data-toggle='modal'>
         <img src='../image/img-profile/".$_SESSION['img'].".jpg' class='img-profile' width='90px' height='90px' alt=''></a></p>"; 
         echo "<p class='welcome'>".$_SESSION['puesto']."</p>";
         echo "<p class='bio'></p>";

         ?>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <img src="img/log-creactiv-min.png" class="img-responsive pull-right" alt="">

      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
 <div class="row">
   <div class="col-md-12 col-lg-12">



     <?php
     if($ok1==1){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#ok1').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <br/><br/>
      <div class="alert alert-success" role="alert" id="ok1" style="display:none;">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span class="sr-only">OK:</span>
        La categoria ha sido guardada correctamente.
      </div>
      <?php 
    }
    ?>


    <?php 
    if($ok2==2){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#ok2').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <br/><br/>
      <div class="alert alert-success" role="alert" id="ok2" style="display:none;">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span class="sr-only">OK:</span>
        
      </div>
      <?php 
    }
    ?>


    <?php 
    if($ok3==3){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#ok3').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <br/><br/>
      <div class="alert alert-success" role="alert" id="ok3" style="display:none;">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span class="sr-only">OK:</span>
        
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj1==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error1').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error1" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Agregue un nombre de usuario, no puede quedar vacio.
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj2==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error2').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error2" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Verifique que coincidan las contrase&ntilde;as
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj3==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error3').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error3" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Complete un nombre y apellido para el perfil
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj4==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error4').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error4" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Complete un puesto para el perfil
      </div>
      <?php 
    }
    ?>


  
    <?php
    if($msj5==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error5').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error5" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Seleccione un permiso de la lista desplegable
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj6==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error6').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error6" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Agregue una descripci&iacute;n para la biografia
      </div>
      <?php 
    }
    ?>



    <?php
    if($msj7==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error7').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error7" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Solo se permiten archivos en JPG, 200 Kb máx.
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj8==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error8').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error8" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
                Solo se permiten archivos en JPG, 200 Kb máx.
      </div>
      <?php 
    }
    ?>

    <?php
    if($msj9==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error9').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error9" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Existio un error al subir la imagen de perfil
      </div>
      <?php 
    }
    ?>


    <?php
    if($msj10==TRUE){
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#error10').fadeIn().delay(3000).fadeOut();
        }) 
      </script>
      <div class="alert alert-danger" role="alert" id="error10" style="display:none;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Existio un error al procesar intente de nuevo.
      </div>
      <?php 
    }
    ?>



    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <?php
              

                  //$variable = ($haceFrio) ? "Hace frío" : "No hace frío";
                   echo "<br><a href='usuarios.php' class='btn btn-default' role='button'>Regresar</a><br>";
                    echo "<div class='cont-user'>";

                    //echo "<img src='../image/img-profile/".$row0["img"].".jpg' width='100px' height='100px' class='img-circle'>";
                    echo "
                    <form action='procesa-nueva-categoria.php' method='POST' role='form'>
                        <legend><strong></strong></legend>

                      
                        <div class='form-group'>
                        <label for=''>Nombre Categor&iacute;a</label>
                        <input type='text' class='form-control' id='' name='nombre-cat' placeholder='Ej. Web'>
                        </div>

                        <button type='submit' class='btn btn-primary'>Guardar Categoria</button>
                        </form>
                        
                        </div>
                    ";
                   


                            /*echo "<td>Usuario</td><td>".$row0["user"]."</td>
                            <td></td><td>".$row0["nombre"]."</td><td>".$row0["puesto"]."</td><td>".$row0["bio"]."</td><td><a href='editar-usuario.php?id=".$row0["id"]."' class='btn btn-default' role='button'>Editar</a></td>";                              
                            echo "</tr>";*/
       
                  ?>
              </div>
            </div>
<br/><br/>


            <?php
//} //cierre permiso admin
            ?>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
          </body>
          </html>

          <?php
        }else{
          echo "Acceso Restringido: Favor de Iniciar Sesion";
        }

        ?>