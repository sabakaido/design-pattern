<?php
/*
   ----------------
   BookSelf
   ----------------
   books
   last
   ----------------
   getBookAt
   appendBook
   getLength
   iterator
   ----------------
 */
require_once('Aggregate.php');
require_once('Book.php');
require_once('BookShelfIterator.php');

class BookShelf implements Aggregate {
    private $books = array();
    private $last = 0;

    public function BookShelf() {
    }

    public function getBookAt($index) {
        return $this->books[$index];
    }

    public function appendBook($book) {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength() {
        return $this->last;
    }

    public function iterators() {
        return new BookShelfIterator($this);
    }
}
