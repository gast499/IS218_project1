<?php
  include_once('StrategyInterface.php');
  
  class StrategyCash implements StrategyInterface {
    
    public function showPaymentType() {
      return 'cash';
    }
  }
?>