<?php
  include_once('AbstractSubject.php');
  
  abstract class AbstractObserver {


    abstract function check(AbstractSubject $subject_in);


  }
?>