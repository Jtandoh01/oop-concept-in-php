<?php
require_once 'BankAccount.php';
class checkingAccount extends BankAccount{
    protected $transactionFee;

    public function __construct($accountNumber, $accountHolderName, $balance){
        parent::__construct($accountNumber, $accountHolderName, $balance);
    }

    public function SetTransactionFee($transactionFee){
            $this->transactionFee= $transactionFee;
    }
    public function getTransactionFee(){
        return $this->transactionFee;
    }

    
    public function withdraw($amount) {
        $totalWithdrawal = $amount + $this->transactionFee;
        if ($this->balance >= $totalWithdrawal) {
            $this->balance -= $totalWithdrawal;
        }   
        else{
           echo "BALANCE IS NOT SUFFICIENT. WITHDRAW A LESSER AMOUNT. <br>";
        }
     }
}
?>