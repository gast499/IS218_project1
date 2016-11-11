<?php
  include_once('AbstractFactory.php');
  class LibrarianFactory extends AbstractFactory{
    function __construct(){
    }
    public function newLibrarian(){
      return new Librarian();
    }
  }
?>