<?php
  include_once('Customer.php');
  include_once('StrategyInterface.php');
  
  class StrategyHyphen implements StrategyInterface {
    
    public function showName($customer_in) {
      $name = $customer_in->getName();
      $this->customerCount++;
      return str_replace(' ', '-', $name);
    }
  }
?>