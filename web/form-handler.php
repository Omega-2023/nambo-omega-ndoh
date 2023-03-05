<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'nambondoh1@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subjuct: $subject.\n".
                 "User Message: $message.\n";

$to = 'nambondoh1@gmail.com'; 

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,$email_suubjet,$email_body,$header);

header("Location: contact.html");
?>