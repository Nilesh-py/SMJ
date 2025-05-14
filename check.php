<?php
$servername = "127.0.0.1";  // Your database server, usually 'localhost'
$username = "root";         // Your database username
$password = "Pass@123";             // Your database password (empty if no password is set)
$dbname = "feedbackDB";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Connection failed
} else {
    echo "Connected successfully to MySQL";  // Connection successful
}

// Close connection
$conn->close();
?>
