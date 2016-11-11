<?php
  include_once('Customer.php');
  include_once('CustomerFactory.php');
  include_once('StrategyChooser.php');
  include_once('BusinessCard.php');
  include_once('Employee.php');


  define('BR', '<'.'BR'.'>');


  echo 'BEGIN TESTING STRATEGY, ABSTRACT FACTORY, AND OBSERVER PATTERN'.BR;
  echo BR;
  
  $emp = new Employee();
  $bc = new BusinessCard();
  $bc->attach($emp);
  
  
  echo 'A customer walks into a business card shop to get some business cards made.<br>';
  $custFact = new CustomerFactory();
  $cust = $custFact->newCustomer('John Smith','Male');
  echo 'The customer\'s name is: ' . $cust->getName();
  echo '<br><br>He browses the selection and narrows it down to 2:<br><br>';
  
  $strategyChooserC = new StrategyChooser('C');
  $strategyChooserH = new StrategyChooser('H');
  
  echo 'The customer asks to preview a business card with his name in all capital letters:'.BR;
  $txt = $strategyChooserC->showCustomerName($cust);
  $bc->write($txt);
  echo BR.BR;

  echo 'The customer asks to preview a business card with hyphens inserted in his name instead of spaces:'.BR;
  $txt = $strategyChooserH->showCustomerName($cust);
  $bc->write($txt);
  echo BR.BR;

  echo 'The customer decides to get the business card with his name in all caps and walks out of the store.<br>';

  echo '<br>END TESTING STRATEGY, ABSTRACT FACTORY, AND OBSERVER PATTERN'.BR;
?>