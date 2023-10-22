<?php
// Database credentials
$servername = "localhost";
$username = "simpleAPI_user";
$password = "simplePW";
$dbname = "simpleAPI";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>