<?php
require ("includes/header2.php");
?>


        <!-- page-content end -->
        <div class="page-content clearfix">

          

            <div class="right-column pull-right">
                <!-- search-field-section -->
               
                <!-- search-field-section end -->

                <!-- deals-style-two -->
                <section class="deals-style-two">
                    <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'studio'  ORDER BY dates DESC ");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"  style="width:570px!important;height:397px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category"><?=$dataFilter['mots']?></span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <?php
                                    $selectPosteur = $bdd->prepare("SELECT * FROM demarcheurs WHERE prenoms = '$dataFilter[prenoms]' AND email = '$dataFilter[email]' ");
                                    $selectPosteur->execute();
                                    $dataPosteur = $selectPosteur->fetch();

                                    ?>
                                    <a href="agent-single.php?id=<?=$dataPosteur['id']?>"><figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt="" style="border-radius:50px!important;"></figure>
                                        <h6><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h6></a>
                                </div>
                                <div class="buy-btn pull-right"><small><small><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh">Location</a></small></small></div>
                            </div>
                            <div class="title-text"><h4><a href="agents-details.html"><?=$dataFilter['titre']?></a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>A partir de</h6>
                                    <h4><?=$dataFilter['prix']?></h4>
                                </div>
                                <!-- <ul class="other-option pull-right clearfix">
                                    <li><a href="property-deta"><i class="fas fa-share"></i></a></li>
                                </ul> -->
                            </div>
                            <p><?= substr($dataFilter['description'],-50); ?></p>
                            <ul class="more-details clearfix">
                                <li><i class="fas fa-door-closed"></i><?=$dataFilter['chambre']?> </li>
                                <li><i class="fas fa-shower"></i><?=$dataFilter['toilette']?> </li>
                            </ul>
                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two">Details</a></div>
                        </div>
                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location de studio pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </section>
                <!-- deals-style-two end -->
            </div>

        </div>
        <!-- page-content end -->


<?php
require ("includes/footer2.php");
?>