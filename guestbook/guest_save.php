<?php
$name_insert=$_POST[name_insert];
$email_insert=$_POST[email_insert];
$messages_insert=$_POST[messages_insert];

if ($name_insert=="" OR $messages_insert=="") {
	echo "<h3><a href='guest_form.html'>ERROR : ��سҡ�͡���������ú���¤�Ѻ</a></h3>";
	exit();
}

echo "$name_insert <BR> $email_insert <BR> $messages_insert <BR> $today_insert ";

$today_insert=date("Y-m-d H:i:s"); 

include "connect.php";

$sql="insert into tb_guestbook values('','$name_insert','$email_insert','$messages_insert','$today_insert')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	  echo "<h3>�����Ţͧ��ҹ�١�ѹ�֡���º�������Ǥ�Ѻ</h3>";
	  echo "<A HREF='guest_view.php'>��ԡ������ҹ��ش������</A>";
} else {
	 echo "<h3>ERROR : �������ö�ѹ�֡��������</h3>";
}
mysql_close();
?>