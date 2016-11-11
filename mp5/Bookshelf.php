<?php
include_once('Book.php');

  class Bookshelf{
	
    private $books = array();
	  private $numBooks = 0;


    public function __construct() {
    }


    public function getNumBooks() {
      return $this->numBooks;
    }


    private function setNumBooks($newCount) {
      $this->numBooks = $newCount;
    }


    public function getBook($bookNumberToGet) {
	    if ( (is_numeric($bookNumberToGet)) && 
           ($bookNumberToGet <= $this->getNumBooks())) {
           return $this->books[$bookNumberToGet];
       } else {
           return NULL;
      }
	  }


    public function addBook(Book $book_in) {
      $this->setNumBooks($this->getNumBooks() + 1);
      $this->books[$this->getNumBooks()] = $book_in;
      return $this->getNumBooks();
    }


    public function removeBook(Book $book_in) {
      $counter = 0;
      while (++$counter <= $this->getNumBooks()) {
        if ($book_in->getAuthorAndTitle() == 
          $this->books[$counter]->getAuthorAndTitle())
		  {
            for ($x = $counter; $x < $this->getNumBooks(); $x++) {
              $this->books[$x] = $this->books[$x + 1];
          }
          $this->setNumBooks($this->getNumBooks() - 1);
        }
      }
      return $this->getNumBooks();
    }

  }
?>