<?php
// check if session started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["user_id"]) || $_SESSION["user_email"] != "admin@merchantelevate.com") {
    header("Location: ../login");
}
