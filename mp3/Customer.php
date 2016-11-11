<?php
  include_once('AbstractCustomer.php');
  class Customer extends AbstractCustomer{
    private $name;
    private $gender;
    
    function __construct($name_in, $gender_in) {
      $this->gender = $gender_in;
      $this->name  = $name_in;
    }
    
    function getName(){
      return $this->name;
    }
    
    function getGender(){
      return $this->gender;
    }
    
    function getNameAndGender(){
      return 'This ' . $this -> getGender() . ' customer\'s name is ' . $this -> getName() . '.';
    }
  }
  
?>