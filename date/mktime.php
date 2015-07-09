<?php
$timestamp=mktime(0,0,0,2,1,2005);
echo "$timestamp<br>";

$year=date('Y',$timestamp);
$month=date('F',$timestamp);
$number=date('t',$timestamp);

echo "<h2>$month $year : $number days</h2>";
?>