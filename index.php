<?php
include 'Greenfly.php';

$greenFly = new Greenfly(true);

for($i=1; $i<=28; $i++)
{
    $greenFly->live();
}

var_dump($greenFly->getTotalChildCount(true));