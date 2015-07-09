<?
include "connect.php";
include "function.php";

$id_ques=$_GET[id_ques];

///////////////// ส่วนที่ 1 /////////////////

$sql="select * from tb_question where id_ques='$id_ques' ";
$result=mysql_db_query($dbname,$sql);
$record=mysql_fetch_array($result);

$id_ques=$record[id_ques];
$title_ques=$record[title_ques];
$detail_ques=$record[detail_ques];
$name_ques=$record[name_ques];
$email_ques=$record[email_ques];
$date_ques=$record[date_ques];

$title_ques=htmlspecialchars($title_ques);
$detail_ques=nl2br(htmlspecialchars($detail_ques));
$name_ques=htmlspecialchars($name_ques);
$email_ques=htmlspecialchars($email_ques);
$date_ques=displaydate($date_ques);

echo "
  <h2>$title_ques</h2>
  <table width='65%' border='1'>
    <tr> 
      <td bgcolor='#D2E9FF'>
	    <font size='2' face='MS Sans Serif'>
          $detail_ques
        <p><b>โดย :</b>  $name_ques <b>อีเมล์ :</b>  $email_ques <b>เมื่อ :</b> $date_ques   
		<a href='question_del.php?id_ques=$id_ques'> [ Delete ] </a></p></font></td>
    </tr>
  </table><BR>";

///////////////// ส่วนที่ 2 /////////////////

$sql="select * from tb_answer where ref_id='$id_ques' order by id_ans";
$result=mysql_db_query($dbname,$sql);

while($record=mysql_fetch_array($result)) {
	$id_ans=$record[id_ans];
	$detail_ans=$record[detail_ans];
	$name_ans=$record[name_ans];
	$email_ans=$record[email_ans];
	$date_ans=$record[date_ans];
	$ref_id=$record[ref_id];

	$detail_ans=nl2br(htmlspecialchars($detail_ans));
	$name_ans=htmlspecialchars($name_ans);
	$email_ans=htmlspecialchars($email_ans);
	$date_ans=displaydate($date_ans);

	echo "
	<table width='65%' border='1'>
    <tr> 
      <td bgcolor='#FFFFFF'><font size='2' face='MS Sans Serif'>$detail_ans</font></td>
    </tr>
    <tr> 
      <td bgcolor='#D2E9FF'><font size='2' face='MS Sans Serif'>
		<b>โดย : </b> $name_ans <b>อีเมล์ : </b> $email_ans<b> เมื่อ : </b>$date_ans 
		<a href='answer_del.php?&id_ques=$id_ques&id_ans=$id_ans'> [ Delete ] </a></font></td>
    </tr>
	</table><BR>";

} //end while

mysql_close($c);

///////////////// ส่วนที่ 3 /////////////////
?>
<h3> ร่วมตอบคำถาม </h3>
<FORM METHOD=POST ACTION="answer_save.php">
<TABLE BGCOLOR="#D2E9FF" BORDER="0">
<TR>
	<TD>รายละเอียด : </TD>
	<TD><TEXTAREA NAME="detail_ans" ROWS="5" COLS="35"></TEXTAREA> *</TD>
</TR>
<TR>
	<TD>ชื่อผู้ตอบ: </TD>
	<TD><INPUT TYPE="text" NAME="name_ans"> * </TD>
</TR>
<TR>
	<TD>อีเมล์ :</TD>
	<TD><INPUT TYPE="text" NAME="email_ans"> *</TD>
</TR>
</TABLE><BR>
<INPUT TYPE="hidden" NAME="ref_id" VALUE="<? echo $id_ques;?>">
<INPUT TYPE="submit" VALUE="Submit">
<INPUT TYPE="reset" VALUE="Reset">
</FORM>