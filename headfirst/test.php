<?php
require_once('SimpleDotCom.php');

$locations = array(2,4,6);

$hoge = new SimpleDotCom();

$hoge->setLocationCells($locations);

echo $hoge->checkYourself('5');
echo $hoge->checkYourself('2');
echo $hoge->checkYourself('4');
echo $hoge->checkYourself('1');
