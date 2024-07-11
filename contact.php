<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Parax Contact Form'; 
    $to = 'kjalgaon@asu.edu'; 
    $subject = $_POST['subject']; 

    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";

    if (mail($to, $subject, $body, $from)) {
        header("location: thank-you.html");
    } else {
        die("Error sending email!");
    }
}
?>
