<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-19 at 23:05:55.
 */
require_once('PrintBanner.php');
class PrintBannerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PrintBanner
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PrintBanner('test');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers PrintBanner::printWeak
     * @todo   Implement testPrintWeak().
     */
    public function testPrintWeak()
    {
        $this->object->PrintWeak();
    }

    /**
     * @covers PrintBanner::printStrong
     * @todo   Implement testPrintStrong().
     */
    public function testPrintStrong()
    {
        $this->object->PrintStrong();
    }
}
