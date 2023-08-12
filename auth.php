<?php
// including database config
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
// adding data to database
    $stmt = $conn->prepare("SELECT id, password FROM usersInfo WHERE username = ?");
    $stmt->bind_param("s", $username);
    //executing statement
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location:success.php');
            // message for unsuccessfull login
        } else {
            echo "Error";
        }
    } else {
        echo "unknown user!";
    }
}
$conn->close();//close connection with database

?>