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
	echo "<h3>ź Blog �͡�ҡ�к����º��������</h3>";
	echo "[ <a href=blog_main.php>��Ѻ˹����ѡ</a> ] ";
} else {
	echo "<h3>�������öź���������Ѻ</h3>";
}
mysql_close();
?>