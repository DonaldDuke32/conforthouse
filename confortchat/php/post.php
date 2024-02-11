<?php
require ("../database/database.php");

if(isset($_POST)){
         $uniqid = uniqid();
       
        $sender = $_POST['sender'];
        $statut_sender = $_POST['senderStatut'];
        $receiver = $_POST['receiver'];
        $statut_receiver = $_POST['receiverStatut'];

        if (isset($_POST['msg']) && !empty($_POST['msg'])) {
         $msg = htmlspecialchars(addslashes(trim($_POST['msg'])));
         $type = "text";

         $sql = $bdd->prepare("INSERT INTO `chat`(`id_messages`, `mail_sender`, `mail_receiver`,`statut_sender`,`statut_receiver`,`text`, `type`,`dates`) VALUES ('$uniqid','$sender','$receiver','$statut_sender','$statut_receiver','$msg','$type',now())");
         $sql->execute();
         
         
        }

   }
