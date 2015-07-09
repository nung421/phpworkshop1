<html>
<head><title>Member ระบบสมาชิก</title></head>
<body>
<body>
<h1>:: View Member ::</h1>
<table border="1">
  <tr bgcolor="#D3D3D3"> 
    <td>ลำดับ</td>
    <td>ชื่อ - สกุล</td>
    <td>เพศ</td>
    <td>อีเมล</td>
    <td>โทรศัพท์</td>
    <td>ที่อยู่</td>
    <td> ต้องการ</td>
  </tr>
  <?php
	$count=0;
	include "connect.php";
	$sql="select * from tb_member order by name";
	$result=mysql_db_query($dbname,$sql);
	while($record=mysql_fetch_array($result)) {
		$count++;
		echo "
		<tr> 
			<td>$count</td>
			<td>$record[name]</td>
			<td>$record[sex]</td>
			<td>$record[email]</td>
			<td>$record[telephone]</td>
			<td>$record[address]</td>
			<td><a href=\"delete.php?id_del=$record[id]\" onclick=\"return confirm(' ต้องการลบ $record[name] ออกจากระบบจริงหรือไม่ ')\">ลบ</a></td>
		</tr>";
	}
	mysql_close();
?>
</table>
</body>
</html>