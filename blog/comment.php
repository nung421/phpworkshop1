<?php
$name=$_POST[name];
$detail=$_POST[detail];
$day=$_POST[day];
$month=$_POST[month];
$year=$_POST[year];
$id_blog=$_POST[id_blog];

$date_today=date("Y-m-d");
$time_today=date("H:i:s");

include "connect.php";
$sql="INSERT INTO tb_comment  VALUES('','$name','$detail','$date_today','$time_today','$id_blog') ";
$result=mysql_db_query("$dbname",$sql);
if ($result) {
	echo "<h3>���� ���йӵԪ� ���º�������Ǥ�Ѻ</h3>";
	echo "[ <a href=index.php?day=$day&month=$month&year=$year>��Ѻ�˹���á</a> ] ";
} else {
	echo "<h3>�������ö���� ���йӵԪ���</h3>";
}
mysql_close();
?>