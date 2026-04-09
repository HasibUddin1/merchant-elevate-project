<?php
session_start();
include_once "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id']) && isset($_POST['new_status'])) {
    $userId = $_POST['user_id'];
    $newStatus = $_POST['new_status'];

    // Update the user's status in the database using SQL
    $sql = "UPDATE user_details SET status = ? WHERE user_id = ?";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "si", $newStatus, $userId);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        // Check if the update was successful
        if ($result) {
            // Return a success message
            echo "Status updated successfully";
            include_once "statusUpdateEmail.php";
        } else {
            // Return an error message if the update failed
            echo "Error: Status update failed";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle statement preparation error
        echo "Error: Statement preparation failed";
    }
} else {
    // Handle invalid or missing data
    echo "Invalid request";
}
