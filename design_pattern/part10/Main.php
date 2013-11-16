<?php
require_once('Player.php');
require_once('Hand.php');
require_once('Strategy.php');
require_once('StrategyRandom.php');


$p1 = new Player(new StrategyRandom);

echo $p1->hand->retHand($p1->strategy->nextHand());

