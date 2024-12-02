<?php

class BankAccount {
  private float $balance = 0; 

  public function getBalance() {
    return $this->balance;
  }

  public function deposit(float $amount) {
    if($amount > 0) {
      $this->balance += $amount;
    }
    return true;
  }

  public function withdraw(float $amount) {
    if($amount > 0 && $amount <= $this->balance) {
      $this->balance -= $amount;
      return true;
    }
    return false;
  }

}

$account = new BankAccount();

var_dump($account->getBalance(), $account->withdraw(100), $account->deposit(100), $account->getBalance());