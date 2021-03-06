<?php
  include_once('CompSingleton.php');
  include_once('CompUser.php');
  include_once('CompStation.php');
  include_once('Librarian.php');
  include_once('LibrarianFactory.php');


  define('BR', '<'.'BR'.'>');


  writeln('TESTING SINGLETON, ABSTRACT FACTORY, AND OBSERVER DESIGN PATTERNS');
  writeln('');
  
  $station1 = new CompStation();
  $library = new LibrarianFactory();
  $lib1 = $library->newLibrarian();
  $station1->attach($lib1);


  $compUser1 = new CompUser();
  $compUser2 = new CompUser();
  
  writeln('In this library, there is one computer station.');
  writeln('The librarian checks the station to see if it is in use.');

  writeln('A customer walks in and wants to use the computer station.');
  writeln('The librarian checks if it\'s free.');
  writeln('');
  $station1->updateStation('free');
  writeln('');

  writeln('The customer logs in and provides his information:');
  $compUser1->logIn();
  writeln('CompUser1 wants to log in.');
  writeln('CompUser1 Username and Name: ');
  writeln($compUser1->getUsernameAndName());
  
  writeln('Another customer walks in and the librarian checks if the station is in use:');
  writeln('');
  $station1->updateStation('in use');
  writeln('');
  

  writeln('The second user is unable to log in because the computer is in use:');
  $compUser2->logIn();
  writeln('CompUser2 wants to log in.');
  writeln('CompUser2 Username and Name: ');
  writeln($compUser2->getUsernameAndName());

  writeln('The first customer logs out.');
  $compUser1->logOut();
  writeln('CompUser1 logged out.');
  writeln('');
  writeln('The librarian checks if the station is in use.');
  writeln('');
  $station1->updateStation('free');
  writeln('');

  writeln('The second user now logs in.');
  $compUser2->logIn();
  writeln('CompUser2 Username and Name: ');
  writeln($compUser2->getUsernameAndName());
  writeln('');
  writeln('The librarian checks if the system is in use.');
  writeln('');
  $station1->updateStation('in use');
  writeln('');


  writeln('The library closed.');
  writeln('');
  writeln('END TEST');


  function writeln($line_in) {
    echo $line_in.'<'.'BR'.'>';
  }
?>