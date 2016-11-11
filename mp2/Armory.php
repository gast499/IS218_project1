<?php
  class Armory{
    private $weapons = array();
    private $numWeapons = 0;
    
    public function __construct(){
    }
    
    public function getNumWeapons(){
      return $this->numWeapons;
    }
    
    public function setNumWeapons($count){
      $this->numWeapons = $count;
    }
    
    public function getWeapon($num){
      if ( (is_numeric($num)) && 
           ($num <= $this->getNumWeapons())) {
           return $this->weapons[$num];
         } else {
           return NULL;
         }
    }
    
    public function addWeapon($weap){
      $this->setNumWeapons($this->getNumWeapons()+1);
      $this->weapons[$this->getNumWeapons()] = $weap;
      return $this->getNumWeapons();
    }
    
    public function removeWeapon($weap){
      $counter = 0;
      while (++$counter <= $this->getNumWeapons()) {
        if ($weap == $this->weapons[$counter]){
            for ($x = $counter; $x < $this->getNumWeapons(); $x++) {
              $this->weapons[$x] = $this->weapons[$x + 1];
          }
          $this->setNumWeapons($this->getNumWeapons() - 1);
        }
      }
      return $this->getNumWeapons();
    }

    
  }
?>