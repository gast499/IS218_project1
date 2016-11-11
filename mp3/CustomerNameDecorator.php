<?php
  include_once('Customer.php');


  class CustomerNameDecorator {
	
  protected $customer;
	protected $name;
	
  public function __construct(Customer $customer_in) {
	  $this->customer = $customer_in;
      $this->resetName();
  }
	
    //doing this so original object is not altered
	function resetName() {
	  $this->name = $this->customer->getName();
	}


  function showName() {
	  return $this->name;
	}


}
?>