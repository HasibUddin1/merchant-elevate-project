<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

$name = $_POST["name"];
$email = $_POST["email"];
$newStatus = $_POST['new_status'];
$message = "";

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
$mail->addAddress($email, $name);
$mail->isHTML(true); // Set to true if you're sending HTML email

if ($newStatus == "Approved") {
    $mail->Subject = 'Application Approved Merchant Elevate';
    $mail->Body = "
    <p>Dear <strong>$name</strong>,</p>
    <p>We are delighted to inform you that your application has been approved at Merchant Elevate!</p>
    <p>Best regards,<br><strong>Merchant Elevate</strong></p>
    ";
} elseif ($newStatus == "Rejected") {
    $mail->Subject = 'Application Rejected Merchant Elevate';
    $mail->Body = "
    <p>Dear <strong>$name</strong>,</p>
    <p>We regret to inform you that your application has been rejected. Thank you for your interest.</p>
    <p>Best regards,<br><strong>Merchant Elevate</strong></p>
    ";
} else {
    $mail->Subject = 'Application is Pending Merchant Elevate';
    $mail->Body = "
    <p>Dear <strong>$name</strong>,</p>
    <p>Your application is currently pending review. We will notify you once a decision is reached. Thank you for your patience.</p>
    <p>Best regards,<br><strong>Merchant Elevate</strong></p>
    ";
}
$mail->send();
