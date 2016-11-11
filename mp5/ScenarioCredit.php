<?php
  include_once('StrategyInterface.php');
  
  class StrategyCredit implements StrategyInterface {
    
    public function showPaymentType() {
      return 'credit';
    }
  }
?>