<?php
// Include the database connection file
include_once "db_connection.php";

// Check if the user's data exists in the database
$sql = "SELECT * FROM user_details";
$sql2 = "SELECT id, created_at FROM users";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

$userData = array();
$registeredDates = array();

if ($result->num_rows > 0) {
  // User's data exists, fetch it
  $resultFound = $result->num_rows;
  $createdDates = $result2->num_rows;

  while ($row = $result->fetch_assoc()) {
    $userData[] = $row; // Save each record in the array
  }
  while ($row = $result2->fetch_assoc()) {
    $registeredDates[] = $row; // Save each record in the array
  }
} else {
  // User's data doesn't exist, initialize an empty array
  $resultFound = $result->num_rows;
  $createdDates = $result2->num_rows;
}
