<?php
@session_start();
$host = "localhost";
$bdd = "home";
$user = "root";
$pass = "";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur'.$e->getMessage());
}



if (isset($_POST['submit_news'])) {
    if (!empty($_POST['email'])) {

 $news_email = addslashes(htmlspecialchars(strip_tags(trim($_POST['email']))));

$select_em = $bdd->query("SELECT * FROM newsletter WHERE email='$news_email' AND statut='1'");
$rw = $select_em->rowCount();

if ($rw <= 0) {
$insert = "INSERT INTO `newsletter`(`email`) VALUES ('$news_email')";
$req = $bdd->prepare($insert);
$req->execute();
    $reponse="Merci d'avoir effectué votre abonnement à notre newsletter !!";
    }else{
        $message="Vous avez déjà éffectué votre abonnement !!";
    }
}else{
    $message="Veuillez entrer votre adresse email !!";
}
}