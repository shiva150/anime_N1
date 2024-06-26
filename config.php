<?php
$servername = "localhost";
$username = "root"; 
$password = "shiv"; 
$dbname = "anime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
