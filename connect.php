<?php

$host = "localhost";
$user = "root";
$pass = "Shivaami23$";
$db = "webhost";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";