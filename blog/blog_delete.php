<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_del=$_GET[id_del];

include "connect.php";
$sql="delete from tb_blog where id_blog='$id_del' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ลบ Blog ออกจากระบบเรียบร้อยแล้ว</h3>";
	echo "[ <a href=blog_main.php>กลับหน้าหลัก</a> ] ";
} else {
	echo "<h3>ไม่สามารถลบข้อมูลได้ครับ</h3>";
}
mysql_close();
?>