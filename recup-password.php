<?php

session_start();


    if (isset($_POST['password_recup'])){

        if ($_GET['t'] = 'ai'){
            if (!empty($_POST['password']) && $_POST['password'] == $_POST['password1']){

                $email = $_SESSION['email'];
    
                require_once('database/database.php');
    
                $update = $bdd->prepare("UPDATE demarcheurs SET mdp=:password WHERE email=:email");
                $update->bindvalue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
                $update->bindvalue(':email', $email);
    
                $succes = $update->execute();
    
                if ($succes){
                    echo "<script type=\"text/javascript\">alert('Mot de passe changé');document.location.href='connexion.php';</script>";
                }
                else{
                    echo 'ECHEC';
                }
    
                // CANDIDE CODE LA PARTIE FRONT END DE LA RECUPERATION DE PASSWORD GOOD LUCK!!!!!!!!!!!!
    
    
    
    
            }
        }else{
            if (!empty($_POST['password']) && $_POST['password'] == $_POST['password1']){

                $email = $_SESSION['email'];
    
                require_once('database/database.php');
    
                $update = $bdd->prepare("UPDATE collocusers SET mdp=:password WHERE email=:email");
                $update->bindvalue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
                $update->bindvalue(':email', $email);
    
                $succes = $update->execute();
    
                if ($succes){
                    echo "<script type=\"text/javascript\">alert('Mot de passe changé');document.location.href='connexion.php';</script>";
                }
                else{
                    echo 'ECHEC';
                }
    
                // CANDIDE CODE LA PARTIE FRONT END DE LA RECUPERATION DE PASSWORD GOOD LUCK!!!!!!!!!!!!
    
    
    
    
            }
        }

    }




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification mot de passe</title>
    <link rel="stylesheet" href="css/cssconnexion.css">

    <style>
        body{
        box-sizing:border-box;
        margin:0;
        padding:50px 0;
        /*background-color: rgb(181,172,73);*/
        background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)),url('banner-2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height:auto;
    }
    section{
        margin-top:100px!important;
        width:350px;
        margin:auto;
        background-color: gainsboro;
        color:brown;
        padding:10px 2px;
        border-radius:5px;
    }
    section .form h1{
        color:white;
        text-align:center;
        letter-spacing:2px;
        font-family:fantasy;
    }
    section .form form{
        padding-left:30px;
    }
    section .form form input, select{
        width:250px;
        height:25px;
        border:2px solid green;
        border-radius:10px;
        font-family:cursive;
    }
    section .form form label{
        letter-spacing:1px;
        font-family:fantasy;
    }
    section .form form .submit{
        height:28px;
        width:260px;
        background-color:brown;
        font-size:20px;
        line-height:1px;
        color:white;
        cursor:pointer;
        letter-spacing:2px;
        border:transparent;
        margin-top:20px;
    }
    section .form form .submit:hover{
        background-color: crimson;
        transition:1s;

    }
    section .form form select{
        height:28px;
        width:250px;
    }
    section .form form .poli_condi{
        display:inline-flex;
    }
    section .form form .poli_condi input{
        width: 30px!important;
        margin-right:5px;
    }
    
    </style>
</head>
<body>

<section>

    <div class="form">

        <div class="error" style="background-color:black;font-size:18px;"><span style="color:red;"><?php if (isset($errorMsg)) echo $errorMsg; ?></span></div>
        <div class="succes" style="background-color:black;font-size:18px;"><span style="color:green;"><?php if (isset($succesMsg)) echo $succesMsg; ?></span></div>

        <h1 style="color:crimson;">Récupération du mot de passe</h1>

        <form action="" method="post">
            <div class="password">
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <div class="password1">
                <label for="password1">Confirmation du mot de passe</label><br>
                <input type="password" name="password1" id="password1">
            </div>
            <input type="submit" value="Connexion" name="password_recup" class="submit">
        </form>
    </div>

</section>
    
</body>
</html>