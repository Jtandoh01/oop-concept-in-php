<?php
require_once 'BankAccount.php';
require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';
//cretaing an instance of BankAccount class and setting its attributes
$bankAccount = new BankAccount("1111111", "Tandoh Johnson", 1300.00);

//setting the values of deposit() and wthdraw() methods
$bankAccount->deposit(1000.00);
$bankAccount->withdraw(790.00);
//printing output of the transaction
echo "Bank Account Balance: $".$bankAccount->getBalance()."<br>";
echo "<br>";
// creating instance of SavingsAccount class and setting values 
$savingsAccount = new SavingsAccount("1111111","Tandoh Johnson",1300.00);

//setting its interest rate
$savingsAccount->setInterestRate(0.15);
$savingsAccount->addInterest();
//orinting out the result
echo "Savings Account Balance: $". $savingsAccount->getBalance()."<br>";
echo "<br>";

//creating an instance of CheckingAccount  class
$checkAccount = new CheckingAccount("1111111","Tandoh Johnson",1300.00);
echo "Checking Account Balance: $".$checkAccount->getbalance()."<br>";
// setting transaction fee
$checkAccount->withdraw(3000.00);
$checkAccount->SetTransactionFee(100.00);

//No withdrawal takes place because of insufficient account balance




?>