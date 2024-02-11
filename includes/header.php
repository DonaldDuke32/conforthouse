<?php
require ("database/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>CONFORT HOUSE</title>

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
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/sweetalert.min.js"></script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z47Y3YPXKT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z47Y3YPXKT');
</script>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

    <center>
<!--
        <!-- preloader -->
        <div class="loader-wrap">
            
            
        </div>
        <!-- preloader end -->
        </center>


        

        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo-light.png" alt=""></a></figure>
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
                                        <li><a href="deconnexion.php"><span>Connexion / Deconnexion</span></a></li>   
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content clearfix">
                            <div class="sign-box">
                                <?php
                                if (isset($_SESSION['user_session_mail'])) {
                                    $select_online = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]'  ");
                                    $select_online->execute();
                                    $rowcount = $select_online->rowCount();
                                    if ($rowcount == true) {
                                        $datas = $select_online->fetch();
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
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one"><span>+</span>Faire une annonce</a>
                            </div>
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
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Abomey-calavi</li>
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

