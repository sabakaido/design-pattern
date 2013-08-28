<?php
require_once('DisplayImpl.php');
class StringDisplayImpl extends DisplayImpl
{
    private $string;
    private $width;
    public function StringDisplayImpl($string)
    {
        $this->string = $string;
        $this->width  = strlen($this->string);
    }
    public function rawOpen()
    {
        $this->printLine();
    }
    public function rawPrint()
    {
        echo "|".$this->string."|\n";
    }
    public function rawClose()
    {
        $this->printLine();
    }
    private function printLine()
    {
        echo "+";
        for ($i=0;$i<$this->width;$i++)
        {
            echo "-";
        }
        echo "+\n";
    }
}
