<?php

if (isset($_POST['agentPost'])) {
    // Verifier si tous les champs ont été remplis 
    if (!empty($_POST['categorie']) && !empty($_POST['description']) && !empty($_POST['type'])  && !empty($_POST['localisation']) && !empty($_POST['avance']) && !empty($_POST['caution']) &&  !empty($_POST['prix']) && !empty($_POST['commissions']) && !empty($_POST['titre']) && !empty($_POST['visite'])) {

        //Generer une id unique pour chaque annonce
        $unique_id = uniqid();
        $sql = $bdd->prepare("SELECT * FROM demarcheurs WHERE email=:email");
        $sql->bindvalue(':email', $_SESSION['demarcheur_session_mail']);
        $sql->execute();
        $rowcount = $sql->rowCount();
        if ($rowcount == true) {
            $dataUser = $sql->fetch();
        }else {

        }
        $email = $dataUser['email'];
        $tel = $dataUser['telephone']; 
        $prenoms = $dataUser['prenoms'];
        $salon = htmlspecialchars(addslashes(trim(strip_tags($_POST['salon']))));
        $titre = htmlspecialchars(addslashes(trim(strip_tags($_POST['titre']))));
        $categorie = htmlspecialchars(addslashes(trim(strip_tags($_POST['categorie']))));
        $description = htmlspecialchars(addslashes(trim(strip_tags($_POST['description']))));
        $type = htmlspecialchars(addslashes(trim(strip_tags($_POST['type']))));
        $localisation = htmlspecialchars(addslashes(trim(strip_tags($_POST['localisation']))));
        $avance = htmlspecialchars(addslashes(trim(strip_tags($_POST['avance']))));
        $caution = htmlspecialchars(addslashes(trim(strip_tags($_POST['caution']))));
        $prix = htmlspecialchars(addslashes(trim(strip_tags($_POST['prix']))));
        $chambres = htmlspecialchars(addslashes(trim(strip_tags($_POST['chambres']))));
        $cuisine = htmlspecialchars(addslashes(trim(strip_tags($_POST['cuisine']))));
        $commissions = htmlspecialchars(addslashes(trim(strip_tags($_POST['commissions']))));
        $visite = htmlspecialchars(addslashes(trim(strip_tags($_POST['visite']))));
        $toilettes = htmlspecialchars(addslashes(trim(strip_tags($_POST['toilettes']))));
        

        //Verification de l'existence pour eviter l'envoi en double
        $select_old = $bdd->prepare("SELECT * FROM annonces WHERE prenoms = '$prenoms' AND titre = '$titre'   AND description = '$description' ");
        $select_old->execute();
        // Recuperer le nombre de résultat
        $row = $select_old->rowCount();
        if ($row == true) {
            $message = "Une publication identique existe déja ";

        } else {
            //Compter le nombre de fichier envoyé
            $countfiles = count($_FILES['file']['tmp_name']);
            //Verifier l'existence de fichiers
            if (!empty($countfiles)) {
                for ($i = 0; $i<$countfiles; $i++) {

                    $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];
                    if ($i == 0) {
                        $target_file1 = 'upload/location/'.$filename;
                    }
                    // renommer les differents fichiers 
                    

                    // Chemin de téléchargement
                    $target_file = 'upload/location/'.$filename;
                    // Déplacement/téléchargement des fichiers
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file);
                    // Insertion des fichiers choisis
                    $sql = $bdd->prepare("INSERT INTO annoncesimg (`id_annonces`, `file`, `dates`) VALUES('$unique_id','$target_file',now()) ");
                    $sql->execute();
                }
                //Insertion des informatons
                $sqls = $bdd->prepare("INSERT INTO `annonces`(`id_annonces`, `prenoms`, `email`, `tel`, `titre`, `prix`, `localisation`,`avance`, `caution`, `mots`, `salon`, `chambre`, `toilette`, `cuisine`,`commissions`,`visite`, `categorie`, `photo`, `description`) VALUES ('$unique_id','$prenoms','$email','$tel','$titre','$prix','$localisation', '$avance','$caution','$type','$salon','$chambres','$toilettes','$cuisine','$commissions','$visite','$categorie','$target_file1','$description') ");
                $sqls->execute();

                $sqls->prepare("INSERT INTO `annonces`(`id_annonces`, `prenoms`, `email`, `tel`, `titre`, `prix`, `localisation`,`avance`, `caution`, `mots`, `salon`, `chambre`, `toilette`, `cuisine`,`commissions`,`visite`, `categorie`, `photo`, `description`) VALUES(:id_annonce, :prenoms, :email, :tel, :titre, :prix, :localisation, :avance, :caution, :mots, :salon, :chambre, :toilette, :cuisine, :commissions, :visite, :categorie, :photo, :description)");
                $sqls->bindvalue(':id_annonce', $unique_id);
                $sqls->bindvalue(':prenoms', $prenoms);
                $sqls->bindvalue(':email', $email);
                $sqls->bindvalue(':tel', $tel);
                $sqls->bindvalue(':titre', $titre);
                $sqls->bindvalue(':prix', $prix);
                $sqls->bindvalue(':prix', $prix);
                $sqls->bindvalue(':localisation', $localisation);
                $sqls->bindvalue(':avance', $avance);
                $sqls->bindvalue(':caution', $caution);
                $sqls->bindvalue(':mots', $type);
                $sqls->bindvalue(':salon', $salon);
                $sqls->bindvalue(':chambre', $chambres);
                $sqls->bindvalue(':toilette', $toilettes);
                $sqls->bindvalue(':cuisine', $cuisine);
                $sqls->bindvalue(':commisions', $commisions);
                $sqls->bindvalue(':visite', $visite);
                $sqls->bindvalue(':categorie', $categorie);
                $sqls->bindvalue(':photo', $target_file1);
                $sqls->bindvalue(':description', $description);
                $sqls->execute();

                
                $reponse = "Votre annonce à été fait avec succès";
                
            } else {
                $message = "Vous n'avez choisi aucune illustration";
            
            }
        }
    } else {
        $message = "Veuillez remplir tous les champs";

    }
}



