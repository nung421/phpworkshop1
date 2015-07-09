<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}

$id_edit=$_POST[id_edit];
$title=$_POST[title];
$detail=$_POST[detail];

include "connect.php";
$sql="update tb_blog set  title_blog='$title',detail_blog='$detail' where id_blog='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>แก้ไข Blog เรียบร้อยแล้วครับ</h3>";
	echo "[ <a href=blog_main.php>กลับหน้าหลัก</a> ] ";
} else {
	echo "<h3>ไม่สามารถแก้ไขข้อมูลได้</h3>";
}
mysql_close();
?>