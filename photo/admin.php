<html>
<head><title> PHOTO GALLERY</title></head>
<body>
<h2>ADMIN : PHOTO GALLERY</h2>
<form method=POST action="insert.php" ENCtype="multipart/form-data">
  <table>
    <tr> 
      <td><div align="right">รูปภาพ :</div></td>
      <td><input type="file" name="photo"></td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">คำอธิบายรูปภาพ: </div></td>
      <td><textarea name="detail" rows="4"cols="35"></textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" value="Submit"> 
	  <input name="reset" type="reset" value="Reset"> 
      </td>
    </tr>
  </table>
</form>
<?php
$no=0;
include "connect.php";
$sql="select * from tb_photo order by id_photo";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num>0) {

	echo "
		
	<table BORDER=1 >
  <TR bgcolor=#EEEEEE> 
    <td><strong>ลำดับ</strong></td>
    <td><strong>ชื่อไฟล์รูปภาพ</strong></td>
    <td><strong>รายละเอียด</strong></td>
    <td><strong>ลบ</strong></td>
  </tr>";

	while ($r=mysql_fetch_array($result)) {
		$id_photo=$r[id_photo];
		$name_photo=$r[name_photo];
		$detail_photo=$r[detail_photo];
		$no++;

		echo " 
		<tr>
		<td><center>$no</center></td>
		<td>$name_photo</td>
		<td>$detail_photo</td>
		<td><a href='delete.php?id_del=$id_photo&name_del=$name_photo' 
			onclick=\"return confirm('คุณแน่ใจที่จะลบรูป $name_photo ออกจากระบบ?')\"><img src=\"delete.jpg\" border=0></a> 
			</td> </tr>"; 
		} // end while 
	} // end if 
  ?> 
</table>
</body>
</html>