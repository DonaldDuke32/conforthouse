<?php
require ("includes/header2.php");

?>



        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Notre équipe</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Acceuil</a></li>
                        <li>Notre équipe</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- agents-page-section -->
        <section class="agents-page-section ">
            <div class="auto-container">
                <div class="row clearfix">
                   
                    <div class="col-lg-8 col-md-12 col-sm-12 ">
                        <div class="agents-content-side">
                            
                            <div class="">
                                <div class="agents-grid-content grid-item">
                                    <?php
                                        require_once('database/database.php');

                                        $teamMembre = $bdd->prepare("SELECT * FROM team");
                                        $teamMembre->execute();

                                    ?>
                                    <div class="row clearfix">
                                        <?php
                                            while ($dataTeamMember = $teamMembre->fetch()){
                                                ?>
                                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                                    <div class="agents-block-two">
                                                        <div class="inner-box">
                                                            <figure class="image-box"><img src="assets/images/agents/<?=$dataTeamMember['photo']?>" alt=""></figure>
                                                            <div class="content-box">
                                                                <div class="title-inner">
                                                                    <h4><a href="agents-details.html"><?=$dataTeamMember['nom']?></a></h4>
                                                                    <span class="designation"><?=$dataTeamMember['role']?></span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        ?>
                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/4.jpg" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">Carmel Josias AFLE</a></h4>
                                                            <span class="designation">PDG</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bean@realshed.com">bean@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/2.jpg" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">Candide A. N. SODOKIN</a></h4>
                                                            <span class="designation">Developpeur web (Back-end)</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">ijennifer@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-3.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">Donald ADJAHOSSOU</a></h4>
                                                            <span class="designation">Developpeur web (fullstack)</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/1.jpg" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">TSIORINIASINA Dolphin</a></h4>
                                                            <span class="designation">Developpeur web (front-end)</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:beaedict@realshed.com">beaedict@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/5.jpg" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">Pierre K. ZINSSOU</a></h4>
                                                            <span class="designation">Agent de collecte de donnés</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/3.jpg" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.html">Yannis Auréole AKPATCHO</a></h4>
                                                            <span class="designation">Rédactrice</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agents-page-section end -->

        
  <!-- subscribe-section -->
  <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Abonnez-vous</span>
                            <h2>Abonnez-vous à la newsletter et soyez informer de nouvelles locations</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Entrez votre adresse mail" required="">
                                    <button type="submit" name="submit_news">S'abonner</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->

<?php
require ("includes/footer.php");
?>