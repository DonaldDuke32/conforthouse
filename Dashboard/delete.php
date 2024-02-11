<?php

    require_once('../database/database.php');

    $deleteAgentsAnnonces = $bdd->prepare('DELETE FROM annonces WHERE tel=:tel AND email=:email');
    $deleteAgentsAnnonces->bindvalue(':tel', $_GET['tel']);
    $deleteAgentsAnnonces->bindvalue(':email', $_GET['email']);
    $deleteAgentsAnnonces->execute();

    $deleteAgents = $bdd->prepare('DELETE FROM demarcheurs WHERE id=:id AND telephone=:tel AND email=:email');
    $deleteAgents->bindvalue(':id', $_GET['id']);
    $deleteAgents->bindvalue(':tel', $_GET['tel']);
    $deleteAgents->bindvalue(':email', $_GET['email']);
    $deleteAgents->execute();

    echo "<script type=\"text/javascript\">alert('Agents supprimé avec succès');document.location.href='demarcheurs.php';</script>";







