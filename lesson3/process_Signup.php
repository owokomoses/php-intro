<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Include database connection
include 'dbConnect.php';

$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

$result = $db_connect->query($sql);

if($result){
    echo "<script>alert('Signup successful! Redirecting to login page...');</script>";
    echo "<script>setTimeout(function(){ window.location.href = 'login.php'; }, 1000);</script>";
} else {
    echo "<script>alert('Signup failed. Please try again.');</script>";
    echo "<script>setTimeout(function(){ window.history.back(); }, 1000);</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Redirecting</title>
</head>

<body>
</body>

</html>
