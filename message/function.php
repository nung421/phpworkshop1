<?php
function displaydate_time($x) {
	$thai_m=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน",
	"กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

	$datetime_array=explode(" ",$x);
	
	$date_array=explode("-",$datetime_array[0]);
	$y=$date_array[0];
	$m=$date_array[1]-1;
	$d=$date_array[2];

	$m=$thai_m[$m];
	$y=$y+543;

	$displaydate_time="$d $m $y $datetime_array[1]";
	return $displaydate_time;
} 
?>