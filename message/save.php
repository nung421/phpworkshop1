<?php
$name=$_POST[name];
$message=$_POST[message];

if ($name=="" OR $message=="") {
	echo "<h3><a href='index.php'>ERROR : ��سҡ�͡���������ú���¤�Ѻ</a></h3>";
	exit();
}

include "connect.php";

$save_date=date("Y-m-d H:i:s"); 
$sql="insert into tb_message values('','$name','$message','$save_date')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	header("Location: index.php");
} else {
	 echo "<h3>ERROR : �������ö�ѹ�֡��������</h3>";
}
mysql_close();
?>