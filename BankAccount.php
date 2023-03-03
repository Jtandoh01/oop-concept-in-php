<?php
class BankAccount{
    protected $accountNumber;
    protected $accountHolderName;
    protected $balance;

    // constructor
    public function __construct($accountNumber, $accountHolderName, $balance){
        $this->accountNumber= $accountNumber;
        $this->accountHolderName = $accountHolderName;
        $this->balance= $balance;
    }

    public function deposit($amount){
        $this->balance  += $amount;
         }

    public function withdraw($amount){
        if($this->balance>=$amount){
            $this->balance -= $amount;
        }
        else{
          echo  "BALANCE IS NOT SUFFICIENT <br>";
        }
        }
    public function getBalance(){
        return $this->balance;
    }
}

?>