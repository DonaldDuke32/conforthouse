<?php
require("includes/header2.php");
if (isset($_GET['y']) && !empty($_GET['y'])) {
    $Collocation = $_GET['y'];
    $selectCollocation = $bdd->prepare("SELECT * FROM collocannonces WHERE id_annonce = '$Collocation' ");
    $selectCollocation->execute();
    $rowCollocation = $selectCollocation->rowCount();
    if ($rowCollocation == true) {
        $dataCollocation = $selectCollocation->fetch();
    }else {
        ?>
            <script>
                window.location="404.php";
            </script>
        <?php
    }
}else {
    ?>
    <script>
        window.location="404.php";
    </script>
<?php
}
?>
  

        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3></h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                            
                                        <figure class="author-thumb"><img src="assets/images/avatar.png" alt=""></figure>
                                        <h6><?=$dataCollocation['username']?></h6>
                                
                            </div>
                           
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a ><?=$dataCollocation['categorie']?></a></li>
                                <li><a >Collocation</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3><?=$dataCollocation['prix']?> XOF</h3>
                            </div>
                        </div>
                        <!-- <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <?php
                                        $selectIllustration = $bdd->prepare("SELECT * FROM collocimg WHERE id_annonce='$dataCollocation[id_annonce]' ");
                                        $selectIllustration->execute();
                                        $rowIllustration = $selectIllustration->rowCount();
                                        if ($rowIllustration == true) {
                                            while ($dataIllustration = $selectIllustration->fetch()) {
                                                ?>
                                                    <figure class="image-box"><img src="<?=$dataIllustration['file']?>" alt=""></figure>
                                                <?php
                                            }
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Description</h4>
                                </div>
                                <div class="text">
                               <p><?=$dataCollocation['description']?></p>      
                            </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Details de la propriété</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Personnes: <span><?=$dataCollocation['personne']?></span></li>
                                    <li>Localisation: <span><?=$dataCollocation['localisation']?></span></li>
                                    <li>Categorie: <span><?=$dataCollocation['categorie']?></span></li>
                                    <li>Statut: <span>Disponible</span></li>
                                    <li>Posté le: <span><?=$dataCollocation['save_date']?></span></li>
                                </ul>
                            </div>
                         
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/avatar.png" alt=""></figure>
                                    <div class="inner">
                                        <h4><?=$dataCollocation['username']?></h4>
                                        <br>
                                       <h6>Prendre contact</h6><br>
                                        <ul class="info clearfix">
                                            <?php
                                            $selectUser = $bdd->prepare("SELECT * FROM collocusers WHERE username = '$dataCollocation[username]'  ");
                                            $selectUser->execute();
                                            $dataUser = $selectUser->fetch();
                                            ?>
                                           
                                            <a href="<?=$dataUser['facebook']?>" target="_blank"><button class="btn btn-outline-primary "><i class="fas fa-facebook"></i> Facebook</button></a>
                                            <a href="https://wa.me/<?=$dataUser['whatsapp']?>" target="_blank"><button class="btn btn-outline-success"><i class="fas fa-whatsapp"></i> Whatsapp</button></a>
                                            <a href="mailto:<?=$dataUser['email']?>" target="_blank"><button class="btn btn-outline-danger"><i class="fas fa-google-plus"></i> Mail</button></a>
                                        </ul>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title">
                        <h4>Proprietés similaires</h4>
                    </div>
                    <div class="row clearfix">
                        <?php
                        $selectOther = $bdd->prepare("SELECT * FROM collocannonces WHERE id_annonce != '$dataCollocation[id_annonce]' LIMIT 3");
                        $selectOther->execute();
                        $rowOther = $selectOther->rowCount();
                        if ($rowOther == true) {
                           while ($dataOther = $selectOther->fetch()) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=$dataOther['photo']?>" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category"><?=$dataOther['mots']?></span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        
                                        <figure class="author-thumb"><img src="assets/images/avatar.png" alt=""></figure>
                                        <h6><?=$dataOther['username']?></h6>
                                    </div>
                                    <div class="buy-btn pull-right"><small><small><a href="detailsColloc.php?Y=<?=$dataOther['id_annonce']?>&&collocation=kijsfdvh">Location</a></small></small></div>
                                </div>
                                <div class="title-text"><h4><a href="agents-details.html"><?=$dataOther['type']?></a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>A partir de</h6>
                                        <h4><?=$dataOther['prix']?> XOF</h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-deta"><i class="fas fa-share"></i></a></li>
                                    </ul> -->
                                </div>
                                <p><?= substr($dataOther['description'],-50); ?></p>
                                <ul class="more-details clearfix">
                                <li><i class="fas fa-users"></i><?=$dataColloc['personne']?></li>
                                <li><i class="fas fa-map"></i><?=$dataColloc['localisation']?></li>
                                </ul>
                                <div class="btn-box"><a href="detailsColloc.php?Y=<?=$dataOther['id_annonce']?>&&collocation=kijsfdvh" class="theme-btn btn-two">Details</a></div>
                            </div>
                        </div>
                            </div>
                        </div>
                            <?php
                           }
                        }else {
                            ?>
                            <?php
                        }


                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->


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
require ("includes/footer2.php");
?>