<?php
$servername = "127.0.0.1";  // Your database server
$username = "pythonuser";         // Your database username
$password = "Python@123";             // Your database password
$dbname = "`feedbackdb`";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $feedback = $_POST['feedback'];
    $email = $_POST['email'];

    // SQL to insert form data into the table
    $sql = "INSERT INTO feedback (name, mobile, feedback, email)
            VALUES ('$name', '$mobile', '$feedback', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

