<?php 
session_start();
 if(isset($_SESSION['login'])){
 	include("conexion.php");


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




    $ok=FALSE;

    //comprobacion de valores recibidos
    if(isset($_GET['ok'])){
        if($_GET['ok']==TRUE)
          $ok=TRUE;
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

    }


   $id="";

    if(isset($_GET['id'])){
        
          $id=$_GET['id'];
    }




 //Escribir Asistencia
date_default_timezone_set('America/Mexico_City');
$fechaAct=date("Y-m-d"); //Fecha Entrada
$horaAct=date("H:i:s"); //hora Entrada
$year=date("Y"); 


 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel Principal</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
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
      margin-bottom: 50px;
      background-color: FFF;
      margin-top: -20px;
      background-color: #000;
    }

    .blanco{
      color: #FFF;
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

    
    .frm{
      width: 500px;
      height: 650px;
      margin-top: 50px;
      margin-right: auto;
      margin-left: auto;
    }

    .back{
      position: relative;
      top:-500px;
      left: 50px;
      float: left;
    }

    .back1{
      display: none;
    }

    @media (max-width: 900px) {
      .back{
      display: none;
      }

      .back1{
      display: block;
      margin-right: auto;
      margin-left: auto;
      width: 64px;
      height: 64px;
      margin-bottom: 20px;

      }


    }

 
    #contador-titulo {
      font-size: 12px;
      color: #3286EF;
    }

    #contador-subtitulo {
      font-size: 12px;
      color: #3286EF;
    }

    .rojo{
      color: #E90505;
    }

    .azul{
      color: #0799FF;
    }

    .img-profile{
      float: left;
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 20px;
    }

    .img{
      width: 512px;
      height: 256px;
      margin-bottom: 100px;
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


        /*funcion titulos*/
        var max_titulo = 70;
        $('#max').html(max_titulo);
        $('#titulo').keyup(function() {
            var chars = $(this).val().length;
            var diff = max_titulo - chars;
            /*
            if(diff<=10){
               $("#contador-titulo").addClass(".rojo");
              
             }else if{
               $("#contador-titulo").removeClass(".rojo");
              
             }
             */
             
            $('#contador-titulo').html(diff);

           
        });


        //funncion subtitulos
        var max_subtitulo = 150;
        $('#max2').html(max_subtitulo);

        $('#subtitulo').keyup(function() {
            var chars = $(this).val().length;
            var diff2 = max_subtitulo - chars;
            $('#contador-subtitulo').html(diff2);   
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
        <li><a href="panel-principal.php">Panel Principal</a></li>
        <li><a href="nuevo-blog.php">Nuevo Blog</a></li>
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
              <li><a href='categorias.php'>Categor&iacute;as</a></li>";
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
            <iframe src="https://embed.spotify.com/?uri=spotify:album:0mp9j82fdZk9oNyVXkuOre&theme=white" width="100%" height="300px" frameborder="0" allowtransparency="true"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<?php
 //	if($_SESSION['permiso']==1){
?>
<div class="jumbotron portada">
  <div class="container">
       <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <h2 class="title">Editar Blog</h2>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

              <img src="img/log-creactiv-min.png" class="img-responsive pull-right" alt="">

         </div>
       </div>
  </div>
</div>

<?php

function nameUser($id){

      include("conexion.php");

      $sql = mysqli_query($con,"SELECT nombre, puesto FROM user WHERE id=".$id." ");

      while($row = mysqli_fetch_assoc($sql)) {

      $cat1=$row["nombre"];
      $cat2=$row["puesto"];
      $txt=$cat1." | ".$cat2;

      return $txt;
      }
}



?>

            <?php
            if($ok==TRUE){
            ?>
                  <script type="text/javascript">
                  $(document).ready(function(){
                  $('#ok').fadeIn().delay(3000).fadeOut();
                  }) 
                  </script>
                  <div class="alert alert-success" role="alert" id="ok" style="display:none;">
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                  <span class="sr-only">OK:</span>
                    El post ha sido editado correctamente.
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
                    Agregue una breve descripción de la publicación
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
                    Escriba mínimo 10 tags referentes al artículo.
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
                    Seleccione una categoría para el artículo del blog.
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
                    Redacte el artículo del blog
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
                      Ha superado el tamaño máximo de la imagen, seleccione otra e inténtelo nuevamente.<br/>
                    El tamaño máximo es de 200 kb.
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
                      Solo se permiten archivos en JPG<br/>
                    El tamaño máximo es de 200 kb.
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
                   Existio un error al subir la imagen.
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
                    Existio un error al editar el blog.
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
                        Escriba el titulo del blog en caso de editarlo.
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
                
                  </div>
            <?php 
            }  //echo (isset($_SESSION['DatBlog'][1]))? trim($_SESSION['DatBlog'][1]) : 'a' 
            ?>


   <?php

                if ($sql = mysqli_query($con,"SELECT id, id_entrada, title, intro, articulo, tags, id_categoria, id_autor, fecha, activo FROM blog WHERE id=".$id." ")) {

                    if(mysqli_num_rows($sql) == 0){
                    echo "<div class='browser_width colelem' id='u2258-bw'>
                    No existen registros disponibles</div>";
                    }else{
                    

           
                          while($row0 = mysqli_fetch_assoc($sql)) {

                            /*$cat1=($row0["categoria"]=="Design") ? 'selected' : '';
                            $cat2=($row0["categoria"]=="Marketing Digital") ? 'selected' : '';
                            $cat3=($row0["categoria"]=="Web") ? 'selected' : '';
                            $cat4=($row0["categoria"]=="Editorial") ? 'selected' : '';
                            $cat5=($row0["categoria"]=="Social Media") ? 'selected' : '';
                            $cat6=($row0["categoria"]=="Tech") ? 'selected' : '';*/

                            $status1=($row0["activo"]==1) ? 'selected' : '';
                            $status2=($row0["activo"]==0) ? 'selected' : '';

                            $idCat=$row0["id_categoria"];

                            echo "<form action='procesa-editar-blog.php' method='POST' class='form-horizontal' role='form' id='form' name='form' enctype='multipart/form-data'>

                                      <div class='container-fluid'>
                                          <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>

                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Titulo:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <input type='text' name='titulo' placeholder='Titulo del blog | 70 caracteres máx.' id='titulo' class='form-control' required='required' value='".$row0["title"]."' title='' maxlength='70'>
                                                  <div id='contador-titulo' class=''></div>
                                                </div>
                                              </div>

                                              <div class='form-group'>
                                                  <label for='textarea' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Descripción corta:</label>
                                                  <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                    <textarea name='desc-corta' placeholder='Descripción breve del blog 150 caracteres máx.' id='subtitulo' class='form-control' rows='3' required='required' maxlength='150'>".$row0["intro"]."</textarea>
                                                    <div id='contador-subtitulo' class=''></div>
                                                  </div>
                                              </div>

                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Tags:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <input type='text' name='tags' placeholder='Agregar Keywords 10 máx. separadas por coma.' id='input' class='form-control' value='".$row0["tags"]."' required='required' title=''>
                                                </div>
                                              </div>

                                            </div><!-- -->
                                        
                                            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Fecha:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <input type='text' name='' id='' class='form-control' value='".$row0["fecha"]."' required='required' pattern='' title=''  disabled>
                                                </div>
                                              </div>

                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Categoría:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <select name='sCat' id='' class='form-control' required='required'>";
                                                    




      
                                              if($sqlm= mysqli_query($con,"SELECT id, nombre, activo FROM categorias WHERE activo=1 ORDER BY nombre ASC") ){

                                                echo "<option value='0' selected='selected'>Selecciona una categoría</option> ";
                                                while($rowM = mysqli_fetch_assoc($sqlm)) {
                                                  
                                                  echo "<option value='".$rowM["id"]."' ";
                                                  if($rowM["id"]== $idCat){
                                                    echo "selected='selected'";
                                                  }

                                                  echo ">".$rowM["nombre"]."</option> ";
                                                }
                                              }
          
                                                    

                                                  echo "</select>
                                                </div>
                                              </div>

                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Estado:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <select name='status' id='input' class='form-control' required='required'>
                                                    <option value='1' ".$status1." >Publicado</option>
                                                    <option value='0' ".$status2." >Guardado sin publicar </option>
                                                  </select>
                                                </div>
                                              </div>

                                              <div class='form-group'>
                                                <label for='input' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Autor:</label>
                                                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                  <input type='text' name='' id='' class='form-control' value='".nameUser($row0["id_autor"])."' required='required' pattern='' title='' disabled>
                                                  <input type='hidden' name='autor' id='".$row0["id_autor"]."' class='form-control' value=''>
                                                </div>
                                              </div>

                                            </div><!-- -->
                                        </div>
                                      </div>

                                      <div class='container-fluid'>
                                          <div class='row'>
                                  
                                            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                                                 <div class='form-group'>
                                                    <label for='' class='col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label'>Subir Imagen:</label>
                                                    <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                                                      <input type='hidden' name='MAX_FILE_SIZE' value='200500' />
                                                      <input type='file' name='Fimg' accept='image/jpeg' class='pull-left'/>
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                                                <div class='form-group'>
                                                     <div class='col-xs-6 col-sm-6 col-md-6 col-md-offset-3'>
                                                     <button type='submit' class='btn btn-primary'>Editar Entrada</button>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                              <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                                    <div class='form-group'>
                                                      <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                                      <textarea name='art' id='_articulo' class='ckeditor' rows='50' cols='50'>".$row0["articulo"]."</textarea>
                                                      <input type='hidden' name='nameImg' value='".$row0["id_entrada"]."' />
                                                      <input type='hidden' name='id' value='".$row0["id"]."' />

                                                      </div>
                                                    </div>
                                              </div>
                                        </div>
                                      </div>

                                      
                                  </form>";

                                  echo "<img src='../blog/".$row0["id_entrada"].".jpg' class='img-thumbnail center-block img' >"; 

                          }
                          mysqli_free_result($sql);
                    }
                }


?>


   

<script>

if (CKEDITOR.instances['_articulo']) {
            CKEDITOR.remove(CKEDITOR.instances['_articulo']);
         }

//CKEDITOR.replace('editor');



</script>

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