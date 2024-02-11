<?php
require ("../database/database.php");

if(isset($_POST)){
         $uniqid = uniqid();
         
        $id_sender = "2";
        $id_receiver = "5";
        $mail_sender = "test@gmail.com";
        $mail_receiver = "ghost@gmail.com";


        if(isset($_FILES['file']) && !empty($_FILES['file'])){
         $type = "images";

            
                $filename = date('Y-m-d-H-i-s').uniqid().$_FILES['file']['name'];
             
                $target_file = '../upload/'.$filename;
                move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
               
                
                $sql = $bdd->prepare("INSERT INTO `chat`(`id_messages`, `id_sender`, `id_receiver`, `mail_sender`, `mail_receiver`, `images`, `type`,`save_date`) VALUES ('$uniqid','$id_sender','$id_receiver','$mail_sender','$mail_receiver','$target_file','$type',now())");
                $sql->execute();
                echo "1";
                
                

        
                
        }

   }
