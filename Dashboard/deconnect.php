<?php

session_start();
if (isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header('Location:authadmin/sign-in.php');
}else{
    header('Location:authadmin/sign-in.php');
}