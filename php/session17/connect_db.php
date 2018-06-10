<?php
$servername = "localhost"; //$servername = "127.0.0.1";
$username = "root";
$password = "none"; //$password = "";
$database = "18php03";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    // var_dump();
    //exit;
} 

echo "Connected successfully";