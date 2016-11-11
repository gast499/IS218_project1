<?php
  include_once('Book.php');  
  include_once('Bookshelf.php');
  include_once('BookshelfIterator.php');
  include_once('Librarian.php');
  include_once('Computer.php');
  include_once('StrategyChooser.php');
  
  echo 'TESTING ITERATOR, STRATEGY, AND OBSERVER PATTERN<br><br>';
  
  $book1 = new Book("Homeland","R.A. Salvatore");
  $book2 = new Book("Brisingr","Christopher Paolini");
  $book3 = new Book("The Return of the King","J.R.R. Tolkein");
  $book4 = new Book("Harry Potter and the Prisoner of Azkaban","J.K. Rowling");
  $book5 = new Book("The Way of Shadows","Brent Weeks");
  
  echo 'A customer walks into a library looking to purchase a pre-owned book.<br>';
  echo 'The customer browses the selection:<br><br>';
  $bs = new Bookshelf();
  
  $bs->addBook($book1);
  $bs->addBook($book2);
  $bs->addBook($book3);
  $bs->addBook($book4);
  $bs->addBook($book5);
  /*
  $bsCopy = new Bookshelf();
  $bsCopy->addBook($book1);
  $bsCopy->addBook($book2);
  $bsCopy->addBook($book3);
  $bsCopy->addBook($book4);
  $bsCopy->addBook($book5);
  */
  $comp = new Computer();
  $it = new BookshelfIterator($bs);
  $lib = new Librarian();
  $comp->attach($lib);
  $info = '';
  while ($it->hasNextBook()) {
    $book = $it->getNextBook();
    $info = $book->getAuthorAndTitle();
    echo "The customer is now looking at: ";
    echo $info . '<br><br>';
  }
  $comp->write($info);
  
  $strategyChooserC = new StrategyChooser('C');
  $strategyChooserCC = new StrategyChooser('CC');
  echo '<br><br>The book costs $19.99.  The librarian asks if he would like to pay cash or credit.<br>';
  $type = $strategyChooserC -> showPaymentType();
  echo '<br>The customer decides to pay ' . $type;
  echo '<br>The librarian thanks the customer for his purchase and the customer walks out.';
  //*/
  echo '<br><br>FINISHED TESTING ITERATOR, STRATEGY, AND OBSERVER PATTERN';
  
?>