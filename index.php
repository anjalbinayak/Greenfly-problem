<?php
include 'Greenfly.php';

$greenFly = new Greenfly(true);

for($i=1; $i<=28; $i++)
{
    $greenFly->live();
}

echo "Total no of green flies at the end of 28th days is ".$greenFly->getTotalChildCount(true);