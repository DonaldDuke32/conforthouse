<?php
require ("includes/header2.php");
?>


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-4.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Faq</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Acceuil</a></li>
                        <li>Faq</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- faq-page-section -->
        <section class="faq-page-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="faq-content-side">
                            <div class="sec-title">
                                <h5>FAQ’S</h5>
                                <h2>Questions fréquemment posés</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Comment faire une annonce de collocation?</h5>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content-box">
                                            <p>ConfortHouse vous souhaite la bienvenue </p>
                                            <ul class="list-style-one clearfix">
                                                <li>Créez votre compte en tant qu'utilisateur <a href="inscription.php">ici</a></li>
                                                <li>Accedez ensuite au dashboard dans le menu juste après vous êtes connectés menu > dashboard</li>
                                                <li>Faites votre annonce</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Comment poster une location ?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Sur ConfortHouse seuls les démarcheurs ont la possibilité de poster des locations</p>
                                            <ul class="list-style-one clearfix">
                                                <li>Après vous êtes connectés à votre compte demarcheur</li>
                                                <li>Accédez au dashboard dans le menu;  menu > dashboard </li>
                                                <li>Faites votre publicaion en suivant les règles</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                     <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Comment supprimer/modifier un post déja fait?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Nous avons pensé à tout </p>
                                            <ul class="list-style-one clearfix">
                                                <li>Accédez au dashboard dans le menu</li>
                                                <li>Sur la page du dashboard vous verrez mes annonces</li>
                                                <li>Cliquez dessus et le tour est joué</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->

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


        <?php
require ("includes/footer.php");
?>