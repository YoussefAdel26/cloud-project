<?php
$servername = "db";
$port = 3306; // MySQL port
$username = "root"; // Your MySQL username
$password = "root"; // Your MySQL password
$dbname = "Students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
