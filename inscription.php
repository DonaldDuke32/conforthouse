<?php
require ("includes/header2.php");
require ("php/inscription.php");
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
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Acceuil</a></li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- ragister-section -->
        <section class="ragister-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                        <div class="sec-title">
                            <h5>Inscription</h5>
                            <h2></h2>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn" data-tab="#tab-2"><small>Utilisateur</small></li>
                                    <li class="tab-btn active-btn" data-tab="#tab-1"><small>Demarcheur</small></li>
                                   
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <form method="post" class="default-form">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="nom" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" name="prenom" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Pays</label>
                                                <input type="text" name="pays" required="">
                                            </div>
                            
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" name="ville" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Sexe</label>
                                                <select name="sexe" id="">
                                                    <option value="Homme">Homme</option>
                                                    <option value="Femme">Femme</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Télephone</label>
                                                <input type="tel" name="phone" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" required="">
                                            </div>

                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="texts" name="password" required="" id="">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmation du mot de passe</label>
                                                <input type="password" name="confpassword" required="" id="">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="conditions" id="" required=""> J'accepte les <a href="valeur_conditions/index.html#conditions"> Conditions d'utilisations</a> et  <a href="valeur_conditions/index.html#politique"> la Politique de confidentialité</a>
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" name="inscriptionDemarcheur" class="theme-btn btn-one">Inscription</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>Vous avez déja un compte ? <a href="connexion.php">Connectez-vous</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                <div class="inner-box">
                                        <form method="post" class="default-form">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Numéro whatsapp</label>
                                                <input type="tel" name="whatsapp" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Lien Profil facebook</label>
                                                <input type="text" name="facebook" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Sexe</label>
                                                <select name="sexe" id="">
                                                    <option value="Homme">Homme</option>
                                                    <option value="Femme">Femme</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name="password" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmation du mot de passe</label>
                                                <input type="password" name="confpassword" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="conditions" id="" required=""> J'accepte les <a href=""> Conditions d'utilisations</a> et  <a href=""> la Politique de confidentialité</a>
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" name="inscriptUser" class="theme-btn btn-one">Inscription</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>Vous avez déja un compte ? <a href="connexion.php">Connectez-vous</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ragister-section end -->


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
include ("includes/footer2.php");
?>