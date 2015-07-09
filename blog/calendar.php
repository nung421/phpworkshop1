<?php
include "connect.php";
include "function.php";

$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];

if ($month=="" and $year =="") {
	$day=date('d');
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
$day1 = 1;
?>

<table width="90%">
  <tr valign="top">
    <td width="33%"><table border="1">
        <tr bgcolor="#BBBBBB"> 
          <td colspan="7" ><center>
              <b> <a href="index.php?month=<?php=$m_back?>&year=<?php=$y_back?>"> 
              << </a> <?php echo "$full_month $year"; ?> <a href="index.php?month=<?php=$m_next?>&year=<?php=$y_next?>"> 
              >> </a> </b></center></td>
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
while ($day1 <= $last_days) {
		
		$sql_cal="select * from tb_blog where date_blog='$year-$month-$day1'";
		$result_cal=mysql_db_query($dbname,$sql_cal);
		$number_cal=mysql_num_rows($result_cal);


		if ($number_cal>0) {
			echo "<td><a href='index.php?day=$day1&month=$month&year=$year'>$day1</a></td>";
		} else {
			echo "<td>$day1</td>";
		}

	if ($weekday == 7 and $day1<>$last_days) {
		echo '</tr><tr>';
		$weekday = '0';
	}
	$day1++; 
	$weekday++; 
}

while ($weekday <= 7) {
	echo "<td> &nbsp; </td>";
	$weekday++;
}
?>
</table>