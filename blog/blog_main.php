<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
include "function.php";
?>
<html>
<head><title>My Blog Administration</title></head>
<body>
<h1>:: My Blog Administration ::</h1>
<p> [ <a href="blog_add.php">���� Blog ����</a> ] [ <a href="blog_logout.php">�͡�ҡ�к�</a> ]</p>
<table border="1">
  <tr bgcolor="#E8E8E8"> 
    <td><div align="center"><strong>�ѹ�����¹</strong></div></td>
    <td><div align="center"><strong>��Ǣ��</strong></div></td>
    <td><div align="center"><strong>[���]</strong></div></td>
    <td><div align="center"><strong>[ź]</strong></div></td>
  </tr>
  <?php
	include "connect.php";
	$sql="select * from tb_blog order by id_blog desc";
	$result=mysql_db_query($dbname,$sql);
	while($r=mysql_fetch_array($result)) {
		$id_blog=$r[id_blog];
		$title_blog=$r[title_blog];
		$date_blog=$r[date_blog];
		$date_blog=displaydate($date_blog);
		$time_blog=$r[time_blog];
		echo "
			<tr> 
			<td>$date_blog $time_blog</td>
			<td>$title_blog</td>
			<td><a href=\"blog_edit.php?id_edit=$id_blog\">[���]</a></td>
			<td><a href=\"blog_delete.php?id_del=$id_blog\" onclick=\"return confirm('�׹�ѹ���ź Blog ��Ǣ��  $title_blog ')\">[ź]</a></td>
			</tr>
		</tr>";
	}
	mysql_close();
?>
</table>
</body>
</html>