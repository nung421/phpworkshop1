<?php
$id_del=$_GET['id_del'];
$name_del=$_GET['name_del'];

include "connect.php";
$sql="delete from tb_photo where id_photo=$id_del";
mysql_db_query($dbname,$sql);

unlink("images/$name_del");

echo "<h3><a href='admin.php'>�ٻ�Ҿ�١ź���º�������Ǥ�Ѻ</a></h3>";
?>