<?php
$filename="number.txt";

$fp=fopen($filename,"r");
$get_number=fread($fp,filesize($filename));
fclose($fp);

$get_number=$get_number+1;

$fp=fopen($filename,"w");
fwrite($fp,$get_number);
fclose($fp);

echo "�س������繤���� #";
// echo "$get_number";  
printf("%05d",$get_number);
?>