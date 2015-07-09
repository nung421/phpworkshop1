<?
$id=$_GET[id];
$goto=$_GET[goto];

include "connect.php";
$sql="select count_click from tb_url where id='$id' ";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
$count_click=$rs[count_click];

$count=$count_click+1;

$sql2="update tb_url set count_click='$count' where id='$id' ";
$result2=mysql_db_query($dbname,$sql2);

header("Location: $goto");
?>