/*Supprimer une annonce*/

/*if (isset($_POST['deleteAnnonce'])) {
    if (!empty($_POST['id_annonce'])) {
        $id_annonce = $_POST['id_annonce'];
        $sqls = $bdd->prepare("DELETE FROM annonces WHERE id_annonces = '$id_annonce' ");
        $sqls->execute();
        $reponse = "Suppression reussi";
    }
}*/

/*Activer et Desactiver */

if (isset($_POST['active'])) {
    if (!empty($_POST['id_annonce'])) {
        $id_annonces = $_POST['id_annonce'];
        $sql = $bdd->prepare("UPDATE annonces SET statut = '1' WHERE id_annonces = '$id_annonces'  ");
        $sql->execute();
        $reponse = "Activation reussi";
    }
}
if (isset($_POST['desactive'])) {
    if (!empty($_POST['id_annonce'])) {
        $id_annonces = $_POST['id_annonce'];
        $sql = $bdd->prepare("UPDATE annonces SET louer = 'oui' WHERE id_annonces = '$id_annonces'  ");
        $sql->execute();
        $reponse = "Désactivation reussi";
    }
}

/* Modifier une annonce */

if (isset($_POST['ModifyPost'])) {
    // Verifier si tous les champs ont été remplis 
    if ( !empty($_POST['categorie']) && !empty($_POST['description']) && !empty($_POST['type'])  && !empty($_POST['localisation']) && !empty($_POST['avance']) && !empty($_POST['caution'])  &&  !empty($_POST['prix']) && !empty($_POST['commissions']) && !empty($_POST['titre'])) {

        //Generer une id unique pour chaque annonce
        $unique_id = $_GET['post'];
        $sql = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]' ");
        $sql->execute();
        $rowcount = $sql->rowCount();
        if ($rowcount == true) {
            $dataUser = $sql->fetch();
        }else {
            
        }
        $email = $dataUser['email'];
        $tel = $dataUser['telephone']; 
        $prenoms = $dataUser['prenoms'];
        $salon = htmlspecialchars(addslashes(trim(strip_tags($_POST['salon']))));
        $titre = htmlspecialchars(addslashes(trim(strip_tags($_POST['titre']))));
        $categorie = htmlspecialchars(addslashes(trim(strip_tags($_POST['categorie']))));
        $description = htmlspecialchars(addslashes(trim(strip_tags($_POST['description']))));
        $type = htmlspecialchars(addslashes(trim(strip_tags($_POST['type']))));
        $localisation = htmlspecialchars(addslashes(trim(strip_tags($_POST['localisation']))));
        $avance = htmlspecialchars(addslashes(trim(strip_tags($_POST['avance']))));
        $caution = htmlspecialchars(addslashes(trim(strip_tags($_POST['caution']))));
        $prix = htmlspecialchars(addslashes(trim(strip_tags($_POST['prix']))));
        $chambres = htmlspecialchars(addslashes(trim(strip_tags($_POST['chambres']))));
        $cuisine = htmlspecialchars(addslashes(trim(strip_tags($_POST['cuisine']))));
        $commissions = htmlspecialchars(addslashes(trim(strip_tags($_POST['commissions']))));
        $toilettes = htmlspecialchars(addslashes(trim(strip_tags($_POST['toilettes']))));
        

        //Verification de l'existence pour eviter l'envoi en double
        $select_old = $bdd->prepare("SELECT * FROM annonces WHERE titre = '$titre' AND description = '$description' ");
        $select_old->execute();
        // Recuperer le nombre de résultat
        $row = $select_old->rowCount();
        if ($row == true) {
            $delete_old = $bdd->prepare("DELETE FROM annoncesimg WHERE id_annonces = '$_GET[post]' ");
            $delete_old->execute();
            //Compter le nombre de fichier envoyé
            $countfiles = count($_FILES['file']['tmp_name']);
            //Verifier l'existence de fichiers
            if (!empty($countfiles)) {
                for ($i = 0; $i<$countfiles; $i++) {

                    if ($i == 0) {
                        $filename1 = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];
                        $target_file1 = 'upload/location/'.$filename1;
                    }
                    // renommer les differents fichiers 
                    $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];

                    // Chemin de téléchargement
                    $target_file = 'upload/location/'.$filename;
                    // Déplacement/téléchargement des fichiers
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file);
                    // Insertion des fichiers choisis
                    $sql = $bdd->prepare("INSERT INTO annoncesimg (`id_annonces`, `file`, `dates`) VALUES('$unique_id','$target_file',now()) ");
                    $sql->execute();
                }
            }
                //Insertion des informatons
                $sqls = $bdd->prepare("UPDATE annonces SET `categorie` = '$categorie', `titre`='$titre', `description`='$description', `mots`='$type', `localisation`='$localisation',`avance`='$avance',`caution`='$caution', `prix`='$prix', `salon`='$salon', `cuisine`='$cuisine',`commissions`='$commissions', `toilette`='$toilettes', `chambre`='$chambres' WHERE id_annonces = '$_GET[post]'  ");
                $sqls->execute();
            
            $reponse = "Votre annonce à été modifié avec succes";
                     
        } else {
            $delete_old = $bdd->prepare("DELETE FROM annoncesimg WHERE id_annonces = '$_GET[post]' ");
            $delete_old->execute();
            //Compter le nombre de fichier envoyé
            $countfiles = count($_FILES['file']['tmp_name']);
            //Verifier l'existence de fichiers
            if (!empty($countfiles)) {
                for ($i = 0; $i<$countfiles; $i++) {

                    if ($i == 0) {
                        $filename1 = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];
                        $target_file1 = 'upload/location/'.$filename1;
                    }
                    // renommer les differents fichiers 
                    $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];

                    // Chemin de téléchargement
                    $target_file = 'upload/location/'.$filename;
                    // Déplacement/téléchargement des fichiers
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file);
                    // Insertion des fichiers choisis
                    $sql = $bdd->prepare("INSERT INTO annoncesimg (`id_annonces`, `file`, `dates`) VALUES('$unique_id','$target_file',now()) ");
                    $sql->execute();
                }
            }
                //Insertion des informatons
                $sqls = $bdd->prepare("UPDATE annonces SET `categorie` = '$categorie', `titre`='$titre', `description`='$description', `mots`='$type', `localisation`='$localisation',`avance`='$avance',`caution`='$caution', `prix`='$prix', `salon`='$salon', `cuisine`='$cuisine',`commissions`='$commissions', `toilette`='$toilettes', `chambre`='$chambres' WHERE id_annonces = '$_GET[post]'  ");
                $sqls->execute();
            
            $reponse = "Votre annonce à été modifié avec succes";
                          
    }
    } else {
        $message = "Veuillez remplir tous les champs";

    }
}


