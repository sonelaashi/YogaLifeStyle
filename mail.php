<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from ='websiteaashi11@gmail.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
              "User email: $email.\n".
              "User message: $message.\n";

$to = 'aashisonel2025@gmail.com';   
$headers = "From: ".$email_from \r\n;
$text = "Revice email from".$name.".\n\n".$message;

mail($to,$email_body,$text )
header("Location: feedback.html");
?>