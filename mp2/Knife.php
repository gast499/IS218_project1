<?php
  //include_once('WeaponSingleton.php');
  class Knife{
    private $range = 75;
    
    public function getRange(){
      return $this->range;
    }
    /*
    private $player;
    private $hasWeapon = FALSE;


    function __construct() {
    }

/*
    function getUsernameAndName() {
      if (TRUE == $this->hasWeapon) {
        return $this->player->getUsernameAndName();
      } else {
        return "The user cannot log in.  The computer is already in use.";
      }
    }


    function pickup() {
      $this->player = WeaponSingleton::pickup();
      if ($this->player == NULL) {
        $this->hasWeapon = FALSE;
      } else {
        $this->hasWeapon = TRUE;
      }
    }


    function drop() {
      $this->player->drop($this->player);
    }
*/
  } 
?>