/* Modifier le profil*/

if (isset($_POST['profilAgent'])) {
    if (!empty($_POST['whatsapp']) && !empty($_POST['description'])) {
        $whatsapp = htmlspecialchars(trim(strip_tags(addslashes($_POST['whatsapp']))));
        $description = htmlspecialchars(trim(strip_tags(addslashes($_POST['description']))));

        
        if (!empty($_FILES['profile'])) {
            $file_name = $_FILES['profile']['name'];
            $file_type = strrchr($file_name, '.');
            $file_size = $_FILES['profile']['size'];
            $file_tmp = $_FILES['profile']['tmp_name'];
            $file_error = $_FILES['profile']['error'];
            $unique = uniqid();
            $file_dest = "upload/profile/".uniqid().date('Y-m-d-H-i-s').$file_type; 
            $extension_auth = array('.jpg', '.JPG', '.Jpg','.jpeg', '.JPEG', '.Jpeg', '.png', '.PNG');
    
            $verif = $bdd->prepare("SELECT * FROM demarcheurs WHERE whatsapp = '$whatsapp' AND description='$description'");
            $verif->execute();
            $rowC = $verif->rowCount();
            if ($rowC == true) {
                $message = "Un compte existe deja sous ces identifiants";
            }else {
                if(in_array($file_type,$extension_auth)){
    
                    if (move_uploaded_file($file_tmp, $file_dest)){
                        $sqls = $bdd->prepare("UPDATE demarcheurs SET whatsapp = '$whatsapp', description = '$description',photo = '$file_dest' WHERE email = '$_SESSION[demarcheur_session_mail]' ");
                        $sqls->execute();
                $reponse = "Votre modification a été faite avec succès";
            }else {
            $message = "Erreur de téléchargement de votre profil.... Veuillez réeessayer ";
        }
    }else {
       $message ="Format d'image non pris en charge... Veuillez en changer";
    }
    }
        }else {
            $message = "Vous devez choisir une photo de profil";
        }

}else{
    $message = "Veuillez remplir tous les champs ";
}

}
?>
