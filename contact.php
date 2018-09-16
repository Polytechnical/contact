<?php
$name = $POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'https://polytechnical.github.io/contact/';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"user message: $message.\n";

$to = "anonymousp0646@gmail.com";
$headers = "Form: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");|

?>
