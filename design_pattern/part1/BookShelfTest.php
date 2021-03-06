<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-18 at 20:37:12.
 */
require_once('BookShelf.php');
require_once('Book.php');
class BookShelfTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var BookShelf
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new BookShelf;
        $this->object2 = new Book('firstBook');
        $this->object3 = new Book('secondBook');
        $this->object4 = new Book('thirdBook');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers BookShelf::appendBook
     * @todo   Implement testAppendBook().
     */
    public function testAppendBook()
    {
        $this->object->appendBook($this->object2);
        $this->object->appendBook($this->object3);
        $this->object->appendBook($this->object4);
        echo $this->object->getBookAt(0)->getName() . "\n";
        echo $this->object->getBookAt(1)->getName() . "\n";
        echo $this->object->getBookAt(2)->getName() . "\n";
    }

    /**
     * @covers BookShelf::iterator
     * @todo   Implement testIterator().
    public function testIterator() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
     */
}
