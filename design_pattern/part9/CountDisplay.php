<?php
require_once('Display.php');
class CountDisplay extends Display
{
    public function CountDisplay($impl)
    {
        $this->Display($impl);
    }
    public function multiDisplay($times)
    {
        $this->open();
        for ($i=0;$i<$times;$i++)
        {
            $this->prints();
        }
        $this->close();
    }
}
