<?php 
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@elm-uni.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $name.\n".
               "User Email: $visitor_email".
               "Subject: $subject\n".
               "User Message: $message\n";

$to = 'abdullahuet05@gmail.com';

$headers = "From: $email_from \r\n";

$headers. = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

headers("Location: contact.html")




?>

