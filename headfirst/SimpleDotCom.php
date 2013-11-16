<?php

class SimpleDotCom {
  private $locationCells = array();
  private $numOfHits = 0;

//  public function __construct ($locationCells) {
//    $this->locationCells = $locationCells;
//  }

  public function setLocationCells ($locs) {
    $this->locationCells = $locs;
  }

  public function checkYourself ($stringGuess) {
    $result = "miss";
    foreach ($this->locationCells as $value) {
      if ($value == $stringGuess) {
        $result = "hit";
        $this->numOfHits++;
        break;
      }
    }
    
    if ($this->numOfHits == count($this->locationCells)) {
       $result = "kill";
    }

    return $result;
  }
}

