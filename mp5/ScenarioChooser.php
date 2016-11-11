<?php
  include_once('StrategyCash.php');
  include_once('StrategyCredit.php');


  class StrategyChooser {
      
    private $strategy = NULL; 
    public function __construct($strategy_ind_id) {
      switch ($strategy_ind_id) {
        case "C": 
          $this->strategy = new StrategyCash();
          break;
        case "CC": 
          $this->strategy = new StrategyCredit();
          break;
      }
    }


    public function showPaymentType() {
      return $this->strategy->showPaymentType();
    }


  }
?>