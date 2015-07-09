<?php
include "connect.php";
$sql="select * from tb_guestbook";
$result=mysql_db_query($dbname,$sql);

echo "<h2>อ่านสมุดเยี่ยม</h2>";
while ($record=mysql_fetch_array($result) ) {
	$id=$record[id];
	$name=$record[name];
	$email=$record[email];
	$messages=$record[messages];
	$today_date=$record[today_date];

echo "
	<table  width='80%' border='1' cellpadding='0' cellspacing='0'>
		<tr> 
			<td height='60' valign='top'><FONT FACE='TAHOMA' SIZE='2' >
		        $messages</FONT></td>
		  </tr>
	  <tr>
		    <td bgcolor='#DDDDFF'>
				<FONT FACE='TAHOMA' SIZE='2' >
		       <b>โดย :</b> $name <b>อีเมล :</b> $email <br>
		      <b>ลำดับที่ :</b> $id <b>บันทึกเมื่อ :</b> $today_date</FONT></td>
				
	     </tr>
	</table><BR>";

} 
echo "<h4><A HREF='guest_form.html'>คลิกเพื่อเขียนสมุดเยี่ยม</A></h4>";
mysql_close();
?>