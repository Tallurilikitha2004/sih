<?php

// Establish a connection to the MySQL database
$conn = new mysqli("localhost", "root", "", "client");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the POST request
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$MobileNumber = $_POST['MobileNumber'];
$City = $_POST['City'];
$State = $_POST['State'];

// SQL query to insert data into the table
$sql = "INSERT INTO client(FirstName, LastName, Email, MobileNumber, City, State) VALUES ('$FirstName', '$LastName','$Email', '$MobileNumber', '$City', '$State')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['success_message'] = "Team member added successfully!";
    header("Location: DashboardClient.php");
} else {
    session_start();
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    header("Location: DashboardClient.php");
}

// Close the database connection
$conn->close();

?>
