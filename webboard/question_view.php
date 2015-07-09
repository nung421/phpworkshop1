<?
include "connect.php";
include "function.php";

$sql="select * from tb_question order by id_ques desc"; 
$result=mysql_db_query($dbname,$sql);

echo "
<h3> Webboard กระทู้ ถาม - ตอบ</h3>
<a href='guestion_form.php'>ตั้งคำถามใหม่</a><p>
<table width='80%' border='1'>
  <tr bgcolor='#D2E9FF'> 
    <td width='8%'><center><b><font size='2' face='MS Sans Serif'>รหัส</font></b></center></td>
    <td width='61%'> <center><b><font size='2' face='MS Sans Serif'>หัวข้อคำถาม</font></b></center></td>
    <td width='15%'> <center><b><font size='2' face='MS Sans Serif'>ผู้ตั้งคำถาม</font></b></center></td>
    <td width='16%'> <center><b><font size='2' face='MS Sans Serif'>ตั้งเมื่อวันที่</font></b></center></td>
  </tr>";

while($record=mysql_fetch_array($result)) {
	$id_ques=$record[id_ques];
	$title_ques=$record[title_ques];
	$detail_ques=$record[detail_ques];
	$name_ques=$record[name_ques];
	$email_ques=$record[email_ques];
	$date_ques=$record[date_ques];

	$title_ques=htmlspecialchars($title_ques);
	$name_ques=htmlspecialchars($name_ques);

	$detail_ques=nl2br(htmlspecialchars($detail_ques));

	
	$date_ques=displaydate($date_ques);
	
	echo "
	<tr bgcolor='#FFFFFF'> 
		<td width='8%'><center><font size='2' face='MS Sans Serif'>#$id_ques</font></center></td>
		<td width='61%'> <font size='2' face='MS Sans Serif'><a href='answer_view.php?id_ques=$id_ques'>$title_ques</a></font></td>
		<td width='15%'> <center><font size='2' face='MS Sans Serif'>$name_ques</font></center></td>
		<td width='16%'> <center><font size='2' face='MS Sans Serif'>$date_ques</font></center></td>
	</tr>";

} // end while
echo "</table>";
?>