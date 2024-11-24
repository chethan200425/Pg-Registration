<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Use your MySQL root password
$dbname = "LoginDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from form
$user = $_POST['username'];
$pass = $_POST['password'];

// Query the database
$sql = "SELECT * FROM Admin WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

// Validate login
if ($result->num_rows > 0) {
    echo "<script>alert('Login successful!');</script>";
    header("Location: detail.html");
} else {
    echo "<script>alert('Wrong entry, try again!'); window.location.href='login.html';</script>";
}

// Close connection
$stmt->close();
$conn->close();
?>
