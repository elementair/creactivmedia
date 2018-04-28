<?php
//comprobacion de errores
$error=0;
if(isset($_GET["error"])){

    if($_GET["error"]==1){
    $error=1;
  }
}
?>

<!DOCTYPE html>
<html class="html" lang="es-Mx">
 <head>
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS -->
<link href="css/index.css" rel="stylesheet">
<!-- Other scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>

<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
-->


<script>
var j = jQuery.noConflict();
j(document).ready(function() {
  j(function() {
    j("#rslides").responsiveSlides();
    auto: true
  });
});
</script>
  
</head>
 <body>



<header>
  <img src="img/log-creactiv.png" height="91" width="249" alt="" class="center-block">
</header>




<div class="frm center-block">
  <form action="val-log-adm.php" method="POST" role="form">
    <legend>Login</legend>
    <div class="form-group">
      <label for="">Usuario:</label>
      <input type="text" class="form-control" id="" name="user" placeholder="User">
    </div>
     <div class="form-group">
      <label for="">Password:</label>
      <input type="password" class="form-control" id="" name="pass" placeholder="Pass">
    </div>
    <button type="submit" class="btn-log">Entrar</button>
  </form>


  <?php
        if($error==1){
        ?>

        <script>
        var k = jQuery.noConflict();
          k(document).ready(function() {
            k("#error1").fadeIn("slow").delay(3000).fadeOut();
          });

        </script>
            <div class="msj-error" id="error1">
              <!-- content -->
                  Verificar usuario / password
            </div>
        <?php
        }
  ?>
</div>
  <!--
<ul class="rslides" id="rslides">
    <li><img src="images/bg001.jpg" alt=""></li>
    <li><img src="images/bg001.jpg" alt=""></li>
    <li><img src="images/bg001.jpg" alt=""></li>
  </ul>
-->
<div class="fondo">
</div>

<footer class="footer">
  Av. Ángel Leaño # 401 - 3C Col. Los Robles, Zapopan, Jal, C.P. 45134
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
     
   </body>
</html>
