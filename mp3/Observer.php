<?php
  include_once('AbstractObserver.php');
  include_once('Paper.php');
  
  class Observer extends AbstractObserver{
    public function __construct(){
    }
    
    public function check(AbstractSubject $subject){
      echo '<br><br>*NEW TEXT ALERT*<br>';
      echo 'New Text: ' . $subject->getText();
      echo '<br>*TEXT ALERT OVER*<br>';
    }
  }
?>