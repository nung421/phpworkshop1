<?php
if ($_GET['month'] != "" and $_GET['year'] != "") {
	$month = $_GET['month'];
	$year = $_GET['year'];
} else {
	$month = date('m');
	$year = date('Y');
}
if ($month==1) {
	$m_back=12;
	$m_next=$month+1;
	$y_back=$year-1;
	$y_next=$year;
} else if ($month==12) {
	$m_back=$month-1;
	$m_next=1;
	$y_back=$year;
	$y_next=$year+1;
} else { 
	$m_back=$month-1;
	$m_next=$month+1;
	$y_back=$year;
	$y_next=$year;
}
$mkdate = mktime(0,0,0, $month, 1, $year);
$full_month=date('F',$mkdate);
$weekday = date('w',$mkdate); 
$last_days = date('t',$mkdate);
$day = 1;
?>
<html>
<head><title>Calendar</title></head>
<body>
  <table border="1">
	<tr bgcolor="#BBBBBB">
		<td colspan="7" ><center><b>
		<a href="calendar.php?month=<?php=$m_back?>&year=<?php=$y_back?>"> << </a> 
		<?php echo "$full_month $year"; ?>
		<a href="calendar.php?month=<?php=$m_next?>&year=<?php=$y_next?>"> >> </a>
		</b></center></td>
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
$start= 1;
while ($start<= $weekday) {
	echo "<td> &nbsp; </td>";
	$start++;
}
$weekday++;

while ($day <= $last_days) {
	if (date("d") == $day && date("m") == $month && date("Y") == $year) {
		echo "<td bgcolor='#BBBBBB'>$day</td>";
	} else {
		echo "<td>$day</td>";
	}
	if ($weekday == 7 and $day<>$last_days) {
		echo '</tr><tr>';
		$weekday = '0';
	}
	$day++; 
	$weekday++; 
}
while ($weekday <= 7) {
	echo "<td> &nbsp; </td>";
	$weekday++;
}
?>
</tr>
<tr bgcolor="#BBBBBB">
		<td colspan="7" ><center>
<?php
$m_today=date('m');
$y_today=date('Y');
?>
		<a href="calendar.php?mouth=<?php=$m_today?>&year=<?php=$y_today?>">Today</a>
		</center></td>
</tr>	
</table>
</body>
</html>
