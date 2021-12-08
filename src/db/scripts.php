<?php

$servername = "localhost";
$username = "root";
$password = "mypass";
$dbname = "kormatron_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT location,type,status FROM toilet";
$result = $conn->query($query);
$toilet = $result->fetch_assoc();
return $toilet;


$conn->close();
?> 
