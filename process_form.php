<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "RegistrationDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['pho'];
    $dob = $_POST['bir'];
    $address = $_POST['add'];
    $joining_date = $_POST['join'];
    $sharing_type = $_POST['share'];
    $payment_option = $_POST['payment'];

    $sql = "INSERT INTO Users (first_name, last_name, phone_number, dob, address, joining_date, sharing_type, payment_option)
            VALUES ('$first', '$last', '$phone', '$dob', '$address', '$joining_date', '$sharing_type', '$payment_option')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
