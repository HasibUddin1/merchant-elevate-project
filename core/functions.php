<?php 


include_once "db_connection.php";

// Path: core\functions.php

function sendMail($from, $subject, $message){
    $to = SUPPORT_EMAIL;
    $headers = "From:" . $from;
    return mail($to, $subject, $message, $headers);
}