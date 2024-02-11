<?php
require ("includes/header.php");
?>



<!-- Bouton fixe comme en version bêta-->
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
                            <h2>Trouver un appart selon vos désirs</h2>
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

    <section class="container" style="margin-top: 50px;">
        <?php

            $requestPosteur = $bdd->prepare("SELECT * FROM demarcheurs WHERE id=:id");
            $requestPosteur->bindvalue(':id', $_GET['id']);
            $requestPosteur->execute();

            $dataAgent = $requestPosteur->fetch();

        ?>
        <div class="rolenom" style="border: 3px solid transparent;border-left-color:crimson;padding:20px 40px;">
            <h3 class="nom" style="font-size:30px;margin-bottom:10px;font-weight:700;"><?=$dataAgent['prenoms'] . ' ' . $dataAgent['nom']?></h3>
            <p class="role text-danger">Agent immobilier</p>
        </div>
        <br>
        <div class="photoMe" style="display:flex;justify-content:space-between;flex-wrap:wrap;">
            <div class="photo" style="width:546px;">
                <img src="<?=$dataAgent['photo']?>" alt="Photo de <?=$dataAgent['prenoms'] . ' ' . $dataAgent['nom']?>" style="width:100%;height:500px;border-radius:10px;">
            </div>
            <div class="Me" style="width:471px;text-align:start;">
                <div class="name">
                    <h3 class="nom" style="font-size:30px;margin-bottom:10px;font-weight:700;"><?=$dataAgent['prenoms'] . ' ' . $dataAgent['nom']?></h3>
                    <hr style="border:2px solid crimson;width: 70px;">
                </div>
                <div class="description">
                    <p><?php
                        if (!empty($dataAgent['description'])){
                            echo $dataAgent['description'];
                        }elseif (empty($dataAgent['description'])){
                            $nom = $dataAgent['nom'];
                            $prenom = $dataAgent['prenoms'];
                            echo "On m'appelle $prenom $nom. Je suis inscris sur la plateforme Conforthouse pour aider toute personne recherchant de chambre à pouvoir en trouver et dans les plus bref délai. Merci  pour votre confiance !";
                        }
                    ?></p>
                </div>
                <br>
                <div class="phone">
                    <h4><span style="font-weight:700;">Télephone :</span> <a href="tel:+229<?php echo $dataAgent['telephone']; ?>"><?=$dataAgent['telephone']?></a></h4>
                </div>
                <br>
                <div class="email">
                    <h4><span style="font-weight:700;">Email :</span> <a href="mailto:<?php echo $dataAgent['email']; ?>"><?=$dataAgent['email']?></a></h4>
                </div>
                <br>
                <div class="whatsapp">
                    <h4><span style="font-weight:700;">Whatsapp :</span> <?php
                        if (!empty($dataAgent['whatsapp'])){
                            ?>
                            <a href="https://wa.me/<?php echo $dataAgent['whatsapp']; ?>"><?=$dataAgent['whatsapp']?></a>
                        <?php
                        }else{
                            echo "<span class='text-danger'>Aucun numéro</span>";
                        }
                    ?>
                    </h4>
                </div>
            </div>
        </div>
    </section>
      


        <!-- feature-style-two -->
        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Mes publications</h2>
                    
                </div>
                <!-- Chambres étudiants Sanitaire -->
                <div>
                    <h2 class="text-danger">Chambres Etudiant</h2>
                    <h3 style="text-align:center;">Sanitaire</h3>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    
                    <?php
                    
                    $selectAnnonces = $bdd->prepare("SELECT * FROM annonces WHERE statut=:statut AND categorie=:categorie AND email=:email AND mots=:mots ORDER BY dates DESC ");
                    $selectAnnonces->bindvalue(':statut', 1);
                    $selectAnnonces->bindvalue(':categorie', 'Chambres étudiants');
                    $selectAnnonces->bindvalue(':email', $dataAgent['email']);
                    $selectAnnonces->bindvalue(':mots', 'Sanitaire');
                    $selectAnnonces->execute();
                    $rowAnnonces = $selectAnnonces->rowCount();
                    if ($rowAnnonces == true) {
                        while ($dataAnnonce = $selectAnnonces->fetch()){
                            if ($dataAnnonce['louer'] == 'non'){
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
                        }
                    }else {
                        ?>

                        <?php
                    }

                    ?>
                </div>

                <br><br><br>
                <!-- Chambre Etudiants Simple -->
                <div>
                    <h3 style="text-align:center;">Simple ou Ordinaire</h3>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    
                    <?php
                    
                    $selectAnnonces = $bdd->prepare("SELECT * FROM annonces WHERE statut=:statut AND categorie=:categorie AND email=:email AND mots=:mots ORDER BY dates DESC ");
                    $selectAnnonces->bindvalue(':statut', 1);
                    $selectAnnonces->bindvalue(':categorie', 'Chambres étudiants');
                    $selectAnnonces->bindvalue(':email', $dataAgent['email']);
                    $selectAnnonces->bindvalue(':mots', 'Simple');
                    $selectAnnonces->execute();
                    $rowAnnonces = $selectAnnonces->rowCount();
                    if ($rowAnnonces == true) {
                        while ($dataAnnonce = $selectAnnonces->fetch()){
                            if ($dataAnnonce['louer'] == 'non'){
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
                        }
                    }else {
                        echo "<span>Aucune chambre de ce type disponible pour l'instant</span>";
                        ?>
                        
                        <?php
                    }

                    ?>
                </div>

                <br>
                <!-- Chambre Etudiants Demi-Sanitaire -->
                <div>
                    <h3 style="text-align:center;">Demi-Sanitaire</h3>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    
                    <?php
                    
                    $selectAnnonces = $bdd->prepare("SELECT * FROM annonces WHERE statut=:statut AND categorie=:categorie AND email=:email AND mots=:mots ORDER BY dates DESC ");
                    $selectAnnonces->bindvalue(':statut', 1);
                    $selectAnnonces->bindvalue(':categorie', 'Chambres étudiants');
                    $selectAnnonces->bindvalue(':email', $dataAgent['email']);
                    $selectAnnonces->bindvalue(':mots', 'Demi-sanitaire');
                    $selectAnnonces->execute();
                    $rowAnnonces = $selectAnnonces->rowCount();
                    if ($rowAnnonces == true) {
                        while ($dataAnnonce = $selectAnnonces->fetch()){
                            if ($dataAnnonce['louer'] == 'non'){
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
                        }
                    }else {
                        echo "<span>Aucune chambre de ce type disponible pour l'instant</span>";
                        ?>

                        <?php
                    }

                    ?>
                </div>
            </div>

            
        </section>
        <!-- subscribe-section end -->

<?php
require ("includes/footer.php");
?>