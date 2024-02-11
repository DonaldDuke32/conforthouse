<?php
$noms = addslashes(htmlspecialchars(strip_tags(trim($_POST['noms']))));
$email = addslashes(htmlspecialchars(strip_tags(trim($_POST['email']))));
$phone = addslashes(htmlspecialchars(strip_tags(trim($_POST['phone']))));
$subject = addslashes(htmlspecialchars(strip_tags(trim($_POST['subject']))));
$messages = addslashes(htmlspecialchars(strip_tags(trim($_POST['message']))));


$to = "ihousespport@gmail.com";


$message = "
<html>
<head>
<title>Message</title>
</head>
<body>
<h1>Mail envoyé depuis le ConfortHouse </h1></br></br></br>
<p>'.$noms.'</p>
<p>'.$phone.'</p>
<p><a href='mailto:'.$email.'>'.$email.'</a></p>
'.$messages.'
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo "OK";


?>