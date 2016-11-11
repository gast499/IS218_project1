<?php
  include_once('AbstractObserver.php');
  include_once('CompStation.php');
  define('BR', '<'.'BR'.'>');


  class Librarian extends AbstractObserver {


    public function __construct() {
    }


    public function update(AbstractSubject $subject) {
      echo BR.BR;
      echo '*THE LIBRARIAN IS CHECKING THE STATION*'.BR;
      echo ' The station is: '.$subject->getStation().BR;
      echo '*THE LIBRARIAN FINISHED CHECKING THE STATION*'.BR;      
    }


  }
?>