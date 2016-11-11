<?php
  include_once('StrategyCaps.php');
  include_once('StrategyHyphen.php');


  class StrategyChooser {
      
    private $strategy = NULL; 
    public function __construct($strategy_ind_id) {
      switch ($strategy_ind_id) {
        case "C": 
          $this->strategy = new StrategyCaps();
          break;
        case "H": 
          $this->strategy = new StrategyHyphen();
          break;
      }
    }


    public function showCustomerName($customer) {
      return $this->strategy->showName($customer);
    }


  }
?>