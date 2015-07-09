<?php
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
include "function.php";
$date_today=date("Y-m-d");
$date_today=displaydate($date_today);
$time_today=date("H:i:s");
?>
<html>
<head><title>เพิ่ม Blog ใหม่</title></head>
<body>
<h1>เพิ่ม Blog ใหม่</h1>
<form method="POST" action="blog_add2.php">
  <table cellspacing="2">
    <tr> 
      <td><b>หัวข้อ : </b></td>
      <td><input name="title" type="text" SIZE="50"> *</td>
    </tr>
    <tr> 
      <td><b>วันที่ : </b></td>
      <td><?php echo "$date_today $time_today"; ?></td>
    </tr>
    <tr> 
      <td VALIGN="top"><b>เนื้อหา :</b></td>
      <td><textarea name="detail"cols="55" rows="8"></textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="Submit" value="Submit"> <input type="Reset" value="Reset"> </td>
    </tr>
  </table>
</form>
[ <a href="blog_main.php">กลับหน้าหลัก</a> ] 
</body>
</html>