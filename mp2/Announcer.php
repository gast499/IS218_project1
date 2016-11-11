<?php
  include_once('AbstractObserver.php');
  include_once('Player.php');
  
  class Announcer extends AbstractObserver{
    public function __construct(){
    }
    
    public function check(AbstractSubject $subject){
      echo '<br><br>*THE PLAYER HAS CHOSEN A WEAPON*<br>';
      echo 'Weapon: ' . $subject->getText();
      echo '<br>*GOOD LUCK, HAVE FUN*<br>';
    }
  }
?>