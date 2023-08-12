<!-- Signin Page :new user have to signin and
 set password on this page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link stylesheet -->
    <link rel="stylesheet" href="signin.css"> 
    <title>sign in here!! </title>
</head>
<body>
<!-- creating form for signing in -->
<form action="assign/db/register.php" method="post">

    <label for="username">Username:</label>
    <!--textfeild for username-->
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <!--textfeild for password-->
    <input type="password" name="password" required>
    
    <input type="submit" value="Sign Up">
</form>
</body>
</html>
