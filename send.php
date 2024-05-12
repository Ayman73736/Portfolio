<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$email_subject=$_POST['Subject'];
$message = $_POST['message'];

$email_from = 'ayman@localhost';
$email_subject = "New Form Submission";

$to = 'marocfiree@gmail.com';

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";


$email_message .= "User Name: $name\n";
$email_message .= "User Email: $visitor_email\n";
$email_message .= "User Message: $message\n";
$email_message .= "\n";

if (mail($to, $email_subject, $email_message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Please try again.";
}
?>
