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
                                    <h5>Location</h5>
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
                                        <select name="cuisine" class="wide">
                                           <option data-display="Cuisine">Cuisine</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select name="toilette" class="wide">
                                           <option data-display="Toilettes">Toilettes</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select name="salon" class="wide">
                                           <option data-display="Salon">Salon</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                        </select>
                                    </div>
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
                                            if (!empty($_POST['type'])) {
                                                $type = $_POST['type'];
                                            }else {
                                                $type = " ";
                                            }

                                            if (!empty($_POST['categorie'])) {
                                                $categorie = $_POST['categorie'];
                                            }else {
                                                $categorie = " ";
                                            }


                                            if (!empty($_POST['salon'])) {
                                                $salon = $_POST['salon'];
                                            }else {
                                                $salon = " ";
                                            }

                                            if (!empty($_POST['toilette'])) {
                                                $toilette = $_POST['toilette'];
                                            }else {
                                                $toilette = " ";
                                            }

                                            if (!empty($_POST['cuisine'])) {
                                                $cuisine = $_POST['cuisine'];
                                            }else {
                                                $cuisine = " ";
                                            }
                                            if (!empty($_POST['chambre'])) {
                                                $chambre = $_POST['chambre'];
                                            }else {
                                                $chambre = " ";
                                            }
                                            
                                            $selectFilter = $bdd->prepare("SELECT * FROM annonces WHERE mots = '$type' AND categorie = '$categorie' AND cuisine = '$cuisine' AND salon = '$salon' AND chambre = '$chambre' AND toilette = '$toilette'  ");
                                            $selectFilter->execute();
                                            $rowFilter = $selectFilter->rowCount();
                                            if ($rowFilter == true) {
                                                while ($dataFilter = $selectFilter->fetch()) {
                                                    ?>
                                                         <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                            <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                                        <figure class="author-thumb"><img src="<?php if(!empty($dataPosteur['photo']) || $dataPosteur['photo'] != null ){ echo $dataPosteur['photo']; }else{ echo "assets/images/avatar.png"; } ?>" alt=""></figure>
                                        <h6><?=$dataPosteur['nom'].' '.$dataPosteur['prenoms']?></h6>
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
                                                            <center> <h4>Aucun résultat trouvé</h4> </center>
                                                <?php
                                            }
                                        }else {
                                            $selectFilter = $bdd->prepare("SELECT * FROM annonces ORDER BY dates DESC ");
                                            $selectFilter->execute();
                                            while ($dataFilter = $selectFilter->fetch()) {
                                                ?>
                                                               <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                            <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=$dataFilter['photo']?>" alt=""></figure>
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
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="http://azim.commonsupport.com/Realshed/contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
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
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Listing</a></li>
                                        <li><a href="index.html">How It Works</a></li>
                                        <li><a href="index.html">Our Services</a></li>
                                        <li><a href="index.html">Our Blog</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Top News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                        <p>Mar 24, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
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
                            <p><a href="index.html">Realshed</a> &copy; 2021 All Right Reserved</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
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
