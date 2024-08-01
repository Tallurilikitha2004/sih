<?php

// Establish a connection to the MySQL database
$conn = new mysqli("localhost", "root", "", "team_members");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the POST request
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$MobileNumber = $_POST['MobileNumber'];
$ZipCode = $_POST['ZipCode'];
$City = $_POST['City'];
$Role = $_POST['Role'];
$EmployeeID = $_POST['EmployeeID'];
$Address = $_POST['Address'];
$State = $_POST['State'];

// SQL query to insert data into the table
$sql = "INSERT INTO team_members(FirstName, MiddleName, LastName, Email, MobileNumber, ZipCode, City, Role, EmployeeID, Address, State) VALUES ('$FirstName', '$MiddleName', '$LastName', '$Email', '$MobileNumber', '$ZipCode', '$City', '$Role', '$EmployeeID', '$Address', '$State')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['success_message'] = "Team member added successfully!";
    header("Location: DashboardTeamMembers.php");
} else {
    session_start();
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    header("Location: DashboardTeamMembers.php");
}

// Close the database connection
$conn->close();

?>
