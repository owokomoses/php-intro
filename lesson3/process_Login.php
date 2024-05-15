<?php
//stores user information
session_start(); 

$email = $_POST['email'];
$password = $_POST['password'];

// Include database connection
include 'dbConnect.php';

// checks if user exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $db_connect->query($sql);

if($result->num_rows > 0){
    // this code fetchs the user details if they are available
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: phpindex.php'); // Redirect to a welcome page or dashboard
} else {
    echo "<script>alert('Invalid email or password. Please try again.');</script>";
    echo "<script>setTimeout(function(){ window.history.back(); }, 1000);</script>";
}
?>
