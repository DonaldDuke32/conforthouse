<?php

    require_once('../database/database.php');

    $deletePub = $bdd->prepare('DELETE FROM collocannonces WHERE id=:id');
    $deletePub->bindvalue(':id', $_GET['id']);
    $deletePub->execute();

    echo "<script type=\"text/javascript\">alert('Demande de colocation supprimé avec succès');document.location.href='coloc.php';</script>";
