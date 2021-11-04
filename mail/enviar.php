<?php

$name = $_POST['name'];
$email = $_POST['email'];
$m_subject = $_POST['subject'];
$message = $_POST['message'];

$to = "juanpablosanchez744@gmail.com"; // Change this email to your //
$subject = "contacto desde la pagina web";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

$mail($to, $subject, $body, $header)
  
?>
