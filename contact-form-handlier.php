<?php
$name = $_POST['name'];
$visit_email = $_POST['email'];
$message =$_POST['message'];

$email_from = 'philip.murtagh@outlook.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visit_email.\n".
                "User Message: $message.\n";

$to = "philip.murtagh@outlook.com";

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visit_email \r\n";

mail($to,$email_subject.$email_body,$headers);

header("Location: index.html");
?>
