<?php
require ("includes/header2.php");

?>


        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>404</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">acceuil</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>Page non trouvé. <br />Cette page n'existe pas ou à été supprimé</h2>
                    <a href="index.php" class="theme-btn btn-one">Retourner à l'acceuil</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->
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