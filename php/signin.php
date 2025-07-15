<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "flight_db";

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Query to insert user into the database
    $query = "INSERT INTO signin ( Username, Email	, Password	) VALUES ('$username', '$email','$password')";
    
    // Perform the query
    if ($conn->query($query) === TRUE) {
        echo "Registration successful!";
        // You might want to redirect to a login page here
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>

