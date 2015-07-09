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
<p> [ <a href="blog_add.php">เพิ่ม Blog ใหม่</a> ] [ <a href="blog_logout.php">ออกจากระบบ</a> ]</p>
<table border="1">
  <tr bgcolor="#E8E8E8"> 
    <td><div align="center"><strong>วันที่เขียน</strong></div></td>
    <td><div align="center"><strong>หัวข้อ</strong></div></td>
    <td><div align="center"><strong>[แก้ไข]</strong></div></td>
    <td><div align="center"><strong>[ลบ]</strong></div></td>
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
			<td><a href=\"blog_edit.php?id_edit=$id_blog\">[แก้ไข]</a></td>
			<td><a href=\"blog_delete.php?id_del=$id_blog\" onclick=\"return confirm('ยืนยันการลบ Blog หัวข้อ  $title_blog ')\">[ลบ]</a></td>
			</tr>
		</tr>";
	}
	mysql_close();
?>
</table>
</body>
</html>