<?php
// Database connection parameters
$servername = "localhost"; // Assuming the database is hosted on the same server
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "emergencysystem"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$emergency_name = $_POST['emergency_name'];
$emergency_location = $_POST['emergency_location'];

// Prepare SQL statement to insert emergency data
$sql = "INSERT INTO emergencies (emergency_name, emergency_location) VALUES ('$emergency_name', '$emergency_location')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo header("Location: submit.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
