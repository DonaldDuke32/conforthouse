<?php
require ("database/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Confort House</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"> -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="assets/css/switcher-style.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/sweetalert.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0" nonce="bPkWD1HM"></script>


</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    <center>

        <!-- preloader -->
        <div class="loader-wrap">
            
            <div class="preloader">
              <!--  <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="c" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="f" class="letters-loading">
                                F
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                T
                            </span>
                           
                            <span data-text-preloader="h" style="color:#e62a4e;font-weight:800;" class="letters-loading">
                                H
                            </span>
                            <span data-text-preloader="o" style="color:#e62a4e;font-weight:800;" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="u" style="color:#e62a4e;font-weight:800;" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="s" style="color:#e62a4e;font-weight:800;" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="e" style="color:#e62a4e;font-weight:800;" class="letters-loading">
                                E
                            </span>
                        </div>
                    </div>  
                </div>-->
            </div>
        </div>
        <!-- preloader end -->
        </center>







        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>Bénin, Abomey-Calavi</li>
                            <li><i class="far fa-clock"></i>Lun - Sam  9.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:+22998741437">+229 98 74 14 37</a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                        <li><a href="https://twitter.com/Infinith0use?s=20&t=iPCcQVRYKxxED9BhbmeBBQ"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://chat.whatsapp.com/G5itVc31FR9K74Vxy2XtxU"><span class="fab fa-whatsapp"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://t.me/+PCO8qFTISAk0AGM0"><span class="fab fa-telegram"></span></a></li>
                        </ul>
                        <div class="sign-box">
                                <?php
                                if (isset($_SESSION['user_session_mail'])) {
                                    $select_online = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]'  ");
                                    $select_online->execute();
                                    $rowcount = $select_online->rowCount();
                                    if ($rowcount == true) {
                                        $datas = $select_online->fetch();
                                        $status_connect = "user";
                                    }else {
                                        header("location: 404.php");
                                    }

                                    ?>
                                    <a href="dashboardUser.php"><i class="fas fa-user"></i><?=$datas['username']?></a>
                                    <?php

                                    
                                }elseif (isset($_SESSION['demarcheur_session_mail'])) {
                                    $select_online = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]'  ");
                                    $select_online->execute();
                                    $rowcount = $select_online->rowCount();
                                    if ($rowcount == true) {
                                        $datas = $select_online->fetch();
                                        $status_connect = "demarcheur";
                                    }else {
                                        header("location: 404.php");
                                    }


                                    ?>
                                    <a href="dashboardAgent.php"><i class="fas fa-user"></i><?=$datas['nom'].' '.$datas['prenoms']?></a>
                                    <?php
                                }else {
                                    ?>
                                    <a href="connexion.php"><i class="fas fa-user"></i>Mon compte</a>
                                    <?php
                                }

                                ?>
                                
                            </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                        <li><a href="index.php">Acceuil</a></li>
                                        <li><a href="collocation.php"><span>Collocation</span></a></li> 
                                        <li class="dropdown"><a href="index.html"><span>Location</span></a>
                                            <ul>
                                                <li><a href="locationEtudiants.php">Location etudiants</a></li>
                                                <li><a href="locationFamilliale.php">Location Familliale</a></li>
                                                <li><a href="locationHotel.php">Location Hotel</a></li>
                                                <li><a href="locationAuberge.php">Location Auberge</a></li>
                                                <li><a href="locationStudio.php">Location Studio</a></li>
                                                <li><a href="locationConference.php">Location Salle de conférence</a></li>
                                                <li><a href="others.php">Autres location</a></li>
                                            </ul>
                                        </li>
                                        <?php
                                        if (isset($_SESSION['user_session_mail'])) {
                                            ?>
                                        <li><a href="dashboardUser.php"><span>Tableau de bord</span></a></li>

                                            <?php
                                        }elseif (isset($_SESSION['demarcheur_session_mail'])) {
                                            ?>
                                        <li><a href="dashboardAgent.php"><span>Tableau de bord</span></a></li>
                                            <?php
                                        }

                                        ?>
                                        <li><a href="contact.php"><span>Contact</span></a></li> 
                                        <?php
                                            if (isset($_SESSION)){
                                                ?>
                                                <li><a href="deconnexion.php"><span>Connexion / Deconnexion</span></a></li> 
                                        <?php
                                            }
                                        ?>  
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Bénin, Abomey-Calavi</li>
                        <li><a href="tel:+22998741437">+229 98741437</a></li>
                        <li><a href="mailto:ihousespport@gmail.com">ihousespport@gmail.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://twitter.com/Infinith0use?s=20&t=iPCcQVRYKxxED9BhbmeBBQ"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://chat.whatsapp.com/G5itVc31FR9K74Vxy2XtxU"><span class="fab fa-whatsapp"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://t.me/+PCO8qFTISAk0AGM0"><span class="fab fa-telegram"></span></a></li>
                        
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

