<?php

if (isset($_POST['inscriptionDemarcheur'])){

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe'])  && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confpassword']) && !empty($_POST['conditions']) && !empty($_POST['pays']) &&!empty($_POST['ville'])) {
        $nom = htmlspecialchars(trim(strip_tags(addslashes($_POST['nom']))));
        $prenom = htmlspecialchars(trim(strip_tags(addslashes($_POST['prenom']))));
        $pays = htmlspecialchars(strip_tags(addslashes($_POST['pays'])));
        $ville = htmlspecialchars(strip_tags(addslashes($_POST['ville'])));
        $sexe = htmlspecialchars(trim(strip_tags(addslashes($_POST['sexe']))));
        $email = htmlspecialchars(trim(strip_tags(addslashes($_POST['email']))));
        $phone = htmlspecialchars(trim(strip_tags(addslashes($_POST['phone']))));

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($_POST['password'] == $_POST['confpassword']) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $verify_existence = $bdd->prepare("SELECT * FROM demarcheurs WHERE nom = '$nom' AND prenoms = '$prenom' AND email = '$email' OR email = '$email'  ");
                $verify_existence->execute();
                $rowcount_existence = $verify_existence->rowCount();
                if ($rowcount_existence == false) {
                    
                    function token_random_string($leng=40){

                        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $token = '';
                        for ($i=0;$i<$leng;$i++){
                            $token.=$str[rand(0, strlen($str)-1)];
                        }
                        return $token;
                    }

                    $token = token_random_string(40);

                 

                    $insert_new = $bdd->prepare("INSERT INTO demarcheurs (`nom`,`prenoms`, `pays`, `ville`, `sexe`,`telephone`,`email`,`mdp`,`token`,`save_date`) VALUES ('$nom','$prenom','$pays','$ville','$sexe','$phone','$email','$password','$token',now()) ");
                    $insert_new->execute();

                    $emailFrom = "";
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "From: <$emailFrom>" . "\r\n";
                    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';
                    $messages = '
                            <html>
                                <body>
                                
                                    <div align="center" style="background: black;padding: 9px;">
                                            <img src="">
                                        <div style="color:#fff;font-style:italic;">Chers '.$nom.' '.$prenom.' vous venez de vous inscrire sur ConfortHouse , votre plateforme de location et de collocation  </div>
                                      </div>
                                    <div>Ceci est un mail automatique veuillez ne pas y répondre</div>
                                </body>
                            </html>'
                            ;

                            
                    if (mail($email,"ConfortHouse - Bienvenue",$messages,$header)) { 
                        $reponse = "Votre compte à été créer avec succes ";
                        ?>
                        
                        <script>
                            var delay = setTimeout(() => {
                                window.location="connexion.php";
                            }, 5000);
                        </script>

                        <?php
                    }else {
                        //Petite modif
                        $reponse = "";
                    }
                }else {
                    $message = "Ce compte existe déja";
                }
            }else {
                $message = "Les mots de passe ne sont pas identiques";
            }
        }else{
            $message = "Votre mail est invalide";
        }

        }else{
            $message = "Veuillez saisir tous les champs";
        }
    }
