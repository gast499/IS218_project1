<?php
include_once('CustomerNameDecorator.php');
  
  class CustomerLastNameDecorator extends CustomerNameDecorator {
	
	   private $cnd;


    public function __construct(CustomerNameDecorator $cnd_in) {
	     $this->cnd = $cnd_in;
    }


    function addLastName($lname) {
	     $this->cnd->name = $this->cnd->name . " " . $lname;
	   }


  }
?>