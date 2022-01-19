<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'sababarif47@gmail.com';
$email_subject = "New Form Submisson";
$email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". "User Message: $message.\n";

$to = "sababarif@gmail.com";
$headers = "From: $email_form \r\n";
$headers = "Reply-TO: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>