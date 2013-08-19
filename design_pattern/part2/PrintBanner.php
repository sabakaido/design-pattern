<?php
require_once ('Banner.php');
require_once ('Print.php');

class PrintBanner extends Banner implements Prints {
    public function PrintBanner($string) {
        parent::Banner($string);
    }
    public function printWeak() {
        parent::showWithParen();
    }
    public function printStrong() {
        parent::showWithAster();
    }
}
