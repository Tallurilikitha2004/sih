<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logins";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$employeeID = $_POST['employee_id']; // Assuming you're using POST method
$selectedImages = explode(',', $_POST['selected_images']); // Split the selected images into an array

// Check employee ID in the database
$sql = "SELECT * FROM judge WHERE Employee_ID = '$employeeID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Employee ID found in the database

    // Fetch the stored hash values for the user from the database
    $row = $result->fetch_assoc();

    // Check if the selected images' hash values match the corresponding database values
    $matching = true;
    
    if (count($selectedImages) === 4) {
        foreach ($selectedImages as $index => $selectedImageHash) {
            $columnName = 'image' . sprintf('%02d', $index + 1); // Construct column name like "image01", "image02", etc.
            if ($row[$columnName] !== $selectedImageHash) {
                $matching = false;
                break; // Exit the loop if any hash value doesn't match
            }
        }
    } else {
        $matching = false; // Incorrect number of selected images
    }

    if ($matching) {
        // Redirect to success page
        session_start();
        $_SESSION['selected_image_urls'] = $selectedImageURLs;
        header('Location: Dashboard.php');
        exit;
    } else {
        session_start();
        $_SESSION['error_message'] = "Incorrect Employee ID or Password";
        header('Location: Advocate.php'); // Redirect back to the login page
        exit;
    }
} else {
    session_start();
    $_SESSION['error_message'] = "Employee ID does not exist OR Incorrect Password";
    header('Location: Advocate.php');
    exit;
}

$conn->close();
?>
