<?php
include "chksession.php";
$email_edit=$_POST[email_edit];
$tel_edit=$_POST[tel_edit];
$address_edit=$_POST[address_edit];

include "function.php";
if (!checkemail($email_edit)) {
	echo "<h3>ERROR : รูปแบบอีเมลที่กรอกไม่ถูกต้องนะครับ </h3>"; exit();
}
include "connect.php";
$sql="update tb_member set  email='$email_edit', telephone='$tel_edit' ,address='$address_edit' where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ข้อมูลของท่านถูกแก้ไขเรียบร้อยแล้ว</h3>";
	echo "[ <a href=main.php>กลับหน้าหลัก</a> ] ";
} else {
	echo "<h3>ไม่สามารถแก้ไขข้อมูลได้</h3>";
}
mysql_close();
?>