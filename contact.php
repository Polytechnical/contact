<?php
$name= $_POST['email'];
$visitor_email= $_POST['name'];
$message= $_POST['message'];

$email_from= 'pawan@contact646.cf';
$email_subject= "new form submission";
$email_body= "user name:".$name."\n";
$email_body="user email:".$visitor_email."\n";
$email_body="user message:".$message."\n";

$to = "sumank490@gmail.com";
$headers = "form:".$email_from."\r\n";
$headers = "reply-to:".$visitor_email. "\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:index.html");
?>
