<?php
$user_login=$_POST[user_login];
$pass_login=$_POST[pass_login];

if ($user_login=="admin" and $pass_login=="1234") {
	session_start();
	$_SESSION[sess_userid]=session_id();
	header("Location: blog_main.php");
} else {
	echo "<h3>ERROR : Username หรือ Password ไม่ถูกต้อง</h3>";
} 
?>