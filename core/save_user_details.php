<?php
// Include the database connection file
session_start();
include_once "db_connection.php";

// Process the form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = $_SESSION["user_id"];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_SESSION["user_email"];
  $phone_number = $_POST['phone_number'];
  $date_of_birth = $_POST['date_of_birth'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $status = "Pending";

  // Create a directory for the user's files based on user_id
  $user_directory = "../uploads/" . $user_id;
  if (!file_exists($user_directory)) {
    mkdir($user_directory, 0755, true); // Create the directory if it doesn't exist
  }

  // Function to determine the document type based on the input field name
  function getDocumentType($inputName)
  {
    switch ($inputName) {
      case 'drivers_license_file':
        return 'Driver License';
      case 'tax_return_1':
        return 'Tax Return 1';
      case 'tax_return_2':
        return 'Tax Return 2';
      case 'bank_statement_1':
        return 'Bank Statement 1';
      case 'bank_statement_2':
        return 'Bank Statement 2';
        case 'bank_statement_3':
        return 'Bank Statement 3';
      case 'utility_bill_file':
        return 'Utility Bill';
      case 'credit_score_file':
        return 'Credit Score';
      default:
        return 'Unknown';
    }
  }

  // File uploads and SQL fields for each document type
  $documentFields = [
    'drivers_license_file' => 'drivers_license_file',
    'tax_return_1' => 'tax_return_1',
    'tax_return_2' => 'tax_return_2',
    'bank_statement_1' => 'bank_statement_1',
    'bank_statement_2' => 'bank_statement_2',
    'bank_statement_3' => 'bank_statement_3',
    'utility_bill_file' => 'utility_bill_file',
    'credit_score_file' => 'credit_score_file',
  ];

  // Initialize an array to store the file paths
  $filePaths = [];

  // File uploads
  foreach ($_FILES as $inputName => $fileInfo) {
    $documentType = getDocumentType($inputName);
    $newFileName = "{$documentType} {$first_name} {$last_name}." . pathinfo($fileInfo['name'], PATHINFO_EXTENSION); // Construct the new file name
    $newFilePath = $user_directory . '/' . $newFileName;

    // Move the uploaded file to the user's directory with the new name
    move_uploaded_file($fileInfo['tmp_name'], $newFilePath);

    // Store the file path for the current document type
    $filePaths[$documentFields[$inputName]] = $newFilePath;
  }

  // Check if a record with the user_id already exists in the database and decide whether to insert or update
  $checkSql = "SELECT user_id FROM user_details WHERE user_id = ?";
  $checkStmt = $conn->prepare($checkSql);
  $checkStmt->bind_param("i", $user_id);
  $checkStmt->execute();
  $checkStmt->store_result();

  if ($checkStmt->num_rows > 0) {
    // Update existing record
    $updateSql = "UPDATE user_details SET status = ?, first_name = ?, last_name = ?, email = ?, phone_number = ?, date_of_birth = ?, address = ?, city = ?, state = ?, zip = ?, drivers_license_file = ?, tax_return_1 = ?, tax_return_2 = ?,bank_statement_1 = ?, bank_statement_2 = ?, bank_statement_3 = ?, utility_bill_file = ?, credit_score_file = ? WHERE user_id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssssssssssssssssssi", $status, $first_name, $last_name, $email, $phone_number, $date_of_birth, $address, $city, $state, $zip, $filePaths['drivers_license_file'], $filePaths['tax_return_1'], $filePaths['tax_return_2'], $filePaths['bank_statement_1'], $filePaths['bank_statement_2'], $filePaths['bank_statement_3'], $filePaths['utility_bill_file'], $filePaths['credit_score_file'], $user_id);
    $updateStmt->execute();
    echo "Records Updated.";
  } else {
    // Insert a new record
    $insertSql = "INSERT INTO user_details (user_id, status, first_name, last_name, email, phone_number, date_of_birth, address, city, state, zip, drivers_license_file, tax_return_1, tax_return_2, bank_statement_1, bank_statement_2, bank_statement_3, utility_bill_file, credit_score_file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("issssssssssssssssss", $user_id, $status, $first_name, $last_name, $email, $phone_number, $date_of_birth, $address, $city, $state, $zip, $filePaths['drivers_license_file'], $filePaths['tax_return_1'], $filePaths['tax_return_2'], $filePaths['bank_statement_1'], $filePaths['bank_statement_2'], $filePaths['bank_statement_3'], $filePaths['utility_bill_file'], $filePaths['credit_score_file']);
    $insertStmt->execute();
    echo "New Record Added.";
    include_once "statusUpdateEmail.php";
  }

  $checkStmt->close();

  // Redirect to the same page to update the form
  header('Location: ../dashboard/index');
}

// Close the database connection (optional if not needed for further queries)
$conn->close();
