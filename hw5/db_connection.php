<?php
$servername = "localhost";
$username = "id705934_craj1";
$password = "Rajnuts20";
$dbname = "id705934_user_info";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
?>