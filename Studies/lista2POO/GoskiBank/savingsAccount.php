<?php
require_once __DIR__ . '/bankAccount.php';
class SavingsAccount extends BankAccount{
    public function __construct(
        protected int $accountNumber,
        private float $interestRate = 0.005, //0.5%
    ){
        parent::__construct($accountNumber);
    }

    public function calculateInterest(){
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
    }
}