<?php
    require("includes/header3.php");
   

    if (isset($_GET['k']) && !empty($_GET['k'])) {
        $location = $_GET['k'];
        $selectLocation = $bdd->prepare("SELECT * FROM annonces WHERE id_annonces = '$location' ");
        $selectLocation->execute();
        $rowLocation = $selectLocation->rowCount();
        if ($rowLocation == true) {
            $dataLocation = $selectLocation->fetch();
            ?>
            <input type="text" style="color:transparent;" value="https://conforth0use.com/detailsLocation.php?k=<?=$location?>&&location=kijsfdvh" name="" id="copychamp">
            <?php
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
                            <?php
                                        $selectPosteur = $bdd->prepare("SELECT * FROM demarcheurs WHERE prenoms = '$dataLocation[prenoms]' AND email = '$dataLocation[email]' ");
                                        $selectPosteur->execute();
                                        $dataPosteur = $selectPosteur->fetch();

                                        ?>
                                        <a href="agent-single.php?id=<?=$dataPosteur['id']?>"><figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt="" style="border-radius:50px!important;"></figure>
                                        <h6><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h6></a>
                                
                            </div>
                           
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a ><?=$dataLocation['categorie']?></a></li>
                                <li><a >Location</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3><?=$dataLocation['prix']?> XOF</h3>
                            </div>
                        </div>
                        <!-- <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <?php
                    require_once('database/database.php');

                ?>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <?php
                                        $selectIllustration = $bdd->prepare("SELECT * FROM annoncesimg WHERE id_annonces='$dataLocation[id_annonces]' ");
                                        $selectIllustration->execute();
                                        $rowIllustration = $selectIllustration->rowCount();
                                        if ($rowIllustration == true) {
                                            while ($dataIllustration = $selectIllustration->fetch()) {
                                                ?>
                                                    <figure class="image-box" style="width:auto;height:auto;"><img src="<?=$dataIllustration['file']?>" alt="" style="width:100%!important;height:100%!important;"></figure>
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
                               <p><?=$dataLocation['description']?></p>      
                            </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Details de la propriété</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Salon: <span><?=$dataLocation['salon']?></span></li>
                                    <li>Chambres: <span><?=$dataLocation['chambre']?></span></li>
                                    <li>Cuisine : <span><?=$dataLocation['cuisine']?></span></li>
                                    <li>Toilette: <span><?=$dataLocation['toilette']?></span></li>
                                    
                                    <li>Type: <span> <?=$dataLocation['mots']?></span></li>
                                    <li>Localisation: <span><?=$dataLocation['localisation']?></span></li>
                                    <li>Categorie: <span><?=$dataLocation['categorie']?></span></li>
                                    <li>Statut: <span>Disponible</span></li>
                                    <li>Posté le: <span><?=$dataLocation['dates']?></span></li>
                                </ul>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Partager via</h4>
                                    <?php
                                        $title=urlencode($dataLocation['categorie']); /* titre de l'article */
                                        $url=urlencode('https://conforth0use.com/detailsLocation.php?k='.$location.'&&location=kijsfdvh');/*ecrire entre les '' le lien de l article*/
                                        $imagely=urlencode('https://conforth0use.com/'.$dataLocation['photo']);/*ecrire entre les '' le lien de la photo de couverture de l image l article*/
                                    
                                        
                                        
                                    ?>
                                </div>
                                        <div>
                                            
                                        <div class="fb-share-button" data-href="https://conforth0use.com/detailsLocation.php?k=<?=$location?>&amp;&amp;location=kijsfdvh" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fconforth0use.com%2FdetailsLocation.php%3Fk%3D<?=$location?>%26%26location%3Dkijsfdvh&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>

                                            
                                          
                                                <a href="http://twitter.com/share?text='<?php echo $title; ?>'&amp;counturl='<?php echo $url; ?>'">
                                                <button class="btn" style="background: aqua;color: white;"><i class="fa-brands fa-twitter"></i></button>
                                            </a>
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>&source=https://conforth0use.com">
                                                <button class="btn btn-dark"><i class="fa-brands fa-linkedin-in"></i></button>
                                            </a>
                                            <button class="btn btn-info" onclick="copyOne()"><i class="fa-regular fa-copy"></i></button>
                                        </div>

                            </div>
                         
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt=""></figure>
                                    <div class="inner">
                                        <h4><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h4>
                                        <ul class="info clearfix">
                                           
                                            <li><a href="tel:<?=$dataPosteur['telephone']?>"><?=$dataPosteur['telephone']?></a></li>
                                        </ul>
                                        <div class="btn-box"><a href="tel:+229<?=$dataPosteur['telephone']?>"><i class="fa-regular fa-phone"></i> Prendre contact</a></div>
                                        <div>
                                            <?php
                                             if (isset($_SESSION['user_session_mail'])) {
                                                $select_online = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]'  ");
                                                $select_online->execute();
                                                $rowcount = $select_online->rowCount();
                                                if ($rowcount == true) {
                                                    $datas = $select_online->fetch();
                                                    $status_connect = "user";
                                                    ?>
                                                     <a class="btn btn-outline-primary" href="confortchat/chat.php?sdr=<?=$datas['email']?>&&stsdr=<?=$status_connect?>&&rcv=<?=$dataPosteur['email']?>&&strcv=demarcheur&&double=doux&six=tap"><i class="fa-brands fa-facebook-messenger"></i> Discuter</a>
                                                    <?php
                                                }else {
                                                    header("location: 404.php");
                                                }
                                                
                                            }elseif (isset($_SESSION['demarcheur_session_mail'])) {
                                                $select_online = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]'  ");
                                                $select_online->execute();
                                                $rowcount = $select_online->rowCount();
                                                if ($rowcount == true) {
                                                    $datas = $select_online->fetch();
                                                    $status_connect = "demarcheur";
                                                    ?>
                                                             <a class="btn btn-outline-primary" href="confortchat/chat.php?sdr=<?=$datas['email']?>&&stsdr=<?=$status_connect?>&&rcv=<?=$dataPosteur['email']?>&&strcv=demarcheur&&double=doux&six=tap"><i class="fa-brands fa-facebook-messenger"></i> Discuter</a>
                                                    <?php
                                                }else {
                                                    header("location: 404.php");
                                                }
                                        
                                        
                                           
                                            }else {
                                                ?>
                                                     <a class="btn btn-outline-primary" href="connexion.php"><i class="fa-brands fa-facebook-messenger"></i> Discuter</a>
                                                <?php
                                            }
                                            
                                            ?>
                                           
                                        </div>
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
                        $selectOther = $bdd->prepare("SELECT * FROM annonces WHERE id_annonces != '$dataLocation[id_annonces]' LIMIT 3");
                        $selectOther->execute();
                        $rowOther = $selectOther->rowCount();
                        if ($rowOther == true) {
                           while ($dataOther = $selectOther->fetch()) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                            <div class="image-box">
                                <figure class="image" style="width: 370px!important;height: 270px!important;"><img src="<?=$dataOther['photo']?>" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category"><?=$dataOther['mots']?></span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <?php
                                        $selectPosteur = $bdd->prepare("SELECT * FROM demarcheurs WHERE prenoms = '$dataOther[prenoms]' AND email = '$dataOther[email]' ");
                                        $selectPosteur->execute();
                                        $dataPosteur = $selectPosteur->fetch();

                                        ?>
                                        <a href="agent-single.php?id=<?=$dataPosteur['id']?>"><figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt="" style="border-radius:50px!important;"></figure>
                                        <h6><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h6></a>
                                    </div>
                                    <div class="buy-btn pull-right"><small><small><a href="detailsLocation.php?k=<?=$dataOther['id_annonces']?>&&location=kijsfdvh">Location</a></small></small></div>
                                </div>
                                <div class="title-text"><h4><a href="agents-details.html"><?=$dataOther['titre']?></a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>A partir de</h6>
                                        <h4><?=$dataOther['prix']?></h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-deta"><i class="fas fa-share"></i></a></li>
                                    </ul> -->
                                </div>
                                <p><?= substr($dataOther['description'],-50); ?></p>
                                <ul class="more-details clearfix">
                                    <li><i class="fas fa-door-closed"></i><?=$dataOther['chambre']?> </li>
                                    <li><i class="fas fa-shower"></i><?=$dataOther['toilette']?> </li>
                                </ul>
                                <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataOther['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two">Details</a></div>
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