<?php

    if (isset($_POST['email_verify'])){

        if ($_GET['t'] == 'ai'){
            if (!empty($_POST['email'])){

                require_once('database/database.php');
    
                $req = $bdd->prepare('SELECT * FROM demarcheurs WHERE email=:email');
                $req->bindvalue(':email', $_POST['email']);
                $req->execute();
    
                $data_verify = $req->fetch();
    
                if ($data_verify){
    
                    if ($data_verify['validation'] == 0){
    
                        $succesMsg = "Votre compte n'est pas actif. Veuillez consultez vos mails et l'activez. Merci !";
    
                    }elseif($data_verify['validation'] == 1){
    
                        session_start();
    
                        $_SESSION['email'] = $data_verify['email'];
    
                        header('Location:recup-password.php?t=ai');
                    }else{
                        $errorMsg = "......";
                    }
    
                }else{
                    $errorMsg = "Entrer une adresse email valide !";
                }
    
            }else{
                $errorMsg = "Entrez une adresse email SVP!";
            }
        }elseif ($_GET['t'] == 'u'){
            if (!empty($_POST['email'])){

                require_once('database/database.php');
    
                $req = $bdd->prepare('SELECT * FROM collocusers WHERE email=:email');
                $req->bindvalue(':email', $_POST['email']);
                $req->execute();
    
                $data_verify = $req->fetch();
    
                if ($data_verify){
    
                    session_start();
    
                        $_SESSION['email'] = $data_verify['email'];
    
                        header('Location:recup-password.php?t=u');
    
                }else{
                    $errorMsg = "Entrer une adresse email valide !";
                }
    
            }else{
                $errorMsg = "Entrez une adresse email SVP!";
            }
        }else{
            header('location:404.php');
        }

    }





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification email</title>
    <link rel="stylesheet" href="css/csscommun.css">

    <style>
        body{
        box-sizing:border-box;
        margin:0;
        padding:50px 0;
        /*background-color: rgb(181,172,73);*/
        background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)),url('banner-4.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height:auto;
    }
    section{
        margin-top: 150px!important;
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

    <form action="" method="post">
        <div class="email">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <input type="submit" value="Connexion" name="email_verify" class="submit">
    </form>
    </div>
   </section>


</body>
</html>