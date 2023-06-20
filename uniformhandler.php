<?php
$name = $_POST[ 'name'];
$Visitor_email = $_POST[ 'email'];
$subject = $_POST[ 'subject'];
$message = $_POST[ 'message'];

$email_from = 'info@mutheejamesmwaura';

$email_subject = 'new form submission';

$email_body = " user name: $name.\n".
                "visitor email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";



  $to   ='jamesmwaura898@gmail.com';

$headers ="From: $email_from  \r\n";

$headers . ="Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: unicontact.html");



?>