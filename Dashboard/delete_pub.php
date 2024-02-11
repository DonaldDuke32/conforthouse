<?php

    require_once('../database/database.php');

    $deletePub = $bdd->prepare('DELETE FROM annonces WHERE id=:id');
    $deletePub->bindvalue(':id', $_GET['id']);
    $deletePub->execute();

    header('Location:index.php');
