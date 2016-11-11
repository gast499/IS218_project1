<?php
  include_once('Book.php');
  include_once('Bookshelf.php');


  class BookshelfIterator {
	
    protected $bookshelf;
    protected $currentBook = 0;


    public function __construct(Bookshelf $bookshelf_in) {
      $this->bookshelf = $bookshelf_in;
    }
	
    public function getCurrentBook() {
	  if (($this->currentBook > 0) && 
          ($this->bookshelf->getNumBooks() >= $this->currentBook)) {
        return $this->bookshelf->getBook($this->currentBook);
      }
    }


    public function getNextBook() {
	  if ($this->hasNextBook()) {
        return $this->bookshelf->getBook(++$this->currentBook);
      } else {
        return NULL;
      }
    }


    public function hasNextBook() {
      if ($this->bookshelf->getNumBooks() > $this->currentBook) {
	    return TRUE;
	  } else {
        return FALSE;
	  }
    }
	
  }
?>