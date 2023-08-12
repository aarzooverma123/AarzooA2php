<?php
// Include database config
include 'config.php';

// clicking when form submit and password for security reasons
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Use of prepared statements SQL injections
    $stmt = $conn->prepare("INSERT INTO usersInfo (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);
 // Executing the statement 
    if ($stmt->execute()) {
        header('Location:login.php');
    } else {
        // check for errors
        echo "Error: " . $stmt->error;
    }
}
//closing connection withb database
$conn->close();
?>