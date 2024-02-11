<?php
require ("database/database.php");

if (isset($_POST)) {
    $mymail = $_SESSION['demarcheur_session_mail'];

    $selectMessages = $bdd->prepare("SELECT * FROM tchat  WHERE mail_sender = '$mymail' AND mail_receiver != '$mymail' OR mail_receiver = '$mymail' AND mail_sender != '$mymail' ORDER BY dates DESC");
    $selectMessages->execute();
    
    $rowCount = $selectMessages->rowCount();
    if ($rowCount == true) {
   
   }
}

$sql = 'SELECT titre, date, membre.login as expediteur, messages.id as id_message FROM messages, membre WHERE id_destinataire="'.$_SESSION['id'].'" AND id_expediteur=membre.id ORDER BY date DESC';

$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$nb = mysql_num_rows($req);

/*
$selectUser = $bdd->prepare("SELECT * FROM collocusers ");
    $selectUser->execute();
 while ($dataCatch = $selectMessages->fetch()) {

       if ($mymail == $dataCatch['mail_sender']) {
        $select_receiver = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataCatch[mail_receiver]' AND id = '$dataCatch[id_receiver]' ");
        $select_receiver->execute();
        $rowReceiver = $select_receiver->rowCount();
        if ($rowReceiver == true) {
            $dataReceiver = $select_receiver->fetch();
            $nameReceiver = $dataReceiver['username'];
            $categorie = "Utilisateur";
            $photo = "assets/images/avatar.png";
            
        }else{
          $select_receiver = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$dataCatch[mail_receiver]' AND id = '$dataCatch[id_receiver]' ");
        $select_receiver->execute();
        $rowReceiver = $select_receiver->rowCount();
        if ($rowReceiver == true) {
            $dataReceiver = $select_receiver->fetch();
            $nameReceiver = $dataReceiver['nom'].' '.$dataReceiver['prenoms'];
            $categorie = "Demarcheur";
            if ($dataReceiver['photo']!= null) {
                $photo = $dataReceiver['photo'];
            }else {
                $photo = "assets/images/avatar.png";
            }
            
        }else{

        }
        }



        ?>
       <a href="messages.php?mail=<?=$dataCatch['mail_receiver']?>">
       <div class="card">

       <figure class="author-thumb"><img src="<?=$photo?>" alt=""></figure>
       
       <div class="card-title"><a href="messages.php?mail=<?=$dataCatch['mail_receiver']?>"><h4><?=$nameReceiver?></h4></a></div>

       <div> <?=$dataCatch['messages']?></div>
       </div>
       </a>
        <?php
       }elseif($mymail == $dataCatch['mail_receiver']){
        $select_receiver = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataCatch[mail_sender]' AND id = '$dataCatch[id_sender]' ");
        $select_receiver->execute();
        $rowReceiver = $select_receiver->rowCount();
        if ($rowReceiver == true) {
            $dataReceiver = $select_receiver->fetch();
            $nameReceiver = $dataReceiver['username'];
            $categorie = "Utilisateur";
            $photo = "assets/images/avatar.png";
            
        }else{
          $select_receiver = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$dataCatch[mail_sender]' AND id = '$dataCatch[id_sender]' ");
        $select_receiver->execute();
        $rowReceiver = $select_receiver->rowCount();
        if ($rowReceiver == true) {
            $dataReceiver = $select_receiver->fetch();
            $nameReceiver = $dataReceiver['nom'].' '.$dataReceiver['prenoms'];
            $categorie = "Demarcheur";
            if ($dataReceiver['photo']!= null) {
                $photo = $dataReceiver['photo'];
            }else {
                $photo = "assets/images/avatar.png";
            }
            
        }else{

        }
        }





        ?>
        <div>
         <a href="messages.php?mail=<?=$dataCatch['mail_sender']?>"><?=$dataCatch['mail_sender']?></a>
         <div>
         <?=$dataCatch['messages']?>
         </div>
        </div>
        
         <?php
       }else{

       }


    }
    */