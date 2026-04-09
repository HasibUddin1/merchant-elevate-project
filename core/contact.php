<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Set the mailer to use SMTP
    $mail->isSMTP();

    // SMTP server settings (you need to configure this with your email provider)
    $mail->Host = 'server166.web-hosting.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@merchantelevate.com'; // Your SMTP username
    $mail->Password = 'DvUSh#kYD2QsQD2'; // Your SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
    $mail->Port = 465; // SMTP port

    // Sender information
    $mail->setFrom("contact@merchantelevate.com", "Merchant Elevate");

    // Recipient
    $mail->addAddress($email, $name);
    $mail->addAddress("contact@merchantelevate.com", "Merchant Elevate");

    // Email content
    $mail->isHTML(false); // Set to true if you're sending HTML email
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    if ($mail->send()) {
        header('Location: ../contact.php?success=1');
    } else {
        header('Location: ../contact.php?success=0');
    }
}
