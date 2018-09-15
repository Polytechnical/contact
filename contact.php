<?php
$name= $POST['email'];
$visitor_email= $_POST['email'];
$message= $_POST['message'];

$email_from= 'index.html';
$email_subject= "new form submission";
$email_body= "user name: $name\n".
"user email: $visitor_email.\n".
"user message: $message.\n";

$to = "anonymousp0646@gmail.com";
$headers = "form: $email_from\r\n";
$headers = "reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

?>