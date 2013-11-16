<?php
class Hand
{
    private $guu = 'ぐー';
    private $chi = 'ちょき';
    private $paa = 'ぱー';
    private $handvalue;

    public static final $hand = {
        new Hand($guu);
        new Hand($chi);
        new Hand($paa);
    }
    private function Hand ($handvalue) {
        $this->handvalue = $handvalue;
    }
    public static function getHand($handdvalue) {
        return $hand[$this->handvalue];
    }
}
