<!DOCTYPE html>
<html>
<head>
    <title>Information Storage</title>
</head>
<body align="center">

<h2>Enter Information</h2>

<form method="post">
    <textarea name="info" rows="5" cols="40"></textarea><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    file_put_contents("info.txt", $_POST["info"]);
    echo "<script>alert('Information Saved');</script>";
}

if (file_exists("info.txt")) {
    echo "<h3>Saved Information</h3>";
    echo nl2br(file_get_contents("info.txt"));
}
?>

</body>
</html>