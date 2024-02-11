<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/sweetalert.min.js"></script>
    <title>Validation</title>
</head>
<body>
<?php




require ("database/database.php");
if (isset($_GET['w']) && isset($_GET['v']) && isset($_GET['m'])  && !empty($_GET['w']) && !empty($_GET['v']) && !empty($_GET['m'])) {
    $token = $_GET['w'];
    $validation = $_GET['v'];
    $mail = $_GET['m'];

    $selectAccount = $bdd->prepare("SELECT * FROM demarcheurs WHERE token = '$token' AND email = '$mail' AND validation = '$validation'  ");
    $selectAccount->execute();
    $rowAccount = $selectAccount->rowCount();
    if ($rowAccount == true) {
        $updateStat = $bdd->prepare("UPDATE demarcheurs SET token = 'Valider', validation = '1' ");
        $updateStat->execute();

    ?>
        <script>
            swal("Reussi","Votre mail à bien été vérifié","success")
        </script>
    <?php

        echo "Vous serez redirigé automatiquement...";

        ?>
            <script>
                var delay = setTimeout(() => {
                    window.location="connexion.php";
                }, 5000);
            </script>
        <?php
    }
}

?>
</body>
</html>