/* Inscription demarcheur
if (isset($_POST['inscriptionDemarcheur'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe'])  && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confpassword']) && !empty($_POST['conditions']) && !empty($_POST['pays']) &&!empty($_POST['ville'])) {
        $nom = htmlspecialchars(trim(strip_tags(addslashes($_POST['nom']))));
        $prenom = htmlspecialchars(trim(strip_tags(addslashes($_POST['prenom']))));
        $pays = htmlspecialchars(strip_tags(addslashes($_POST['pays'])));
        $ville = htmlspecialchars(strip_tags(addslashes($_POST['ville'])));
        $sexe = htmlspecialchars(trim(strip_tags(addslashes($_POST['sexe']))));
        $email = htmlspecialchars(trim(strip_tags(addslashes($_POST['email']))));
        $phone = htmlspecialchars(trim(strip_tags(addslashes($_POST['phone']))));
        $password = sha1(htmlspecialchars(trim(strip_tags(addslashes($_POST['password'])))));
        $confirm_password = sha1(htmlspecialchars(trim(strip_tags(addslashes($_POST['confpassword'])))));
        $id_users = uniqid();
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($password == $confirm_password) {
                $verify_existence = $bdd->prepare("SELECT * FROM demarcheurs WHERE nom = '$nom' AND prenoms = '$prenom' AND email = '$email' OR email = '$email'  ");
                $verify_existence->execute();
                $rowcount_existence = $verify_existence->rowCount();
                if ($rowcount_existence == false) {
                    
                    function token_random_string($leng=40){

                        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $token = '';
                        for ($i=0;$i<$leng;$i++){
                            $token.=$str[rand(0, strlen($str)-1)];
                        }
                        return $token;
                    }

                    $token = token_random_string(40);

                 

                    $insert_new = $bdd->prepare("INSERT INTO demarcheurs (`nom`,`prenoms`, `pays`, `ville`, `sexe`,`telephone`,`email`,`mdp`,`token`,`save_date`) VALUES ('$nom','$prenom','$pays','$ville','$sexe','$phone','$email','$password','$token',now()) ");
                    $insert_new->execute();

                    $emailFrom = "";
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "From: <$emailFrom>" . "\r\n";
                    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';
                    $messages = '
                            <html>
                                <body>
                                
                                    <div align="center" style="background: black;padding: 9px;">
                                            <img src="">
                                        <div style="color:#fff;font-style:italic;">Chers '.$nom.' '.$prenom.' vous venez de vous inscrire sur ConfortHouse , votre plateforme de location et de collocation  </div>
                                      </div>
                                    <div>Ceci est un mail automatique veuillez ne pas y répondre</div>
                                </body>
                            </html>';
                    if (mail($email,"ConfortHouse - Bienvenue",$messages,$header)) { 
                        $reponse = "Votre compte à été créer avec succes ";
                        ?>
                        <script>
                            var delay = setTimeout(() => {
                                window.location="connexion.php";
                            }, 5000);
                        </script>

                        <?php
                    }else {
                        //Petite modif
                        $reponse = "";
                    }
                }else {
                    $message = "Ce compte existe déja";
                }
            }else {
                $message = "Les mots de passe ne sont pas identiques";
            }
        }else {
            $message = "Votre email mail est invalide";
        }
    }else {
        $message = "Veuillez remplir tous les champs";
    }
}*/














/*Inscription utilisateur */

if (isset($_POST['inscriptUser'])) {
    if (!empty($_POST['username']) && !empty($_POST['whatsapp']) && !empty($_POST['sexe'])  && !empty($_POST['facebook']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confpassword']) && !empty($_POST['conditions']) ) {
        $username = htmlspecialchars(trim(strip_tags(addslashes($_POST['username']))));
        $facebook = htmlspecialchars(trim(strip_tags($_POST['facebook'])));
        $sexe = htmlspecialchars(trim(strip_tags(addslashes($_POST['sexe']))));
        $email = htmlspecialchars(trim(strip_tags(addslashes($_POST['email']))));
        $whatsapp = htmlspecialchars(trim(strip_tags(addslashes($_POST['whatsapp']))));
        $password = sha1(htmlspecialchars(trim(strip_tags(addslashes($_POST['password'])))));
        $confirm_password = sha1(htmlspecialchars(trim(strip_tags(addslashes($_POST['confpassword'])))));
      
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($password == $confirm_password) {
                $verify_existence = $bdd->prepare("SELECT * FROM collocusers WHERE username = '$username'  AND email = '$email' OR whatsapp = '$whatsapp'  ");
                $verify_existence->execute();
                $rowcount_existence = $verify_existence->rowCount();
                if ($rowcount_existence == false) {
                    
                   


                    $insert_new = $bdd->prepare("INSERT INTO collocusers (`username`,`email`,`whatsapp`,`facebook`,`sexe`,`mdp`,`save_date`) VALUES ('$username','$email','$whatsapp','$facebook','$sexe','$password',now()) ");
                    $insert_new->execute();

                    $emailFrom = "ihousespport@gmail.com";
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "From: <$emailFrom>" . "\r\n";
                    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';
                    $messages = '
                            <html>
                                <body>
                                
                                    <div align="center" style="background: black;padding: 9px;">
                                            <img src="">
                                        <div style="color:#fff;font-style:italic;">Chers '.$username.' vous venez de vous inscrire sur ConfortHouse en tant qu\'utilisateur, votre plateforme de location et de collocation  </div>
                                      </div>
                                    <div>Ceci est un mail automatique veuillez ne pas y répondre</div>
                                </body>
                            </html>';
                    if (mail($email,"ConfortHouse - Bienvenue",$messages,$header)) { 
                        
                        $reponse = "Votre compte à été créer avec succes ";
                        ?>
                        <script>
                            var delay = setTimeout(() => {
                                window.location="connexion.php";
                            }, 5000);
                        </script>

                        <?php
                    }else {
                        $reponse = "Echec";
                    }
                    
                }else {
                    $message = "Ce compte existe déja";
                }
            }else {
                $message = "Les mots de passe ne sont pas identiques";
            }
        }else {
            $message = "Votre email mail est invalide";
        }
    }else {
        $message = "Veuillez remplir tous les champs";
    }
}


























?>
