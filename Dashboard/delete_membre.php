<?php

    require_once('../database.php');

    $deletePub = $bdd->prepare('DELETE FROM hometeam WHERE id=:id');
    $deletePub->bindvalue(':id', $_GET['id']);
    $deletePub->execute();

    echo "<script type=\"text/javascript\">alert('Membre supprimé avec succès');document.location.href='profile-posts.php';</script>";
