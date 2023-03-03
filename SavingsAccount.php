<?php
require_once 'BankAccount.php';

class SavingsAccount extends BankAccount{
    protected  $interestRate;

    //constructor method
    public function __construct($accountNumber,$accountHolderName,$balance){
        parent::__construct($accountNumber, $accountHolderName, $balance );
    }

    //setter method
    public function setInterestRate($interestRate){
        $this->interestRate= $interestRate;

    }

    //getter method
    public function getInterestRate(){
            return $this->interestRate;
        }
        public function addInterest(){
            $interest = $this->balance * ($this->interestRate);
            $this->balance += $interest;
        }
    }

?>