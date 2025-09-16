<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$project = $_POST['project'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if (!$message || !$name || !$email || !$phone || !$project || !$subject) {
    $error = "Please all fields";
    include('contact.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format";
    include('contact.php');
    exit;
}

$to = 'adelusumbo@gmail.com';
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$content = "Hi,\n\n$message\n\nBest,\n$name\nPhone: $phone\nProject: $project";

mail($to, $subject, $content, $headers);
$success = "Message recieved";
include('contact.php');
exit;