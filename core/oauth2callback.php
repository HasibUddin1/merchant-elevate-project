<?php

// Google API Client
$gclient = new Google_Client();

// Set the ClientID
$gclient->setClientId(CLIENTID);
// Set the ClientSecret
$gclient->setClientSecret(SECRET);
// Set the Redirect URL after successful Login
$gclient->setRedirectUri(REDIRECTURI);
date_default_timezone_set('America/Los_Angeles');

// Adding the Scopr
$gclient->addScope('email');
$gclient->addScope('profile');

if (isset($_GET['code'])) {
    // Get Token
    $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);

    // Check if fetching token did not return any errors
    if (!isset($token['error'])) {
        // Setting Access token
        $gclient->setAccessToken($token['access_token']);

        // store access token
        $_SESSION['access_token'] = $token['access_token'];

        // Get Account Profile using Google Service
        $gservice = new Google_Service_Oauth2($gclient);

        // Get User Data
        $udata = $gservice->userinfo->get();
        $_SESSION['udata'] = $udata;
        $_SESSION['google_login'] = true;
        $email = $udata->email;

        // *****************************
        // Proceed With Login or Signup
        // *****************************
        include_once "db_connection.php";
        include_once "functions.php";
        // Log User In if already registered

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];

            header("Location: dashboard/index");
        } else {
            $created_at = date('Y-m-d H:i:s');
            $sql = "INSERT INTO users (email, password, created_at) VALUES ('$email', '3gtPM&9Ch3MiqBFz','$created_at')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION["user_id"] = $conn->insert_id;
                $_SESSION["user_email"] = $email;

                header("Location: dashboard/index");
            }
        }
    }
}
