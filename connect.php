<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "flight_db";

$conn = new mysqli($host, $username, $password, $database);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";
}
?>

