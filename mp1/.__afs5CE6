<?php
  include_once('AbstractSubject.php');
  include_once('Observer.php');
  
  class Paper extends AbstractSubject{
    private $observers = array();
    function attach(AbstractObserver $observer_in){
      $this->observers[] = $observer_in;
    }
    
    function detach(AbstractObserver $observer_in){
      foreach($this->observers as $okey=>$oval){
        if ($oval == $observer_in){
          unset($this->observers[$okey]);
        }
      }
    }
    
    function notify(){
      foreach($this->observers as $obs){
        $obs -> check($this);
      }
    }
    
    function write($newText){
      $this->text = $newText;
      $this->notify();
    }
    
    function getText(){
      return $this->text;
    }
  }
?>