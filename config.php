<?php
if(!isset($_SESSION)) 
{
session_start();
}
//Entering database details. 
$server = "localhost";
$username = "Root";
$password = "Travel";
$database = "a2 php";
// connecting to database
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>