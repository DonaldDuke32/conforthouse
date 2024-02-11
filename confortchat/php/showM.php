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


$selectMsg = $bdd->prepare("SELECT * FROM chat WHERE mail_sender = '$meMail'  OR  mail_receiver = '$meMail' group by (mail_receiver AND mail_sender)   ");
$selectMsg->execute();
$rowMsg = $selectMsg->rowcount();
if ($rowMsg == true) {
    while ($dataMsg = $selectMsg->fetch()) {
        if ($dataMsg['mail_sender'] == $meMail && $dataMsg['mail_receiver'] != $meMail) {
            if ($dataMsg['statut_receiver'] == "demarcheur") {
                $recv = $dataMsg['mail_receiver'];

                $select_by_group = $bdd->query("SELECT * FROM chat WHERE (mail_sender = '$meMail' AND mail_receiver = '$recv')  OR  (mail_sender='$recv' AND mail_receiver = '$meMail') ORDER BY id DESC LIMIT 1");
                $row_msg = $select_by_group->rowCount();
                if($row_msg == 1){
                    while ($a = $select_by_group->fetch()) {
                        $selectProfile = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$a[mail_receiver]' ");
                $selectProfile->execute();
                $dataDemarcheur = $selectProfile->fetch();
                $name = $dataDemarcheur['nom'].' '.$dataDemarcheur['prenoms'];
                $profil = $dataDemarcheur['photo'];
                $dMail = $dataDemarcheur['email'];
                $etats = "demarcheur";
                ?>
                <!-- juju -->                               
                <a href="chat.php?sdr=<?=$meMail?>&&stsdr=<?=$a['statut_sender']?>&&rcv=<?=$dMail?>&&strcv=<?=$etats?>" class="card border-0 text-reset">
                        <div class="card-body">
                            <div class="row gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        <img src="../<?=$profil?>" alt="#" class="avatar-img">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="me-auto mb-0"><?=$name?></h5>
                                        <span class="text-muted extra-small ms-2">
                                        
                                        <?=$a['dates']?>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="line-clamp me-auto">
                                        <?php 
                                            $selectLost = $bdd->prepare("SELECT * FROM chat WHERE (mail_sender = '$dataMsg[mail_sender]' AND mail_receiver = '$dataMsg[mail_receiver]' AND statut_receiver = '$dataMsg[statut_receiver]' AND statut_sender = '$dataMsg[statut_sender]' ) OR (mail_sender = '$dataMsg[mail_receiver]' AND mail_receiver = '$dataMsg[mail_sender]' AND statut_receiver = '$dataMsg[statut_sender]' AND statut_sender = '$dataMsg[statut_receiver]' ) ORDER BY dates DESC LIMIT 1");
                                            $selectLost->execute();
                                            $dataLost = $selectLost->fetch();
                                            if ($dataLost['type'] == "text") {
                                                echo $dataLost['text'];

                                            }elseif ($dataLost['type'] == "images") {
                                                echo "photo";
                                            }
                                        ?>
                                        </div>

                                        
                                                <?php
                                                    $selectState = $bdd->prepare("SELECT * FROM chat WHERE mail_sender = '$meMail' AND mail_receiver = '$dMail' AND statut = '0' ");
                                                    $selectState->execute();
                                                    $rowStats = $selectState->rowCount();
                                                    if ($rowStats == true) {
                                                        ?>
                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span><?=$rowStats?></span>
                                                            </div>
                                                        <?php
                                                    }else {
                                                        
                                                    }
                                                ?>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-body -->
                    </a>
<!-- Card -->
            <?php
                    }
                }
 
                
                
                
            }elseif ($dataMsg['statut_receiver'] == "utilisateur" ) {
                $selectProfile = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataMsg[mail_receiver]' ");
                $selectProfile->execute();
                $dataUser = $selectProfile->fetch();
                $name = $dataUser['username'];
                $profil = "assets/img/avatar.png";
                $dMail = $dataUser['email'];
                $etats = "utilisateur";
                ?>
                <!-- juju -->                               
                <a href="chat.php?sdr=<?=$meMail?>&&stsdr=<?=$dataMsg['statut_sender']?>&&rcv=<?=$dMail?>&&strcv=<?=$etats?>" class="card border-0 text-reset">
                        <div class="card-body">
                            <div class="row gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        <img src="../<?=$profil?>" alt="#" class="avatar-img">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="me-auto mb-0"><?=$name?></h5>
                                        <span class="text-muted extra-small ms-2">
                                       
                                         <?=$dataMsg['dates']?>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="line-clamp me-auto">
                                        <?php 
                                            $selectLost = $bdd->prepare("SELECT * FROM chat WHERE (mail_sender = '$dataMsg[mail_sender]' AND mail_receiver = '$dataMsg[mail_receiver]' AND statut_receiver = '$dataMsg[statut_receiver]' AND statut_sender = '$dataMsg[statut_sender]' ) OR (mail_sender = '$dataMsg[mail_receiver]' AND mail_receiver = '$dataMsg[mail_sender]' AND statut_receiver = '$dataMsg[statut_sender]' AND statut_sender = '$dataMsg[statut_receiver]' ) ORDER BY dates DESC LIMIT 1");
                                            $selectLost->execute();
                                            $dataLost = $selectLost->fetch();
                                            if ($dataLost['type'] == "text") {
                                                echo $dataLost['text'];

                                            }elseif ($dataLost['type'] == "images") {
                                                echo "photo";
                                            }
                                        ?>
                                        </div>

                                        
                                                <?php
                                                    $selectState = $bdd->prepare("SELECT * FROM chat WHERE mail_sender = '$meMail' AND mail_receiver = '$dMail' AND statut = '0' ");
                                                    $selectState->execute();
                                                    $rowStats = $selectState->rowCount();
                                                    if ($rowStats == true) {
                                                        ?>
                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span><?=$rowStats?></span>
                                                            </div>
                                                        <?php
                                                    }else {
                                                        
                                                    }
                                                ?>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-body -->
                    </a>
<!-- Card -->
            <?php
            }else {
                echo "pop";
            }
            
           
        }elseif ($dataMsg['mail_receiver'] == $meMail) {
            if ($dataMsg['statut_sender'] == "demarcheur") {
                $selectProfile = $bdd->prepare("SELECT * FROM demarcheurs WHERE email = '$dataMsg[mail_receiver]' ");
                $selectProfile->execute();
                $dataDemarcheur = $selectProfile->fetch();
                $name = $dataDemarcheur['nom'].' '.$dataDemarcheur['prenoms'];
                $profil = $dataDemarcheur['profil'];
                $dMail = $dataDemarcheur['email'];
                $etats = "demarcheur";
                ?>
                <!-- Card -->                               
                    <a href="chat.php?sdr=<?=$meMail?>&&stsdr=<?=$dataMsg['statut_sender']?>&&rcv=<?=$dMail?>&&strcv=<?=$etats?>" class="card border-0 text-reset">
                        <div class="card-body">
                            <div class="row gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        <img src="../<?=$profil?>" alt="#" class="avatar-img">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="me-auto mb-0"><?=$name?></h5>
                                        <span class="text-muted extra-small ms-2">
                                       
                                        <?=$dataMsg['dates']?>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="line-clamp me-auto">
                                        <?php 
                                            $selectLost = $bdd->prepare("SELECT * FROM chat WHERE (mail_sender = '$dataMsg[mail_sender]' AND mail_receiver = '$dataMsg[mail_receiver]' AND statut_receiver = '$dataMsg[statut_receiver]' AND statut_sender = '$dataMsg[statut_sender]' ) OR (mail_sender = '$dataMsg[mail_receiver]' AND mail_receiver = '$dataMsg[mail_sender]' AND statut_receiver = '$dataMsg[statut_sender]' AND statut_sender = '$dataMsg[statut_receiver]' ) ORDER BY dates DESC LIMIT 1");
                                            $selectLost->execute();
                                            $dataLost = $selectLost->fetch();
                                            if ($dataLost['type'] == "text") {
                                                echo $dataLost['text'];

                                            }elseif ($dataLost['type'] == "images") {
                                                echo "photo";
                                            }
                                        ?>
                                        </div>

                                        
                                                <?php
                                                    $selectState = $bdd->prepare("SELECT * FROM chat WHERE mail_sender = '$dMail' AND mail_receiver = '$meMail' AND statut = '0' ");
                                                    $selectState->execute();
                                                    $rowStats = $selectState->rowCount();
                                                    if ($rowStats == true) {
                                                        ?>
                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span><?=$rowStats?></span>
                                                            </div>
                                                        <?php
                                                    }else {
                                                        
                                                    }
                                                ?>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-body -->
                    </a>
<!-- Card -->
<?php
            }elseif ($dataMsg['statut_sender'] == "utilisateur" ) {
                $selectProfile = $bdd->prepare("SELECT * FROM collocusers WHERE email = '$dataMsg[mail_receiver]' ");
                $selectProfile->execute();
                $dataUser = $selectProfile->fetch();
                $name = $dataUser['username'];
                $profil = "assets/img/avatar.png";
                $dMail = $dataUser['email'];
                $etats = "utilisateur";
                ?>
                <!-- Card -->                               
                    <a href="chat.php?sdr=<?=$meMail?>&&stsdr=<?=$dataMsg['statut_sender']?>&&rcv=<?=$dMail?>&&strcv=<?=$etats?>" class="card border-0 text-reset">
                        <div class="card-body">
                            <div class="row gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        <img src="../<?=$profil?>" alt="#" class="avatar-img">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="me-auto mb-0"><?=$name?></h5>
                                        <span class="text-muted extra-small ms-2">
                                       
                                        <?=$dataMsg['dates']?>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="line-clamp me-auto">
                                        <?php 
                                            $selectLost = $bdd->prepare("SELECT * FROM chat WHERE (mail_sender = '$dataMsg[mail_sender]' AND mail_receiver = '$dataMsg[mail_receiver]' AND statut_receiver = '$dataMsg[statut_receiver]' AND statut_sender = '$dataMsg[statut_sender]' ) OR (mail_sender = '$dataMsg[mail_receiver]' AND mail_receiver = '$dataMsg[mail_sender]' AND statut_receiver = '$dataMsg[statut_sender]' AND statut_sender = '$dataMsg[statut_receiver]' ) ORDER BY dates DESC LIMIT 1");
                                            $selectLost->execute();
                                            $dataLost = $selectLost->fetch();
                                            if ($dataLost['type'] == "text") {
                                                echo $dataLost['text'];

                                            }elseif ($dataLost['type'] == "images") {
                                                echo "photo";
                                            }
                                        ?>
                                        </div>

                                        
                                                <?php
                                                    $selectState = $bdd->prepare("SELECT * FROM chat WHERE mail_sender = '$dMail' AND mail_receiver = '$meMail' AND statut = '0' ");
                                                    $selectState->execute();
                                                    $rowStats = $selectState->rowCount();
                                                    if ($rowStats == true) {
                                                        ?>
                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span><?=$rowStats?></span>
                                                            </div>
                                                        <?php
                                                    }else {
                                                        
                                                    }
                                                ?>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-body -->
                    </a>
<!-- Card -->
<?php
            }
           
    }
    }
}else {
    ?>
hyy
    <?php
}

   





?>


