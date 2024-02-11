<?php
require ("../database/database.php");


if (isset($_SESSION['user_session_mail'])) {
    $select_online = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$_SESSION[user_session_mail]'  ");
    $select_online->execute();
    $rowcount = $select_online->rowCount();
    if ($rowcount == true) {
        $datas = $select_online->fetch();
        $meMail = $datas['email'];
        $status_connect = "user";

    }else {
        header("location: 404.php");
    }

    
}elseif (isset($_SESSION['demarcheur_session_mail'])) {
    $select_online = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$_SESSION[demarcheur_session_mail]'  ");
    $select_online->execute();
    $rowcount = $select_online->rowCount();
    if ($rowcount == true) {
        $datas = $select_online->fetch();
        $meMail = $datas['email'];
        $status_connect = "demarcheur";
    }else {
        header("location: 404.php");
    }


}else {
  
}

if (isset($_POST['sender'] , $_POST['senderStatut'] , $_POST['receiver'] , $_POST['receiverStatut'])) {
    $mail_sender = $_POST['sender'];
    $mail_receiver = $_POST['receiver'];
    $senderStatut = $_POST['senderStatut'];
    $receiverStatut = $_POST['receiverStatut'];

    $updateStatut = $bdd->prepare("UPDATE chat SET statut = '1' WHERE (mail_sender = '$mail_sender' AND mail_receiver = '$mail_receiver' AND statut_receiver = '$receiverStatut' AND statut_sender = '$senderStatut' ) OR (mail_sender = '$mail_receiver' AND mail_receiver = '$mail_sender' AND statut_receiver = '$senderStatut' AND statut_sender = '$receiverStatut' ) ");
    $updateStatut->execute();

    $selectMessage = $bdd->prepare("SELECT * FROM chat WHERE (mail_sender = '$mail_sender' AND mail_receiver = '$mail_receiver' AND statut_receiver = '$receiverStatut' AND statut_sender = '$senderStatut' ) OR (mail_sender = '$mail_receiver' AND mail_receiver = '$mail_sender' AND statut_receiver = '$senderStatut' AND statut_sender = '$receiverStatut' )  ");
    $selectMessage->execute();
    $rowMessage = $selectMessage->rowCount();
    if ($rowMessage == true) {
        while ($dataMsg = $selectMessage->fetch()) {
            if ($dataMsg['mail_sender'] == $meMail) {
                if ($dataMsg['statut_sender'] == "utilisateur" ) {
                    $selectProfile = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataMsg[mail_sender]' ");
                    $selectProfile->execute();
                    $dataUser = $selectProfile->fetch();
                    $name = $dataUser['username'];
                    $profil = "assets/img/avatar.png";
                    $dMail = $dataUser['email'];
                    $etats = "utilisateur";
                    if ($dataMsg['type'] == "text") {
                       ?>
                     <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="../<?=$profil?>" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p><?=$dataMsg['text']?></p>
                                                    </div>   
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                            </div>
                                        </div>
                                    </div>       
                       <?php
                    }elseif ($dataMsg['type'] == "images") {
                        ?>
                            <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="../<?=$profil?>" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-gallery">
                                                        <div class="row ">
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="<?=$dataMsg['images']?>" data-action="zoom" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                    }
                }else if ($dataMsg['statut_sender'] == "demarcheur") {
                    $selectProfile = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$dataMsg[mail_sender]' ");
                    $selectProfile->execute();
                    $dataDemarcheur = $selectProfile->fetch();
                    $name = $dataDemarcheur['nom'].' '.$dataDemarcheur['prenoms'];
                    $profil = $dataDemarcheur['photo'];
                    $dMail = $dataDemarcheur['email'];
                    $etats = "demarcheur";

                    if ($dataMsg['type'] == "text") {
                        ?>
                      <div class="message message-out">
                                         <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                             <img class="avatar-img" src="../<?=$profil?>" alt="">
                                         </a>
 
                                         <div class="message-inner">
                                             <div class="message-body">
                                                 <div class="message-content">
                                                     <div class="message-text">
                                                         <p><?=$dataMsg['text']?></p>
                                                     </div>   
                                                 </div>
                                             </div>
 
                                             <div class="message-footer">
                                                 <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                             </div>
                                         </div>
                                     </div>       
                        <?php
                     }elseif ($dataMsg['type'] == "images") {
                         ?>
                             <div class="message message-out">
                                         <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                             <img class="avatar-img" src="../<?=$profil?>" alt="">
                                         </a>
 
                                         <div class="message-inner">
                                             <div class="message-body">
                                                 <div class="message-content">
                                                     <div class="message-gallery">
                                                         <div class="row ">
                                                             <div class="col">
                                                                 <img class="img-fluid rounded" src="<?=$dataMsg['images']?>" data-action="zoom" alt="">
                                                             </div>
                                                         </div>
                                                     </div>
 
                                                     <!-- Dropdown -->
                                                     
                                                 </div>
                                             </div>
 
                                             <div class="message-footer">
                                                 <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                             </div>
                                         </div>
                                     </div>
                         <?php
                     }
                
            }
        }elseif ($dataMsg['sender'] != $meMail) {
            if ($dataMsg['statut_sender'] == "utilisateur" ) {
                $selectProfile = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataMsg[mail_sender]' ");
                $selectProfile->execute();
                $dataUser = $selectProfile->fetch();
                $name = $dataUser['username'];
                $profil = "assets/img/avatar.png";
                $dMail = $dataUser['email'];
                $etats = "utilisateur";
                if ($dataMsg['type'] == "text") {
                   ?>
                 <div class="message ">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                        <img class="avatar-img" src="../<?=$profil?>" alt="">
                                    </a>

                                    <div class="message-inner">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="message-text">
                                                    <p><?=$dataMsg['text']?></p>
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="message-footer">
                                            <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                        </div>
                                    </div>
                                </div>       
                   <?php
                }elseif ($dataMsg['type'] == "images") {
                    ?>
                        <div class="message ">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                        <img class="avatar-img" src="../<?=$profil?>" alt="">
                                    </a>

                                    <div class="message-inner">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="message-gallery">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <img class="img-fluid rounded" src="<?=$dataMsg['images']?>" data-action="zoom" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Dropdown -->
                                                
                                            </div>
                                        </div>

                                        <div class="message-footer">
                                            <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                        </div>
                                    </div>
                                </div>
                    <?php
                }
            }else if ($dataMsg['statut_sender'] == "demarcheur") {
                $selectProfile = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$dataMsg[mail_sender]' ");
                $selectProfile->execute();
                $dataDemarcheur = $selectProfile->fetch();
                $name = $dataDemarcheur['nom'].' '.$dataDemarcheur['prenoms'];
                $profil = $dataDemarcheur['photo'];
                $dMail = $dataDemarcheur['email'];
                $etats = "demarcheur";

                if ($dataMsg['type'] == "text") {
                    ?>
                  <div class="message ">
                                     <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                         <img class="avatar-img" src="../<?=$profil?>" alt="">
                                     </a>

                                     <div class="message-inner">
                                         <div class="message-body">
                                             <div class="message-content">
                                                 <div class="message-text">
                                                     <p><?=$dataMsg['text']?></p>
                                                 </div>   
                                             </div>
                                         </div>

                                         <div class="message-footer">
                                             <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                         </div>
                                     </div>
                                 </div>       
                    <?php
                 }elseif ($dataMsg['type'] == "images") {
                     ?>
                         <div class="message ">
                                     <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                         <img class="avatar-img" src="../<?=$profil?>" alt="">
                                     </a>

                                     <div class="message-inner">
                                         <div class="message-body">
                                             <div class="message-content">
                                                 <div class="message-gallery">
                                                     <div class="row ">
                                                         <div class="col">
                                                             <img class="img-fluid rounded" src="<?=$dataMsg['images']?>" data-action="zoom" alt="">
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- Dropdown -->
                                                 
                                             </div>
                                         </div>

                                         <div class="message-footer">
                                             <span class="extra-small text-muted"><?=$dataMsg['dates']?></span>
                                         </div>
                                     </div>
                                 </div>
                     <?php
                 }
            
        }
        }
    }

}

}