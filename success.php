<?php

session_start();
if (!isset($_SESSION['loggedin']) &&
 $_SESSION['loggedin'] !== true) 
{
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1">
<!-- printing welcome message -->
    <title>Welcome!!</title>
</head>
<body>
<!-- success message -->
<h1>Hello, [Username]!</h1>
<p>login successful!!</p>

</body>
</html>