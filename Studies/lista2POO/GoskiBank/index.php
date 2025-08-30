<?php
    require_once __DIR__ . '/savingsAccount.php';
    require_once __DIR__ . '/checkingAccount.php';
    
    $savingsAccount = new SavingsAccount(12345);
    $savingsAccount->deposit(1000);
    $savingsAccount->calculateInterest(); // Apply 0.5% interest
    echo "Final savings balance: " . $savingsAccount->getBalance() . "\n";
    
    $checkingAccount = new CheckingAccount(54321, 10); // Account number and maintenance fee
    $checkingAccount->deposit(2000);
    $checkingAccount->applyMaintenanceFee(); // Apply maintenance fee
    echo "Final checking balance: " . $checkingAccount->getBalance() . "\n";