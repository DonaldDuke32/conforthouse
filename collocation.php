<?php
require ("includes/header2.php");
?>
      


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar property-sidebar">
                            <form method="POST">
                            <div class="filter-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Collocation</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="select-box">
                                        <select name="type" class="wide">
                                           <option data-display="Type">Type</option>
                                           <option value="Sanitaire">Sanitaire</option>
                                            <option value="Demi-sanitaire">Demi-sanitaire</option>
                                            <option value="Simple">Simple</option>
                                            <option value="Entré-couché">Entré-couché</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
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
                                
                                    <div class="select-box">
                                        <select name="personne" class="wide">
                                           <option data-display="Personnes">Personnes</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                        </select>
                                    </div>
                                
                                    <div class="filter-btn">
                                        <button type="submit" name="filter" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filtrer</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                          
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5> Resultats</h5>
                                </div>
                                
                            </div>
                            <div class=" list">
                                <div class="deals-grid-content grid-item">
                                    <div class="row clearfix">
                                        <?php
                                        if (isset($_POST['filter'])) {
                                            $type = $_POST['type'];
                                            $categorie = $_POST['categorie'];
                                            $personne = $_POST['personne'];
                                            $selectFilter = $bdd->prepare("SELECT * FROM collocannonces WHERE type = '$type' AND categorie = '$categorie' AND personne = '$personne'  ");
                                            $selectFilter->execute();
                                            $rowFilter = $selectFilter->rowCount();
                                            if ($rowFilter == true) {
                                                while ($dataFilter = $selectFilter->fetch()) {
                                                    ?>
                                                         <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                         <?php
                                                            $selectIllustration = $bdd->prepare("SELECT * FROM collocimg WHERE id_annonce = '$dataFilter[id_annonce]' LIMIT 1 ");
                                                            $selectIllustration->execute();
                                                            $rowIllustration = $selectIllustration->rowCount();
                                                            if ($rowIllustration == true) {
                                                                $dataIllustration = $selectIllustration->fetch();
                                                            }else {
                                                                
                                                            }

                                                            ?>
                                                            <figure class="image"><img src="<?=$dataIllustration['file']?>" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category"><?=$dataFilter['categorie']?></span>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <figure class="author-thumb"><img src="assets/images/avatar.png" alt=""></figure>
                                                                <h6><?=$dataFilter['username']?></h6>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="title-text"><h4><a href="detailsColloc.php?y=<?=$dataFilter['id_annonce']?>&&collocation=jfukjnd"><?=$dataFilter['type']?></a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>A partir de</h6>
                                                                <h4><?=$dataFilter['prix']?> XOF</h4>
                                                            </div>
                                                            
                                                        </div>
                                                        <p><?=substr($dataFilter['description'],-50)?></p>
                                                            <ul class="more-details clearfix">
                                                                <li><i class="fas fa-users"></i><?=$dataFilter['personne']?></li>
                                                                <li><i class="fas fa-map"></i><?=$dataFilter['localisation']?></li>
                                                            </ul>
                                                        <div class="btn-box"><a href="detailsColloc.php?y=<?=$dataFilter['id_annonce']?>&&collocation=jfukjnd" class="theme-btn btn-two">Details</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    <?php
                                                }
                                            }else {
                                                ?>
                                                            <center> <h4>Aucun résultat trouvé</h4> </center>
                                                <?php
                                            }
                                        }else {
                                            $selectFilter = $bdd->prepare("SELECT * FROM collocannonces ORDER BY save_date DESC ");
                                            $selectFilter->execute();
                                            while ($dataFilter = $selectFilter->fetch()) {
                                                ?>
                                                     <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                     <?php
                                                        $selectIllustration = $bdd->prepare("SELECT * FROM collocimg WHERE id_annonce = '$dataFilter[id_annonce]' LIMIT 1 ");
                                                        $selectIllustration->execute();
                                                        $rowIllustration = $selectIllustration->rowCount();
                                                        if ($rowIllustration == true) {
                                                            $dataIllustration = $selectIllustration->fetch();
                                                        }else {
                                                            
                                                        }

                                                        ?>
                                                        <figure class="image"><img src="<?=$dataIllustration['file']?>" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category"><?=$dataFilter['categorie']?></span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/avatar.png" alt=""></figure>
                                                            <h6><?=$dataFilter['username']?></h6>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="title-text"><h4><a href="detailsColloc.php?y=<?=$dataFilter['id_annonce']?>&&collocation=jfukjnd"><?=$dataFilter['type']?></a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>A partir de</h6>
                                                            <h4><?=$dataFilter['prix']?> XOF</h4>
                                                        </div>
                                                        
                                                    </div>
                                                    <p><?=substr($dataFilter['description'],-50)?></p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="fas fa-users"></i><?=$dataFilter['personne']?></li>
                                                            <li><i class="fas fa-map"></i><?=$dataFilter['localisation']?></li>
                                                        </ul>
                                                    <div class="btn-box"><a href="detailsColloc.php?y=<?=$dataFilter['id_annonce']?>&&collocation=jfukjnd" class="theme-btn btn-two">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                <?php
                                            }
                                        }

                                        ?>
                                       
                                   
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-page-section end -->


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


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
                                    <p>Quis nostrud exercita laboris nisi ut aliquip commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="about.php">A propos</a></li>
                                        <li><a href="faq.php">faq</a></li>
                                        <li><a href="team.php">Notre équipe</a></li>
                                        <li><a href="contact.php">Contactez-nous</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="index.html">ConfortHouse</a> &copy; 2022 Tous droits réservés</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="valeur_conditions/index.html">conditions d'utilisations</a></li>
                            <li><a href="valeur_conditions/index.html">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
       
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/product-filter.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
