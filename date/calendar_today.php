<?php
//  ------------- ส่วนที่ 1 -------------
$year=date('Y');
$month=date('m');
$mkdate=mktime(0,0,0, $month, 1, $year);
$full_month=date('F',$mkdate);
$weekday=date('w',$mkdate); 
$last_days=date('t',$mkdate);
$day=1;
?>
<html>
<head><title>Calendar Today</title></head>
<body>
<table border="1">
	<tr bgcolor="#BBBBBB">
		<td colspan="7">
        	<center><b><?php echo "$full_month $year"; ?></b><center>
        	</td>
	</tr>
	<tr bgcolor="#BBBBBB">
		<td>Sun</td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
 		<td>Fri</td>
		<td>Sat</td>
	</tr>
	<tr>
<?php
//  ------------- ส่วนที่ 2 -------------
$start= 1;
while ($start<= $weekday) {
	echo "<td>&nbsp;</td>";
	$start++;
}
//  ------------- ส่วนที่ 3 -------------
$weekday++;
while ($day<=$last_days) {
	if (date("d")==$day) {
		echo "<td bgcolor='#BBBBBB'>$day</td>";
	} else {
		echo "<td>$day</td>";
	}
	if ($weekday==7 and $day<>$last_days) {
		echo '</tr><tr>';
		$weekday=0;
	}
	
	$day++; 
	$weekday++; 
}
//  ------------- ส่วนที่ 4 -------------
while ($weekday <= 7) {
	echo "<td> &nbsp; </td>";
	$weekday++;
}
?>
		</tr>
	</table>
</body>
</html>
