<?php

class Banner {
    private $string;
    public function Banner($string) {
        $this->string = $string;
    }
    public function showWithParen() {
        echo "($this->string)" . "\n";
    } 
    public function showWithAster() {
        echo "*$this->string*" . "\n";
    }
}
