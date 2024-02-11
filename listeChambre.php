<?php
require ("includes/header.php");
?>
        <!-- banner-style-two -->
        <section class="banner-style-two centred">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Rechercher la maisons de vos rêves</h2>
                            <p>" Votre bonheur est notre priorité "</p>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Trouver un appartement selon vos désirs</h2>
                            <p>" Votre bonheur est notre priorité "</p>
                        </div>   
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-4.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Trouver vous un colocataire !!!</h2>
                            <p>" Votre bonheur est notre priorité "</p>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->


        <!-- feature-style-two -->
        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Location</h5>
                    <h2><?=$_GET['categorie']?></h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <?php
                    
                    $selectAnnonces = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie=:categorie ORDER BY dates DESC");
                    $selectAnnonces->bindvalue(":categorie", $_GET['categorie']);
                    $selectAnnonces->execute();
                    $rowAnnonces = $selectAnnonces->rowCount();
                    if ($rowAnnonces == true) {
                        while ($dataAnnonce = $selectAnnonces->fetch()){
                        ?>
                        <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image" style="width:370px!important;height:270px!important;"><img src="<?=$dataAnnonce['photo']?>" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category"><?=$dataAnnonce['mots']?></span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <?php
                                        $selectPosteur = $bdd->prepare("SELECT * FROM demarcheurs WHERE prenoms = '$dataAnnonce[prenoms]' AND email = '$dataAnnonce[email]' ");
                                        $selectPosteur->execute();
                                        $dataPosteur = $selectPosteur->fetch();

                                        ?>
                                        <a href="agent-single.php?id=<?=$dataPosteur['id']?>"><figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt="" style="border-radius:50px!important;"></figure>
                                        <h6><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h6></a>
                                    </div>
                                    <div class="buy-btn pull-right"><small><small><a href="detailsLocation.php?k=<?=$dataAnnonce['id_annonces']?>">Location</a></small></small></div>
                                </div>
                                <div class="title-text"><h4><a href="agents-details.html"><?=$dataAnnonce['localisation']?></a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>A partir de</h6>
                                        <h4><?=$dataAnnonce['prix']?></h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-deta"><i class="fas fa-share"></i></a></li>
                                    </ul> -->
                                </div>
                                <p><?= substr($dataAnnonce['description'],-50); ?></p>
                                <ul class="more-details clearfix">
                                    <li><i class="fas fa-door-closed"></i><?=$dataAnnonce['chambre']?> </li>
                                    <li><i class="fas fa-shower"></i><?=$dataAnnonce['toilette']?> </li>
                                </ul>
                                <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataAnnonce['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two">Details</a></div>
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
        </section>
        <!-- feature-style-two end -->

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