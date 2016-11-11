<?php
include_once('CompSingleton.php');


  Class CompUser {


    private $onComp;
    private $inUse = FALSE;


    function __construct() {
    }


    function getUsernameAndName() {
      if (TRUE == $this->inUse) {
        return $this->onComp->getUsernameAndName();
      } else {
        return "The user cannot log in.  The computer is already in use.";
      }
    }


    function logIn() {
      $this->onComp = CompSingleton::logIn();
      if ($this->onComp == NULL) {
        $this->inUse = FALSE;
      } else {
        $this->inUse = TRUE;
      }
    }


    function logOut() {
      $this->onComp->logOut($this->onComp);
    }


  }
?>