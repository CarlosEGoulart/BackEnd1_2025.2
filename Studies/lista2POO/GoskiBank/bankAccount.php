<?php
class BankAccount{
    public function __construct(
        protected int $accountNumber,
        protected int $balance = 0,
    ){}

    public function deposit($amount){
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount){
        if($amount > 0 && $this->balance >= $amount){
            $this->balance -= $amount;
        }
    }

    public function getBalance(){
        return $this->balance;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }
}