<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- linking css -->
    <link rel ="stylesheet" href="loginin.css">
    <title>Sign In</title>
</head>
<body>

<form action="success.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <input type="log in " value="log in">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == "" || $password == "") {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: success.php');
        exit;
    } else {
        echo "Error!!";
    }
}
?>
</body>
</html>