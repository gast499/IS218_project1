<?php
  include_once('Armory.php');
  class ArmoryIterator {
	
    protected $armory;
    protected $currentWeapon = 0;


    public function __construct(Armory $armory_in) {
      $this->armory = $armory_in;
    }
	
    public function getCurrentWeapon() {
	  if (($this->currentWeapon > 0) && 
          ($this->armory->getNumWeapons() >= $this->currentWeapon)) {
        return $this->armory->getWeapon($this->currentWeapon);
      }
    }


    public function getNextWeapon() {
	  if ($this->hasNextWeapon()) {
        return $this->armory->getWeapon(++$this->currentWeapon);
      } else {
        return NULL;
      }
    }


    public function hasNextWeapon() {
      if ($this->armory->getNumWeapons() > $this->currentWeapon) {
	    return TRUE;
	  } else {
        return FALSE;
	  }
    }
	
  }
?>