<?php

if (isset($_COOKIE['confh_8524515_u'])) {
  
    $data = $_COOKIE['confh_8524515_u'];
    $datas = utf8_encode($data);
    $select_cookies = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$datas' ");
    $select_cookies->execute();
    $row_cookies = $select_cookies->rowCount();
    if ($row_cookies == true) {
      $data_me = $select_cookies->fetch();
      $_SESSION['user_session_mail'] = $info_users['adresse'];
      $_SESSION['user_session_id'] = $info_users['id'];
      header("location: index.php");
    }else{
      
    }
}else{
  
}


if (isset($_COOKIE['confh_8524515_d'])) {
  
    $data = $_COOKIE['confh_8524515_d'];
    $datas = utf8_encode($data);
    $select_cookies = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$datas' ");
    $select_cookies->execute();
    $row_cookies = $select_cookies->rowCount();
    if ($row_cookies == true) {
      $data_me = $select_cookies->fetch();
      $_SESSION['demarcheur_session_mail'] = $info_demarcheurs['email'];
      $_SESSION['demarcheur_session_id'] = $info_demarcheurs['id'];
      header("location: index.php");
    }else{
      
    }
}else{
  
}




/* Utilisateur connexion */

if (isset($_POST['connect_user'])) {
    if (!empty($_POST['email_user']) && !empty($_POST['password_user'])) {
        $email = htmlspecialchars(trim(addslashes(strip_tags($_POST['email_user']))));
        $password = sha1(htmlspecialchars(trim(addslashes(strip_tags($_POST['password_user'])))));
         $req = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$email' AND mdp = '$password' ");
         $req->execute();
         $count_connexion = $req->rowCount();
         $info_users = $req->fetch();
            if ($count_connexion == true) {
                
                    if (isset($_POST['remember'])) {
                        setcookie('confh_8524515_u',$email,time()+365*24*3600,null,null,false,true);
                    }
                    $_SESSION['user_session_mail'] = $info_users['email'];
                    $_SESSION['user_session_id'] = $info_users['id'];
                    ?>
                        <script>
                            window.location="index.php";
                        </script>
                    <?php
               
         }else {
                $message = 'Identifiants ou mot de passe incorrect';
         }
    }else {
            $message = 'Veuillez remplir tous les champs ';
    }
}


/*Demarcheur connexion*/

if (isset($_POST['connect_demarcheur'])) {
    if (!empty($_POST['email_demarcheur']) && !empty($_POST['password_demarcheur'])) {
        $email = htmlspecialchars(trim(addslashes(strip_tags($_POST['email_demarcheur']))));
        $password = $_POST['password_demarcheur'];
         $req = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$email'     ");
         $req->execute();
         $count_connexion = $req->rowCount();
         $info_demarcheurs = $req->fetch();
            if ($count_connexion == true) {
                
                    if (isset($_POST['remember'])) {
                        setcookie('confh_8524515_d',$email,time()+365*24*3600,null,null,false,true);
                    }
                    $passwordIsOk = password_verify($password, $info_demarcheurs['mdp']);
                    if ($passwordIsOk){
                        $_SESSION['demarcheur_session_mail'] = $info_demarcheurs['email'];
                        $_SESSION['demarcheur_session_id'] = $info_demarcheurs['id'];
                        ?>
                        <script>
                            window.location="index.php";
                        </script>
                    <?php
                    }else {
                        $message = 'Identifiants ou mot de passe incorrect';
                    }
            }else{
                $message = "Veuillez ";
            }
    }else{
        $message = "Veuillez remplir tous les champs";
    }        
}



?>

