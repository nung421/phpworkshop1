<?php
$filename="number.txt";

$fp=fopen($filename,"r");
$get_number=fread($fp,filesize($filename));
fclose($fp);

$get_number=$get_number+1;

$fp=fopen($filename,"w");
fwrite($fp,$get_number);
fclose($fp);

$gcounter=sprintf("%05d",$get_number);
for ($i=0;$i<5;$i++) {
	echo "<img src='blue/$gcounter[$i].gif'>";
}
?>