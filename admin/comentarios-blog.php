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



    $ok1="";
    $ok2="";

    $id="";


    if(isset($_GET["id"])){

      $id=$_GET["id"];

    }

    //comprobacion de valores recibidos
    if(isset($_GET['ok'])){

        if($_GET['ok']==1){
          $ok1=1;
        }

        if($_GET['ok']==2){
          $ok2=2;
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

    .back1{
      display: block;
      margin-right: auto;
      margin-left: auto;
      width: 64px;
      height: 64px;
      margin-bottom: 20px;
      margin-top: 10px;
      }

    .post{
      width: 300px;
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

    .title{
      color: #FFF;
    }


    </style>

   
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
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
        <li><a href="panel-principal.php">Panel Principal</a></li>
        <li><a href="nuevo-blog.php">Nuevo Blog</a></li>
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

          if($sqlm= mysqli_query($con, "SELECT playlist FROM user WHERE id=".$_SESSION['id']." ") ){

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
 	//if($_SESSION['permiso']==1){
?>
<div class="jumbotron portada">
  <div class="container">
       <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <h2 class="title">Comentarios Blog</h2>
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
                  El comentario seleccionado ha sido actualizado correctamente.
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
                  El comentario seleccionado ha sido borrado correctamente.
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
                  Agrege el tituo del blog
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
                  Agrege el contenido del articulo
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
                  Ha superado el tamaño maximo de la imagen, seleccione otra e intentelo nuevamente.
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
                  Solo se permiten archivos en JPG
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
                  Existio un error al procesar el archivo, intentelo de nuevo.
                  </div>
            <?php 
            }
            ?>







        <a href="panel-principal.php"><img src="images/back.png" height="64" width="64" class="back1" alt="atras"></a>


<?php
         if($sql2= mysqli_query($con, "SELECT id, id_entrada, title FROM blog WHERE id=".$id." ")){

            while($row1 = mysqli_fetch_assoc($sql2)) {

              echo "<div class='post center-block'><img src='../blog/".$row1["id_entrada"].".jpg' width='300px' height='200px' class='img-thumbnail' /> <h2>".$row1["title"]."</h2></div>";;

            }

          }
?>



          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Comentario</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Borrar</th>
              </tr>
            </thead>
            <tbody>
              
                <?php
                if ($sql = mysqli_query($con,"SELECT id, id_blog, nombre, comentario, fecha, ocultar, leido FROM `comentarios` WHERE id_blog=".$id." ORDER BY id DESC")) {

                    if(mysqli_num_rows($sql) == 0){
               
                    echo "<td colspan='5'>No existen comentarios para esta publicaci&oacute;n</td>";
                    }else{


                     // $totalComent="";
                         while($row0 = mysqli_fetch_assoc($sql)) {

                           $comentario=strip_tags(html_entity_decode($row0["comentario"]));

                               echo "<div class='modal fade' id='modal-id-".$row0["id"]."'>
                              <div class='modal-dialog'>
                                <div class='modal-content'>
                                  <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                    <h4 class='modal-title'>Advertencia</h4>
                                  </div>
                                  <div class='modal-body'>
                                    Esta apunto de eliminar el comentario seleccionado<br/> ¿Desea continuar?
                                    <br/><br/>

                                    <p><strong>Nombre:</strong> ".$row0["nombre"]."</p>
                                    <p><strong>Fecha:</strong> ".$row0["fecha"]."</p>
                                    <p><strong>Comentario:</strong> ".$comentario."</p>
                                    <p class='title-delete'> </p>
                                    
                                    
                                  </div>
                                  <div class='modal-footer'>
                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                                    <a href='procesa-borrar-comentario.php?id=".$row0["id_blog"]."&c=".$row0["id"]."' class='btn btn-danger' role='button'>Continuar</a>
                                  </div>
                                </div>
                              </div>
                            </div>";


                            echo "
                            <tr>
                            <td>".$row0["nombre"]."</td>
                            <td>".$comentario."</td>
                            <td>".$row0["fecha"]."</td>";
                            
                            if($row0["ocultar"]==1){
                            echo "<td><a href='procesa-cambiar-status-comentario.php?id=".$id."&c=".$row0["id"]."&st=0' data-toggle='tooltip' title='Oculto' ><img src='images/switch-off.png' height='21' width='41' alt='Desactivado'></a></td>";
                            }else{
                            echo "<td><a href='procesa-cambiar-status-comentario.php?id=".$id."&c=".$row0["id"]."&st=1' data-toggle='tooltip' title='Visible' ><img src='images/switch-on.png' height='21' width='41' alt='Visible'></a></td>";
                            }

                            echo "
                            <td><a class='btn btn-default' data-toggle='modal' href='#modal-id-".$row0["id"]."'>Borrar</a></td>
                            </tr>";

                                                      
                          }
                    
           
                    }
                           mysqli_free_result($sql);
                 }


                ?>
             
            
            </tbody> 
          </table>

      </div>
     </div>
  </div>
<?php
//} //cierre admin
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