<?php
$user_forget=$_POST[user_forget];
if ($user_forget=="") {
	echo "<h3>ERROR : กรุณากรอกข้อมูลให้ครบนะครับ<h3>"; exit();
}
include "connect.php";
$sql="select * from tb_member where username='$user_forget' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
$record=mysql_fetch_array($result);
$to=$record[email];
$password=$record[password];
if($num<=0) {
	echo "<h3>ERROR : Username นี้ไม่มีอยู่ในระบบสมาชิกครับ</h3>";
} else {
	$subject = "แจ้งรหัสผ่านของระบบสมาชิก";
	$message = "รหัสผ่านของ Username : $user_forget คือ: $password";
	$headers = "From: Member ระบบสมาชิก";
	if (mail($to, $subject, $message, $headers)) {
		echo "<h3>ระบบได้ส่งรหัสผ่านไปทางอีเมลเรียบร้อยแล้วครับ</h3>";
	} else {
		echo "<h3>ไม่สามารถส่งรหัสผ่านไปทางอีเมลได้</h3>";
	}
}
mysql_close();
?>