<?php
$user_login=$_POST[user_login];
$pass_login=$_POST[pass_login];

if ($user_login=="" or $pass_login=="") {
	echo "<h3>ERROR : กรุณากรอกข้อมูลให้ครบนะครับ<h3>"; exit();
}
include "connect.php";
$sql="select * from tb_member where username='$user_login' and password='$pass_login'";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
mysql_close();

if($num<=0) {
	echo "<h3>ERROR : Username หรือ Password ไม่ถูกต้อง</h3>";
} else {
	session_start();
	$_SESSION[sess_userid]=session_id();
	$_SESSION[sess_username]=$user_login;
	header("Location: main.php");
}
?>