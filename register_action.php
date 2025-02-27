<?php
// Database connection parameters
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user_username = $_POST['username'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user_username', '$user_email', '$user_password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to a success page
    header("Location: registration_success.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
