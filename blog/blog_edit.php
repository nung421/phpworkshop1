<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_edit=$_GET[id_edit];

include "function.php";
include "connect.php";
$sql="select * from tb_blog where id_blog='$id_edit'";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
$id_blog=$r[id_blog];
$title_blog=$r[title_blog];
$detail_blog=$r[detail_blog];
$date_blog=displaydate($r[date_blog]);
$time_blog=$r[time_blog];
?>
<html>
<head><title>My Blog แก้ไข</title></head>
<body>
<h1>:: My Blog แก้ไข::</h1>
<form method="POST" action="blog_edit2.php">
  <table cellspacing="2">
    <tr> 
      <td><b>หัวข้อ : </b></td>
      <td><input name="title" type="text" value="<?php=$title_blog?>" SIZE="50"> * </td>
    </tr>
    <tr>
      <td VALIGN="top"><b>เขียนเมื่อ :</b></td>
      <td><?php echo "$date_blog $time_blog";?></td>
    </tr>
    <tr> 
      <td VALIGN="top"><b>เนื้อหา :</b></td>
      <td><textarea name="detail"cols="55" rows="8" ><?php=$detail_blog?></textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="Submit" value="Submit"> <input type="Reset" value="Reset">
        <input name="id_edit" type="hidden" value="<?php=$id_edit?>"></td>
    </tr>
  </table>
</form>
[ <a href="blog_main.php">กลับหน้าหลัก</a> ] 
</body>
</html>