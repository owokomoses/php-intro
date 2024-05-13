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
function compute_balance($deposit,$withdrawal){
    echo $deposit - $withdrawal;;
}
compute_balance(40000,5000);
?>
