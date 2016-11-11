<?php
  include_once('AbstractFactory.php');
  class CustomerFactory extends AbstractFactory{
    function __construct(){
    }
    public function newCustomer($n, $g){
      return new Customer($n, $g);
    }
  }
?>