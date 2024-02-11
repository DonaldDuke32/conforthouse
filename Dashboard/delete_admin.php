<?php

    require_once('../database.php');

    $deletePub = $bdd->prepare('DELETE FROM homeadmin WHERE username=:username');
    $deletePub->bindvalue(':username', $_GET['username']);
    $deletePub->execute();

    echo "<script type=\"text/javascript\">alert('Administrateur supprimé avec succès');document.location.href='profile-posts.php';</script>";
