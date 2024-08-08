<?php
$servername = "localhost";
$database = "bootcamp";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Database Connected successfully";

// mysqli_close($conn);

?>