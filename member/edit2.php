<?php
include "chksession.php";
$email_edit=$_POST[email_edit];
$tel_edit=$_POST[tel_edit];
$address_edit=$_POST[address_edit];

include "function.php";
if (!checkemail($email_edit)) {
	echo "<h3>ERROR : �ٻẺ����ŷ���͡���١��ͧ�Ф�Ѻ </h3>"; exit();
}
include "connect.php";
$sql="update tb_member set  email='$email_edit', telephone='$tel_edit' ,address='$address_edit' where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>�����Ţͧ��ҹ�١������º��������</h3>";
	echo "[ <a href=main.php>��Ѻ˹����ѡ</a> ] ";
} else {
	echo "<h3>�������ö��䢢�������</h3>";
}
mysql_close();
?>