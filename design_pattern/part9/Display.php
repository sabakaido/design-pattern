<?php
class Display
{
    private $impl;
    public function Display ($impl)
    {
        $this->impl = $impl;
    }
    public function open()
    {
        $this->impl->rawOpen();
    }
    public function prints()
    {
        $this->impl->rawPrint();
    }
    public function close()
    {
        $this->impl->rawClose();
    }
    public function displays()
    {
        $this->open();
        $this->prints();
        $this->close();
    }
}
