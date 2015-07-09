<?php
function displaydate($x) {
	$date_m=array("January","February","March","April","May","June","July",
"August","September","October","November","December");
	$date_array=explode("-",$x);
	$y=$date_array[0];
	$m=$date_array[1]-1;
	$d=$date_array[2];

	$m=$date_m[$m];

	$displaydate="$d $m $y";
	return $displaydate;
} 
?>