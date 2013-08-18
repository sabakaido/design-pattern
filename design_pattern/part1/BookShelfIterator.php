<?php
/*
   ----------------
   BookShelfIterator
   ----------------
   ----------------
   hasNext
   next
   ----------------
*/

require_once ('BookShelf.php');
require_once ('Iterators.php');

class BookShelfIterator implements Iterators {
    private $bookShelf;
    private $index;

    public function BookShelfIterator($bookShelf) {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    function hasNext() {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    function next() {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}

