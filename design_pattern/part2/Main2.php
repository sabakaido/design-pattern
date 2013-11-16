<?php
require_once('PrintBanner_delegation.php');
class Main {
    public function Main() {
        $p = new PrintBanner('Hello');
        $p->printWeak();
        $p->printStrong();
    }
}

$main = new Main();
