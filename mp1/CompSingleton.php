<?php
include_once('AbstractComp.php');
class CompSingleton {


    private $username = 'tmh27';
    private $name  = 'Tameem';
    private static $comp = NULL;
    private static $isInUse = FALSE;


    private function __construct() {
    }


    static function logIn() {
      if (FALSE == self::$isInUse) {
        if (NULL == self::$comp) {
           self::$comp = new CompSingleton();
        }
        self::$isInUse = TRUE;
        return self::$comp;
      } else {
        return NULL;
      }
    }


    function logOut(CompSingleton $loggedOut) {
        self::$isInUse = FALSE;
    }


    function getUsername() {return $this->username;}


    function getName() {return $this->name;}


    function getUsernameAndName() {
      return $this->getName() . '\'s username is ' . $this->getUsername();
    }


  }

?>