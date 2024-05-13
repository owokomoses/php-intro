<!-- introduction to php -->
<?php
//echo "Hello everyone i am back from my holiday";

// php program that adds two numbers
// function for addition
//function addNumbers($num1, $num2) {
    //return $num1 + $num2;
//}

// input
//$num1 = 10;
//$num2 = 10;

// sum of numbers
//$sum = addNumbers($num1, $num2);

// result
//echo "The sum is: $sum";

//varible
//$deposit = 40000;
//$withdrawal = 5000;
//$balance = $deposit - $withdrawal;
//echo $balance;

//function
// function compute_balance(){
//     $deposit = 40000;
//     $withdrawal = 5000;
//     $balance = $deposit - $withdrawal;
//     echo $balance;
// }
// compute_balance();

//parameters
// function compute_balance($deposit,$withdrawal){
//     echo $deposit - $withdrawal;;
// }
// compute_balance(40000,5000);

//example 2
//use of var_dump
// $msg = "PHP is the simple language i have come across";
// var_dump($msg);

//example 3
//use of isset
// $username = "john";

// if(isset($username)){
//     echo "Username is set";

// }else{

//     echo "Username is not set";
// }
$host = "localhost";
$dbname = "phpdatabase";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "connected successfully";
}catch(PDOExeption $e) {
    die("connection failed:" . $e->getMessage());
}
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <!-- Signup form -->
    <!-- <div class="container">
    <h2>Sign Up Form</h2>
    <br>
    <form action="process_signup.php" method="post">
    <div class="form-input">
        <input type="username" name="username" placeholder="enter username" required>
        </div>
        <div class="form-input">
        <input type="email" name="email" placeholder="enter email" required>
        </div>
        <div class="form-input">
        <input type="password" name="password" placeholder="enter password" required>
        </div>
        <div class="btn">
        <input type="submit" name="submit" value="Sign Up">
        </div>

    </form>
</div>
</body> -->
<!-- </html>  -->
