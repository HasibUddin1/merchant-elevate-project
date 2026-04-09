<?php
// Include the database connection file
session_start();
include_once "db_connection.php";

// Process the form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = $_POST["user_id"];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST["email"];
  $phone_number = $_POST['phone_number'];
  $date_of_birth = $_POST['date_of_birth'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $status = $_POST['status'];


  // Check if a record with the user_id already exists in the database and decide whether to insert or update
  $checkSql = "SELECT user_id FROM user_details WHERE user_id = ?";
  $checkStmt = $conn->prepare($checkSql);
  $checkStmt->bind_param("i", $user_id);
  $checkStmt->execute();
  $checkStmt->store_result();

  if ($checkStmt->num_rows > 0) {
    // Update existing record
    $updateSql = "UPDATE user_details SET status = ?, first_name = ?, last_name = ?, email = ?, phone_number = ?, date_of_birth = ?, address = ?, city = ?, state = ?, zip = ?  WHERE user_id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssssssssssi", $status, $first_name, $last_name, $email, $phone_number, $date_of_birth, $address, $city, $state, $zip, $user_id);
    $updateStmt->execute();
    echo "Records Updated.";
  }

  $checkStmt->close();

  // Redirect to the same page to update the form
  header('Location: ../superadmin/index');
}

// Close the database connection (optional if not needed for further queries)
$conn->close();
