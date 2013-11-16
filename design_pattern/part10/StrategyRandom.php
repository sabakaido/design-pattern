<?php
require_once('Hand.php');
require_once('Strategy.php');
class StrategyRandom implements Strategy
{
    private $won = false;
    private $Hand = new Hand;
    function StrategyRandom ()
    {
    }

    function nextHand ()
    {
        return $this->Hand->getHand(); 
    }

    function study ($win)
    {
    }
}
