<?php
  include_once('AbstractObserver.php');
  include_once('BusinessCard.php');
  
  class Employee extends AbstractObserver{
    public function __construct(){
    }
    
    public function check(AbstractSubject $subject){
      echo '<br><br>*BUSINESS CARD PREVIEW*<br>';
      echo 'Name: ' . $subject->getText();
      echo '<br>*PREVIEW IS OVER*<br>';
    }
  }
?>