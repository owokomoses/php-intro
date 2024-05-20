<?php
class Account{
    //properties
    public $account_no = "2345467654324567";
    public $account_name = "John Doe";


    //methods
    function get_account_no(){
        echo $this->account_no;
    }   
}

//create an object
$account = new Account();
