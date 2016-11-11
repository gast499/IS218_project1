<?php
  include_once('AbstractSubject.php');
  include_once('Librarian.php');


  class CompStation extends AbstractSubject {


    private $compStation = NULL;


    private $librarians = array();


    function __construct() {
    }


    function attach(AbstractObserver $observer_in) {
      //could also use array_push($this->librarians, $observer_in);
      $this->librarians[] = $observer_in;
    }


    function detach(AbstractObserver $observer_in) {
      //$key = array_search($this->librarians, $observer_in);
      foreach($this->librarians as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->librarians[$okey]);
        }
      }
    }


    function notify() {
      foreach($this->librarians as $obs) {
        $obs->update($this);
      }
    }


    function updateStation($newStation) {
      $this->station = $newStation;
      $this->notify();
    }


    function getStation() {
      return $this->station;
    }


  }
?>