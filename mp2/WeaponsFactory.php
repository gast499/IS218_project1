<?php
  include_once('FactoryMethod.php');
  include_once('Knife.php');
  include_once('Pistol.php');
  class WeaponsFactory extends FactoryMethod { 
    function makeWeapon($param) {
      $weapon = NULL;   
        switch ($param) {
            case "melee":
                $weapon = new Knife;
            break;
            case "ranged":
                $weapon = new Pistol;
            break;
            default:
                $weapon = new Knife;
            break;        
        }     
      return $weapon;
    }
  }
?>