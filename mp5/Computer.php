<?php
  include_once('Librarian.php');
  include_once('AbstractSubject.php');
  
  class Computer extends AbstractSubject{
    private $observers = array();
    public function attach(AbstractObserver $observer_in){
      $this->observers[] = $observer_in;
    }
    
    public function detach(AbstractObserver $observer_in){
      foreach($this->observers as $okey=>$oval){
        if ($oval == $observer_in){
          unset($this->observers[$okey]);
        }
      }
    }
    
    public function notify(){
      foreach($this->observers as $obs){
        $obs -> check($this);
      }
    }
    
    public function write($newText){
      $this->text = $newText;
      $this->notify();
    }
    
    public function getText(){
      return $this->text;
    }
  }
?>