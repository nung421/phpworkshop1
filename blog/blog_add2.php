<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$title=$_POST[title];
$detail=$_POST[detail];

$date_today=date("Y-m-d");
$time_today=date("H:i:s");

include "connect.php";

$sql="select * from tb_blog where date_blog='$date_today' ";
$result=mysql_db_query("$dbname",$sql);
$number=mysql_num_rows($result);
if ($number<>0) {
	echo "<h3>ERROR : ไม่อนุญาตให้เพิ่ม Blog ใหม่</h3>";
} else {
	$sql_insert="INSERT INTO tb_blog  VALUES('','$title','$detail','$date_today','$time_today')";
	$result_insert=mysql_db_query("$dbname",$sql_insert);
	if ($result_insert) {
		echo "<h3>เพิ่มข้อมูลเรียบร้อยแล้วครับ</h3>";
		echo "[ <a href=blog_main.php>กลับหน้าหลัก</a> ] ";
	} else {
		echo "<h3>ไม่สามารถเพิ่มข้อมูลได้</h3>";
	}
}
mysql_close();
?>