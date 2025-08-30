<?php
require_once __DIR__ . '/bankAccount.php';
class CheckingAccount extends BankAccount{
    private int $maintenanceFee;

    public function __construct(
        int $accountNumber,
        int $maintenanceFee,
    ){
        parent::__construct($accountNumber);
        $this->maintenanceFee = $maintenanceFee;
    }

    public function applyMaintenanceFee(){
        $this->withdraw($this-> maintenanceFee);
    }
}