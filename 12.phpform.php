<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body align="center">

<h2>Login</h2>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $data = file("login.txt", FILE_IGNORE_NEW_LINES);

    if (in_array("$user:$pass", $data))
        echo "<script>alert('Access Granted');</script>";
    else
        echo "<script>alert('Invalid Username or Password');</script>";
}
?>

</body>
</html>