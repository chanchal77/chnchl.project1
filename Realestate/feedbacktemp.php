<?php
//$Email = $_POST['email'];

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->Host='smtp.gmail.com';
$mail->Port=587;

$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='chanchalbendkule7@gmail.com';
$mail->Password='prabhunath';
$mail->setFrom=($_POST['email']);
$mail->addAddress('chanchalbendkule77@gmail.com');
$mail->addReplyTo($_POST['email']);
$mail->isHTML(true);
$mail->Subject='Form Submission:'.$_POST['subject'];

if(!$mail->send())
{
	echo"sry";
}else{
	echo"ok";
}
?>