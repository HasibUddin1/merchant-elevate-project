<?php
session_start();
include_once "db_connection.php";

$user_id = $_POST['user_id'];
$delete_sql_details = "DELETE FROM user_details WHERE user_id = $user_id";
$delete_sql = "DELETE FROM users WHERE id = $user_id";

if (mysqli_query($conn, $delete_sql_details)) {
  // User successfully deleted.
  $_SESSION["delete_userdetails_success"] = "User Details has been deleted successfully.";
} else {
  // Error occurred during deletion.
  $_SESSION["delete_userdetails_error"] = "Error deleting user details: " . mysqli_error($conn);
}
if (mysqli_query($conn, $delete_sql)) {
  // User successfully deleted.
  $_SESSION["delete_user_success"] = "User has been deleted successfully.";
  echo "success";
} else {
  // Error occurred during deletion.
  $_SESSION["delete_user_error"] = "Error deleting user: " . mysqli_error($conn);
  echo "error";
}
