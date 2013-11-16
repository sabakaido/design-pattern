<?php
require_once ('Banner.php');
require_once ('Print.php');

class PrintBanner implements Prints {
    private $banner;
    public function PrintBanner($string) {
        $this->banner = new Banner($string);
    }
    public function printWeak() {
        $this->banner->showWithParen();
    }
    public function printStrong() {
        $this->banner->showWithAster();
    }
}
