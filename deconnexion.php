<?php
session_start();
session_destroy();
unset($_COOKIE['confh_8524515_u']);
unset($_COOKIE['confh_8524515_d']);
header("location:index.php");
