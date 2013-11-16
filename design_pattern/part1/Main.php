<?php

require_once('BookShelf.php');
require_once('Book.php');

class Main {
    public function run() {
        $this->shelf = new BookShelf;
        $this->shelf->appendBook(new Book("Around the World in 80 days"));
        $this->shelf->appendBook(new Book("Bible"));
        $this->shelf->appendBook(new Book("Cinderella"));
        $this->shelf->appendBook(new Book("Daddy-Long-Legs"));
        $this->it = $this->shelf->iterators();

        while ($this->it->hasNext()) {
            $book = $this->it->next();
            echo $book->getName() . "\n";
        }
    }
}

$main = new Main;
$main->run();
