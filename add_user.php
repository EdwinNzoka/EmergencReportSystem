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
$user_name = $_POST['user_name'];
$user_phonenumber = $_POST['user_phonenumber'];
$user_location = $_POST['user_location'];

// Prepare SQL statement to insert user data
$sql = "INSERT INTO users (user_name, user_phonenumber, user_location) VALUES ('$user_name', '$user_phonenumber', '$user_location')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
