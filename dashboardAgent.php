<?php
require ("includes/header2.php");

include ("php/dashboardAgent.php");
$sql = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]' ");
$sql->execute();
$rowcount = $sql->rowCount();
if ($rowcount == true) {
    $dataAgent = $sql->fetch();
}else {

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
                    <h1>Mon Tableau de bord</h1>
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
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>+</span>Nouvelle annonce</li>
                        <li class="tab-btn" data-tab="#tab-2"><span><i class="fas fa-file"></i></span>Mes annonces</li>
                        <li class="tab-btn" data-tab="#tab-3"><span><i class="fas fa-user"></i></span>Mon Profile</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="general-information">
                                <h4><i class="icon-42"></i>Nouvelle annonce</h4>
                                <div class="inner-box default-form">
                                    <form  method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Titre</label>
                                                <div class="select-box">
                                                    <input type="text" name="titre" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Categorie de chambre</label>
                                                <div class="select-box">
                                                <select name="categorie" class="form-control">
                                                <option value="Chambres étudiants">Chambres étudiants</option>
                                            <option value="Chambres Familiale">Chambres Familiale</option>
                                            <option value="Chambres d'hotel">Chambres hotel</option>
                                            <option value="Chambres d'auberge">Chambres auberge</option>
                                            <option value="studio">Studio</option>
                                            <option value="Boutique">Boutique</option>
                                            <option value="Salle de conférence">Salle de conférence</option>
                                                    <option>Autres</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div> <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Type de chambre</label>
                                                <div class="select-box">
                                                    <select name="type" class="form-control">
                                                    <option value="">Choisir un type de chambre</option>
                                                        <option value="Sanitaire">Sanitaire</option>
                                                        <option value="Demi-sanitaire">Demi-sanitaire</option>
                                                        <option value="Simple">Simple ou ordinaire</option>
                                                        <option value="Villa">Villa</option>
                                                        <option value="Entré-couché">Entré-couché</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Localisation</label>
                                                <div class="select-box">
                                                    <input type="text" name="localisation" placeholder="localisation"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Prix</label>
                                                <div class="select-box">
                                                    <input type="number" name="prix" placeholder="Ex : 15.000"  id="" min="10000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Salon</label>
                                                <div class="select-box">
                                                    <input type="number" name="salon" placeholder="Salon" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Chambres</label>
                                                <div class="select-box">
                                                    <input type="number" name="chambres" placeholder="Chambres" min="1" max="10"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Toilettes</label>
                                                <div class="select-box">
                                                    <input type="number" name="toilettes" placeholder="Toilettes" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Cuisine</label>
                                                <div class="select-box">
                                                    <input type="number" name="cuisine" placeholder="Toilettes" min="0" max="5"  id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <label>Images</label>
                                                <div class="upload-inner centred">
                                                
                                                    <i class="fal fa-cloud-upload"></i>
                                                    <input type="file" name="file[]" multiple accept=".jpg, .jpeg, .png" id="check1">
                                                        <label for="check1">Veuillez choisir vos images</label>
                                                </div>
                                        </div>
                                      
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Description</label>
                                                <textarea name="description" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="theme-btn btn-one" type="submit" name="agentPost">Poster</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="">
                                <table class="table table-responsive">
                                    <thead>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Categorie</th>
                                        <th>Salon</th>
                                        <th>Chambres</th>
                                        <th>Cuisine</th>
                                        <th>Toilettes</th>
                                        <th>Localisation</th>
                                        <th>Prix</th>
                                        <th>Action</th>
                                        <th>Modifier</th>
                                        <!--<th>Suppression</th>-->
                                    </thead>

                                    <?php
                                    $sqls = $bdd->prepare("SELECT * FROM annonces WHERE prenoms = '$dataAgent[prenoms]' ");
                                    $sqls->execute();
                                    $row = $sqls->rowCount();
                                    if ($row == true) {
                                        while ($data = $sqls->fetch()) {
                                            if ($data['louer'] == "non"){
                                        ?>
                                            <tr>
                                                <td><?=$data['titre']?></td>
                                                <td><?=$data['mots']?></td>
                                                <td><?=$data['categorie']?></td>
                                                <td><?=$data['salon']?></td>
                                                <td><?=$data['chambre']?></td>
                                                <td><?=$data['cuisine']?></td>
                                                <td><?=$data['toilette']?></td>
                                                <td><?=$data['localisation']?></td>
                                                <td><?=$data['prix']?> XOF</td>
                                                <td>
                                                    <form  method="post">
                                                        <input type="hidden" value="<?=$data['id_annonces']?>" name="id_annonce" id="">
                                                        <?php
                                                         if ($data['statut'] == "1") {
                                                            ?>
                                                            <button type="submit" name="desactive" class="btn btn-danger">Desactiver</button>
                                                            <?php
                                                         }else if($data['statut'] == "0") {
                                                            ?>
                                                             <button type="submit" name="active" class="btn btn-success">Activer</button>
                                                            <?php
                                                         }elseif($data['statut'] == "3"){
                                                            ?>
                                                            <button type="button" class="btn btn-info">non approuvé</button>
                                                           <?php
                                                         }
                                                        ?>
                                                    </form>
                                                </td>
                                                
                                                <td><a href="modifyAgent.php?post=<?=$data['id_annonces']?>"><button class="btn btn-outline-success">Modifier</button></a></td>
                                                <td>
                                                    <!--<form method="post">
                                                        <input type="hidden" name="id" value="/*['id_annonces']?>" id="">
                                                        <button type="submit" name="deleteAnnonce" class="btn btn-danger">Supprimer</button>
                                                    </form>-->
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        }
                                    }

                                    ?>
                                    
                                </table>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="">
                            <h4><i class="fas fa-user"></i>Mon profil</h4>
                                <div class="inner-box default-form">
                                    <form  method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <!-- -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Numéro whatsapp</label>
                                                <div class="select-box">
                                                <input type="tel" name="whatsapp" value="<?=$dataAgent['telephone']?>" id="">
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Choisissez une photo de profil <?php if (!empty($dataAgent['photo'])) {}else{ ?> ( <span style="color:red;">Vous n'avez pas encore choisi votre photo</span> ) <?php } ?></label>
                                                <div class="select-box">
                                                <input type="file" class="form-control" name="profile" accept=".jpg, .jpeg, .png" id="">
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                            <label for="">Description <?php if (!empty($dataAgent['description'])) {}else{ ?> ( <span style="color:red;">Vous devez remplir une description assez brève sur vous</span> ) <?php } ?></label>
                                                <div class="select-box">
                                                <textarea name="description"><?php if(!empty($dataAgent['description'])){ ?> <?=$dataAgent['description']?>  <?php }else{} ?></textarea>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                       
                                
                                    </div>
                                    <button class="theme-btn btn-one" type="submit" name="profilAgent">Modifier</button>
                                </form>
                            </div>
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
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>A propos de nous</h3>
                                </div>
                                <div class="text">
                                    <p>Nous sommes créatifs, innovants et n'avons pas peur d'essayer de nouvelles choses. Nous embrassons des idées différentes et sommes visionnaires. <br>
                                    Chez ConfortHouse, nous nous engageons à promouvoir la liberté d'accès aux chambres ; nos services et nos processus internes ont tous la liberté au cœur de leurs objectifs. </p>
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
                                        <li><a href="faq.php">FAQ</a></li>
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
                                        <li><i class="fas fa-map-marker-alt"></i>Bénin, Abomey-Calavi</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:+22998741437">+229 98 74 14 37</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:ihousespport@gmail.com">ihousespport@gmail.com</a></li>
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
                        <figure class="footer-logo"><a href="index.php"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="index.php">ConfortHouse</a> &copy; 2022 Tous droits réservés</p>
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

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Realshed/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 21:04:59 GMT -->
</html>
