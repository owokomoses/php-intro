<?php
//example 1 associative array
$user_input = array('username' => "John " , 'email' => "John@gmail.com " ,  'password' =>"123");
// echo $user_input['username']
foreach ($user_input as $user) {
    echo $user;
}
?>