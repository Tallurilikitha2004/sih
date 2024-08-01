<?php
// Establish a connection to the MySQL database
$conn = new mysqli("localhost", "root", "", "schedule");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the POST request
$date = $_POST['date'];
$time = $_POST['time'];
$event = $_POST['event'];
$mode = $_POST['mode'];
$location = $_POST['location'];

// SQL query to insert data into the table
$sql = "INSERT INTO schedule(date, time, event, mode, location) VALUES ('$date', '$time', '$event', '$mode', '$location')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['success_message'] = "Team member added successfully!";
    header("Location: DashboardSchedule.php");
} else {
    session_start();
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    header("Location: DashboardSchedule.php");
}

// Close the database connection
$conn->close();
?>
