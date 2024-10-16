<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "placement_portal"; // Make sure to set your actual database name

$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
