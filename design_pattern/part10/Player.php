<?php
class Player
{
    private $player_name;
    public  $strategy;
    
    private $wincount;
    private $losecount;
    private $gamecount;

    function Player ($player_name, $strategy)
    {
        $this->player_name = $player_name;
        $this->strategy    = $strategy;
    }
    public nextHand()
    {
        return $this->strategy->nextHand();
    }
    public function win()
    {
        $this->strategy->study(true);
        $this->wincount++;
        $this->gamecount++;
    }
    public function lose()
    {
        $this->strategy->study(false);
        $this->losencount++;
        $this->gamecount++;
    }
    public function even()
    {
        $this->gamecount++;
    }
}
