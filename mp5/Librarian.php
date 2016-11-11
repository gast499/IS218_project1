<?php
  include_once('AbstractObserver.php');
  include_once('Computer.php');
  
  class Librarian extends AbstractObserver{
    public function __construct(){
    }
    
    public function check(AbstractSubject $subject){
      echo '<br><br>*The customer has decided to buy:*<br>';
      echo 'Book: ' . $subject->getText();
    }
  }
?>