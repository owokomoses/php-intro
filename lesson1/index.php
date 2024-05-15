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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up Form</h2>
        <br>
        <form action="process_signup.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</body>
</html>

