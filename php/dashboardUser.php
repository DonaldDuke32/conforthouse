<?php

if (isset($_POST['publier'])) {
    // Verifier si tous les champs ont été remplis 
    if (!empty($_POST['personne']) && !empty($_POST['categorie']) && !empty($_POST['description']) && !empty($_POST['type'])  && !empty($_POST['localisation'])  && !empty($_POST['prix'])) {

        //Generer une id unique pour chaque annonce
        $unique_id = uniqid();
        $sql = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]' ");
        $sql->execute();
        $rowcount = $sql->rowCount();
        if ($rowcount == true) {
            $dataUser = $sql->fetch();
        }else {
            echo "jesaispas";
        }
        
        $nom = $dataUser['username'];
        $personne = htmlspecialchars(addslashes(trim(strip_tags($_POST['personne']))));
        $categorie = htmlspecialchars(addslashes(trim(strip_tags($_POST['categorie']))));
        $description = htmlspecialchars(addslashes(trim(strip_tags($_POST['description']))));
        $type = htmlspecialchars(addslashes(trim(strip_tags($_POST['type']))));
        $localisation = htmlspecialchars(addslashes(trim(strip_tags($_POST['localisation']))));
        $prix = htmlspecialchars(addslashes(trim(strip_tags($_POST['prix']))));

        //Verification de l'existence pour eviter l'envoi en double
        $select_old = $bdd->prepare("SELECT * FROM collocannonces WHERE username = '$nom' AND description = '$description' ");
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
                    // renommer les differents fichiers 
                    $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];
                    // Chemin de téléchargement
                    $target_file = 'upload/collocation/'.$filename;
                    // Déplacement/téléchargement des fichiers
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file);
                    // Insertion des fichiers choisis
                    $sql = $bdd->prepare("INSERT INTO collocimg (`id_annonce`, `file`, `save_date`) VALUES('$unique_id','$target_file',now()) ");
                    $sql->execute();
                }
                //Insertion des informatons
                $sqls = $bdd->prepare("INSERT INTO collocannonces (`id_annonce`, `username`, `categorie`, `personne`, `description`, `type`, `localisation`, `prix`, `save_date`) VALUES ('$unique_id','$nom','$categorie','$personne','$description','$type','$localisation','$prix',now()) ");
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

if (isset($_POST['deleteAnnonce'])) {
    if (!empty($_POST['id_annonce'])) {
        $id_annonce = $_POST['id_annonce'];
        $sqls = $bdd->prepare("DELETE FROM collocannonces WHERE id_annonce = '$id_annonce' ");
        $sqls->execute();
        $reponse = "Suppression reussi";
    }
}

/* Modifier une annonce */

if (isset($_POST['modify'])) {
    // Verifier si tous les champs ont été remplis 
    if (!empty($_POST['personne']) && !empty($_POST['categorie']) && !empty($_POST['description']) && !empty($_POST['type'])  && !empty($_POST['localisation'])  && !empty($_POST['prix'])) {

        //Generer une id unique pour chaque annonce
        $unique_id = $_GET['post'];
        
        $nom = $datas['username'];
        $personne = htmlspecialchars(addslashes(trim(strip_tags($_POST['personne']))));
        $categorie = htmlspecialchars(addslashes(trim(strip_tags($_POST['categorie']))));
        $description = htmlspecialchars(addslashes(trim(strip_tags($_POST['description']))));
        $type = htmlspecialchars(addslashes(trim(strip_tags($_POST['type']))));
        $localisation = htmlspecialchars(addslashes(trim(strip_tags($_POST['localisation']))));
        $prix = htmlspecialchars(addslashes(trim(strip_tags($_POST['prix']))));

        //Verification de l'existence pour eviter l'envoi en double
        $select_old = $bdd->prepare("SELECT * FROM collocannonces WHERE username = '$nom' AND description = '$description' ");
        $select_old->execute();
        // Recuperer le nombre de résultat
        $row = $select_old->rowCount();
        if ($row == true) {
            $message = "Une publication identique existe déja ";
                     
        } else {
            $delete_old = $bdd->prepare("DELETE FROM collocimg WHERE id_annonce = '$_GET[post]' ");
            $delete_old->execute();
            //Compter le nombre de fichier envoyé
            $countfiles = count($_FILES['file']['tmp_name']);
            //Verifier l'existence de fichiers
            if (!empty($countfiles)) {
                for ($i = 0; $i<$countfiles; $i++) {
                    // renommer les differents fichiers 
                    $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'][$i];
                    // Chemin de téléchargement
                    $target_file = 'upload/collocation/'.$filename;
                    // Déplacement/téléchargement des fichiers
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file);
                    // Insertion des fichiers choisis
                    
                    $sql = $bdd->prepare("INSERT INTO collocimg (`id_annonce`, `file`, `save_date`) VALUES('$unique_id','$target_file',now()) ");
                    $sql->execute();
                }
            }
                //Insertion des informatons
                $sqls = $bdd->prepare("UPDATE collocannonces SET `categorie` = '$categorie', `personne`='$personne', `description`='$description', `type`='$type', `localisation`='$localisation', `prix`='$prix' WHERE id_annonce = '$_GET[post]'  ");
                $sqls->execute();
            
            $reponse = "Votre annonce à été modifié avec succes";
                          
    }
    } else {
        $message = "Veuillez remplir tous les champs";

    }
}


/* Modifier le profil*/

if (isset($_POST['profil'])) {
    if (!empty($_POST['username']) && !empty($_POST['whatsapp']) && !empty($_POST['facebook'])) {
        $username = htmlspecialchars(trim(strip_tags(addslashes($_POST['username']))));
        $whatsapp = htmlspecialchars(trim(strip_tags(addslashes($_POST['whatsapp']))));
        $facebook = htmlspecialchars(trim(strip_tags(addslashes($_POST['facebook']))));

        $verif = $bdd->prepare("SELECT * FROM collocusers WHERE username = '$username' AND whatsapp = '$whatsapp' AND email != '$_SESSION[user_session_mail]' OR whatsapp = '$whatsapp' AND email != '$_SESSION[user_session_mail]'  ");
        $verif->execute();
        $rowC = $verif->rowCount();
        if ($rowC == true) {
            $message = "Un compte existe deja sous ces identifiants";
        }else {
            $sql = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]' ");
            $sql->execute();
            $rowcount = $sql->rowCount();
            if ($rowcount == true) {
                $dataUser = $sql->fetch();
            }else {
    
            }
            $usernameold = $dataUser['username'];
            $sql = $bdd->prepare("UPDATE collocannonces SET username = '$username' WHERE username = '$usernameold' ");
            $sql->execute();
            $sqls = $bdd->prepare("UPDATE collocusers SET username = '$username', whatsapp = '$whatsapp', facebook = '$facebook' WHERE email = '$_SESSION[user_session_mail]' ");
            $sqls->execute();
            $reponse = "Votre modification a été faite avec succès";
        }
    }else {
        $message = "Veuillez remplir tous les champs ";
    }
}
?>
