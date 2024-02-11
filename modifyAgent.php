<?php
require ("includes/header2.php");
include ("php/dashboardAgent.php");
$sql = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]' ");
$sql->execute();
$rowcount = $sql->rowCount();
if ($rowcount == true) {
    $dataUser = $sql->fetch();
}else {

}

if (isset($_GET['post']) && !empty($_GET['post'])) {
    $post = $_GET['post'];
    $select_specify = $bdd->prepare("SELECT * FROM annonces WHERE id_annonces = '$post' ");
    $select_specify->execute();
    $verify = $select_specify->rowCount();
    if ($verify == true) {
        $dataPost = $select_specify->fetch();
    }else {
        ?>
            <script>
                window.location = "404.php";
            </script>
        <?php
    }
}else {
    ?>
    <script>
        window.location = "404.php";
    </script>
<?php
}
?>
  <?php
            if(!empty($message)){
        ?>
            <script>
                swal("Attention","<?php echo $message;  ?>","error")
            </script>
        <?php
            }
            if(!empty($reponse)){
        ?>
            <script>
                swal("Reussi","<?php echo $reponse;  ?>","success")
            </script>
        <?php
        }
        ?>
        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Modification</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Acceuil</a></li>
                        <li>Tableau de bord</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- myprofile-section -->
        <section class="myprofile-section sec-pad">
            <div class="auto-container">
                <div class="title">
                </div>
                <div class="tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>+</span>Modification</li>
                      </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                        <div class="general-information">
                                <h4><i class="icon-42"></i>Modification </h4>
                                <div class="inner-box default-form">
                                    <form  method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Titre</label>
                                                <div class="select-box">
                                                    <input type="text" value="<?=$dataPost['titre']?>" name="titre" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Categorie de chambre</label>
                                                <div class="select-box">
                                                <select name="categorie" class="form-control">
                                                    <option value="<?=$dataPost['categorie']?>"><?=$dataPost['categorie']?></option>
                                                    <option value="Chambres étudiants">Chambres étudiants</option>
                                                    <option value="Chambres Familiale">Chambres Familiale</option>
                                                    <option>Autres</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div> <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Type de chambre</label>
                                                <div class="select-box">
                                                    <select name="type" class="form-control">
                                                        <option value="<?=$dataPost['mots']?>"><?=$dataPost['mots']?></option>
                                                    <option value="">Choisir un type de chambre</option>
                                                        <option value="Sanitaire">Sanitaire</option>
                                                        <option value="Demi-sanitaire">Demi-sanitaire</option>
                                                        <option value="Simple">Simple</option>
                                                        <option value="Entré-couché">Entré-couché</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Localisation</label>
                                                <div class="select-box">
                                                    <input type="text" name="localisation" value="<?=$dataPost['localisation']?>" placeholder="localisation"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Prix</label>
                                                <div class="select-box">
                                                    <input type="number" value="<?=$dataPost['prix']?>" name="prix" placeholder="Ex : 15.000"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Salon</label>
                                                <div class="select-box">
                                                    <input type="number" name="salon" value="<?=$dataPost['salon']?>" placeholder="Salon" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Chambres</label>
                                                <div class="select-box">
                                                    <input type="number" name="chambres" value="<?=$dataPost['chambre']?>" placeholder="Chambres" min="1" max="10"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Toilettes</label>
                                                <div class="select-box">
                                                    <input type="number" name="toilettes" value="<?=$dataPost['toilette']?>" placeholder="Toilettes" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Cuisine</label>
                                                <div class="select-box">
                                                    <input type="number" name="cuisine" value="<?=$dataPost['cuisine']?>" placeholder="Toilettes" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <label>Images</label>
                                                <div class="upload-inner centred">
                                                
                                                    <i class="fal fa-cloud-upload"></i>
                                                    <div class="upload-box">
                                                        <input type="file" name="file[]" multiple accept=".jpg, .jpeg, .png" id="check1">
                                                        <label for="check1">Veuillez choisir vos images</label>
                                                    </div>
                                                </div>
                                        </div>
                                      
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Description</label>
                                                <textarea name="description" placeholder="Description"><?=$dataPost['description']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="theme-btn btn-one" type="submit" name="ModifyPost">Enregistrer les modifications</button>
                                </form>
                                </div>
                            </div
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>
        <!-- myprofile-section end -->


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

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Realshed/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 21:04:59 GMT -->
</html>
