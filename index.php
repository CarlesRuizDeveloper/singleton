<?php
require ('class/Tiger.php');

$tigger1 = Tigger::getInstance();
$tigger1->roar(); 


$tigger2 = Tigger::getInstance();
$tigger2->roar(); 


echo "Counter: " . $tigger1->getCounter(); 


?>