<?php

  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();

  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';

  $mail->Username = 'siglooo506@gmail.com';
  $mail->Password = 'gaby18012001';

  $mail->setFrom($_POST['email'], $_POST['name' . ' ' . 'lastName']);
  $mail->addAddress('siglooo506@gmail.com');
  $mail->addReplyTo($_POST['email'], $_POST['name' . ' ' . 'lastName']);

  $mail->isHTML(true);
  $mail->Subject = 'Registro del usuario: ' . $_POST['name' . ' ' . 'lastName'];
  $mail->Body = '<h1 align=center>Nombre: ' . $_POST['name']
	  . '<br>Apellido: ' . $_POST['lastName']
	  . '<br>Email: ' . $_POST['email']
	  . '<br>Password: ' . $_POST['password'] . '</h1>';
  if (!$mail->send()) {
    include 'Views/view_incorrect.php';
  } else {
    include 'Views/view_correct.php';
  }


?>
