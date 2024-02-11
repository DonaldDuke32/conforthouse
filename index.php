<?php
require ("includes/header.php");
?>

<!-- Bouton fixe comme en version bêta-->

    <div class="buttonD" style="position:fixed;left:0;right:0;z-index:100;bottom:
    100px;display:flex;justify-content:space-around;">
        <div class="annonce" style="">
            <p><a href="dashboardAgent.php" style="color:white!important;font-size:18px;padding:10px;font-family:fantasy;" class="btn btn-danger"> + Publier une annonce</a></p>
        </div>

        <div class="annonce" style="">
            <p><a href="index.php#colocation" style="margin-left:10px;color:white!important;font-size:18px;padding:10px;font-family:fantasy;" class="btn btn-danger"> Recherche de colocation</a></p>
        </div>
    </div>

<!-- Bouton fixe comme en version bêta-->
        <!-- banner-style-two -->
        <section class="banner-style-two centred">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Rechercher la maisons de vos rêves</h2>
                            <p>" Votre bonheur est notre priorité "
                                
                            </p>
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


        <!-- search-field-section -->
        <section class="search-field-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1"><small>Location</small></li>
                                    <li class="tab-btn" data-tab="#tab-2"><small>Collocation</small></li>
                                </ul>
                            </div>
                            <div class="tabs-content info-group">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <div class="top-search">
                                            <form action="others.php" method="post" class="search-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Location</label>
                                                         
                                                            <div class="select-box">
                                                            <i class="fas fa-search"></i>
                                                                <select name="type" class="wide">
                                                                <option data-display="Type">Type</option>
                                                                <option value="Sanitaire">Sanitaire</option>
                                                                    <option value="Demi-sanitaire">Demi-sanitaire</option>
                                                                    <option value="Simple">Simple</option>
                                                                    <option value="Entré-couché">Entré-couché</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Categories</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select name="categorie" class="wide">
                                                                <option data-display="Categories">Categorie</option>
                                                                <option value="Chambres étudiants">Chambres étudiants</option>
                                                                    <option value="Chambres Familiale">Chambres Familiale</option>
                                                                    <option value="Chambres d'hotel">Chambres hotel</option>
                                                                    <option value="Chambres d'auberge">Chambres auberge</option>
                                                                    <option value="studio">studio</option>
                                                                    <option value="Salle de conférence">Salle de conférence</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Chambres</label>
                                                            <div class="select-box">
                                                            <select name="chambre" class="wide">
                                                                <option data-display="Chambres">Chambres</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-btn">
                                                    <button type="submit" name="filter"><i class="fas fa-search"></i>Rechercher</button>
                                                </div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="inner-box">
                                        <div class="top-search">
                                            <form action="collocation.php" method="post" class="search-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Location</label>
                                                            <div class="select-box">
                                                            <i class="fas fa-search"></i>
                                                                <select name="type" class="wide">
                                                                <option data-display="Type">Type</option>
                                                                <option value="Sanitaire">Sanitaire</option>
                                                                    <option value="Demi-sanitaire">Demi-sanitaire</option>
                                                                    <option value="Simple">Simple</option>
                                                                    <option value="Entré-couché">Entré-couché</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Localisation</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select name="categorie" class="wide">
                                                                <option data-display="Categories">Categorie</option>
                                                                <option value="Chambres étudiants">Chambres étudiants</option>
                                                                    <option value="Chambres Familiale">Chambres Familiale</option>
                                                                    <option value="Chambres d'hotel">Chambres hotel</option>
                                                                    <option value="Chambres d'auberge">Chambres auberge</option>
                                                                    <option value="studio">studio</option>
                                                                    <option value="Salle de conférence">Salle de conférence</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Personne</label>
                                                            <div class="select-box">
                                                            <i class="fas fa-users"></i>
                                                            <select name="personne" class="wide">
                                                                <option data-display="Personne">Personne</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-btn">
                                                    <button type="submit" name="filter"><i class="fas fa-search"></i>rechercher</button>
                                                </div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- search-field-section end -->


        <!-- feature-style-two -->
        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Location</h5>
                    <h2>Chambre Etudiants
                    </h2>
                </div>

                    <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Chambres étudiants'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location d'etudiants pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Chambres étudiants" class="theme-btn btn-one">Voir plus</a></div>
                    </div>
                      
            </div>
            <!-- Chambre Familiales-->

            <br>
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Chambre Familiales</h2>
                </div>

                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Chambres Familiale'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location de chambre familiales pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Chambres Familiale" class="theme-btn btn-one">Voir plus</a></div>
                </div>
            </div>
            <br>

            <!-- Boutique -->

            <div class="auto-container">
                <div class="sec-title">
                    <h2>Boutique</h2>
                </div>

                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Boutique'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location de Boutique pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Boutique" class="theme-btn btn-one">Voir plus</a></div>
                </div>

            </div>
            
            <br>

            <!-- Chambre d'auberge -->

            <div class="auto-container">
                <div class="sec-title">
                    <h2>Chambre d'auberge</h2>
                </div>
                
                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Chambres d\'auberge'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location d'auberge pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Chambres d'auberge" class="theme-btn btn-one">Voir plus</a></div>
                </div>

            </div>
                    <!--STUDIo-->
            <br>
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Studio</h2>
                </div>
                
                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'studio'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location de Studio pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=studio" class="theme-btn btn-one">Voir plus</a></div>
                </div>

            </div>
            <!--Salle de conférence-->

            <br>
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Salle de conférence</h2>
                </div>

                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Salle de conference'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width: 390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location de salle de conférence pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Salle de conference" class="theme-btn btn-one">Voir plus</a></div>
                </div>
            </div>
            <!--Autres-->

            <br>
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Autres catégorie de chambres</h2>
                </div>
                
                <div class="auto-container">
                        
                        <div class="grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <?php
                                        $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE statut = '1' AND categorie = 'Autres'  ORDER BY dates DESC LIMIT 0,3");
                                        $selectFilter->execute();
                                        $rowFilter = $selectFilter->rowCount();
                                        if ($rowFilter == true) {
                                        while ($dataFilter = $selectFilter->fetch()) {
                                            ?>
                                                           <div class="col-md-4 feature-block">
                                        <div class="feature-block-one">
                                        <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image" style="width:390px!important;height:280px!important;"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                            <div class="btn-box"><a href="detailsLocation.php?k=<?=$dataFilter['id_annonces']?>&&location=kijsfdvh" class="theme-btn btn-two btn btn-danger text-light">Details</a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                                <?php
                                        }
                                    }else {
                                        ?>
                                                <center><h4>Aucune location d'autres type de chambres disponible pour le moment</h4></center>
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="more-btn centred"><a href="listeChambre.php?categorie=Autres" class="theme-btn btn-one">Voir plus</a></div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->


        <!-- cta-section -->
        <section class="cta-section alternate-2 centred" style="background-image: url(assets/images/background/cta-1.jpg);">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text">
                        <h2>Vous êtes à la recherche nouvelle d'une location ou <br />d'une collocation ?</h2>
                    </div>
                    <div class="btn-box">
                        <a href="others.php" class="theme-btn btn-three">Location</a>
                        <a href="collocation.php" class="theme-btn btn-one">Collocation</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- deals-style-two -->
        <section class="deals-style-two sec-pad" id="colocation">
            <div class="auto-container" >
                <div class="sec-title centred">
                    <h5>Annonces</h5>
                    <h2>Nos demandes de collocation</h2>
                </div>
                <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                    <?php
                    $selectColloc = $bdd->prepare("SELECT * FROM collocannonces WHERE statut = '1' ORDER BY save_date  DESC LIMIT 4");
                    $selectColloc->execute();
                    $rowColloc = $selectColloc->rowCount();
                    if ($rowColloc == true) {
                        while ($dataColloc = $selectColloc->fetch()) {
                           ?>
                                <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <?php
                                    $selectIllustration = $bdd->prepare("SELECT * FROM collocimg WHERE id_annonce = '$dataColloc[id_annonce]' LIMIT 1 ");
                                    $selectIllustration->execute();
                                    $rowIllustration = $selectIllustration->rowCount();
                                    if ($rowIllustration == true) {
                                        $dataIllustration = $selectIllustration->fetch();
                                    }else {
                                        
                                    }

                                    ?>
                                    <figure class="image"><img src="<?=$dataIllustration['file']?>" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category"><?=$dataColloc['categorie']?></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="detailsColloc.php?y=<?=$dataColloc['id_annonce']?>&&collocation=jfukjnd"><?=$dataColloc['type']?></a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>A partir de</h6>
                                                    <h4><?=$dataColloc['prix']?> XOF</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="assets/images/avatar.png" alt="">
                                                        <span><?=$dataColloc['username']?></span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p><?=substr($dataColloc['description'],-50)?></p>
                                            <ul class="more-details clearfix">
                                                <li><i class="fas fa-users"></i><?=$dataColloc['personne']?></li>
                                                <li><i class="fas fa-map"></i><?=$dataColloc['localisation']?></li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="detailsColloc.php?y=<?=$dataColloc['id_annonce']?>&&collocation=jfukjnd" class="theme-btn btn-one btn btn-danger text-light">Voir les détails</a></div>
                                                <!-- <ul class="other-option pull-right clearfix">
                                                    <li><a href=""><i class="fas fa-share"></i></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           <?php
                        }
                    }else{
                        // Si de demande de colocation n'est pas trouvé :

                        echo "<center><span class='text-danger' style='font-size:20px;'>Aucune demande de colocation trouvé pour le moment</span></center>";
                    }

                    ?>
                    
                   
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-style-two end -->


        <!-- chooseus-section -->
        <section class="chooseus-section alternate-2 bg-color-1">
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <h5>Pourquoi nous?</h5>
                        <h2>Les avantages de nous choisir</h2>
                    </div>
                  
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-19"></i></div>
                                    <h4>Excellente réputation</h4>
                                    <p>Nous sommes connus pour notre sens du travail et du professionalisme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-26"></i></div>
                                    <h4>Meilleurs agents</h4>
                                    <p>Nous nous assurons d'avoir les meilleures agents</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <h4>Service personnalisé</h4>
                                    <p>Nous nous adaptons à vos besoins</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->

        <br><br>

        <!-- clients-section 
        <section class="clients-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h5>Our Pertners</h5>
                            <h2>We’re going to Became Partners for the Long Run.</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="clients-logo">
                            <ul class="logo-list clearfix">
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- clients-section end -->



  <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <?php
                    if (isset($_POST['submit'])){
                        if (!empty($_POST['email'])){

                            require_once('database/database.php');

                            $insert = $bdd->prepare("INSERT INTO newsletter(email) VALUES(:email)");
                            $insert->bindvalue(":email", $_POST['email']);
                            $insert->execute();

                        }
                    }
                ?>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Abonnez-vous</span>
                            <h2>Recevez des notifications des nouvelles publications en laissant votre E-mail</h2>
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