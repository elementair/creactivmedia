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