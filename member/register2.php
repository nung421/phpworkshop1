<?php
$user_reg=$_POST[user_reg];
$pass_reg=$_POST[pass_reg];
$name_reg=$_POST[name_reg];
$sex_reg=$_POST[sex_reg];
$email_reg=$_POST[email_reg];
$address_reg=$_POST[address_reg];
$date_reg=date("Y-m-d");

if ($user_reg=="" or $pass_reg=="" or $name_reg=="" ) {
	echo "<h3>ERROR : กรุณากรอกข้อมูลให้ครบนะครับ<h3>"; exit();
}
include "function.php";
if (!checkemail($email_reg)) {
	echo "<h3>ERROR : รูปแบบอีเมลที่กรอกไม่ถูกต้องนะครับ </h3>"; exit();
}
include "connect.php";
$sql="select * from tb_member where username='$user_reg' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num>0) {
	echo "<h3>ERROR : Username ซ้ำครับ </h3>";	 exit();
}
$sql="insert into tb_member values('','$user_reg','$pass_reg','$name_reg','$sex_reg',
'$email_reg','$tel_reg','$address_reg','$date_reg')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ข้อมูลของท่านถูกบันทึกเรียบร้อยแล้ว</h3>";
	echo "<A HREF='index.html'>คลิกเพื่อเข้าระบบสมาชิก</A><BR><BR>";
} else {
	echo "<h3>ไม่สามารถสมัครเป็นสมาชิกได้</h3>";
}
mysql_close();
?>