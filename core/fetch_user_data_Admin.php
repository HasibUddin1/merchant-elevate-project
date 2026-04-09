<?php
// Include the database connection file
include_once "db_connection.php";

$user_id = $_POST['userID'];

// Check if the user's data exists in the database
$checkSql = "SELECT * FROM user_details WHERE user_id = ?";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("i", $user_id);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
  // User's data exists, fetch it
  $userData = $result->fetch_assoc();
} else {
  // User's data doesn't exist, initialize an empty array
  $userData = array(
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'phone_number' => '',
    'date_of_birth' => '',
    'address' => '',
    'city' => '',
    'state' => '',
    'zip' => '',
    'drivers_license_file' => '',
    'tax_return_1' => '',
    'bank_statement_1' => '',
    'utility_bill_file' => '',
    'credit_score_file' => ''
  );
}
