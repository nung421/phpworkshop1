<?
$detail_ans=$_POST[detail_ans];
$name_ans=$_POST[name_ans];
$email_ans=$_POST[email_ans];
$ref_id=$_POST[ref_id];
$date_ans=date("Y-m-d");

include "function.php";
if ($detail_ans=="" or $name_ans=="" or $email_ans=="") {
	echo "<h3>ERROR : กรุณากรอกข้อมูลให้ครบนะครับ<h3>";
	exit();
}
if (!checkemail($email_ans)) {
	echo "<h3>ERROR : รูปแบบอีเมล์ที่กรอกไม่ถูกต้องนะครับ </h3>";	 	
	exit();
}

include "connect.php";
$sql="insert into tb_answer values('','$detail_ans','$name_ans','$email_ans','$date_ans','$ref_id')";
$result=mysql_db_query($dbname,$sql);

if ($result) {
	echo "<h3>บันทึกคำตอบเรียบร้อยแล้วครับ</h3>";
	echo "<A HREF='question_view.php'>คลิกกลับสู่หน้าหลัก</A><BR><BR>";
	echo "<A HREF='answer_view.php?id_ques=$ref_id'>คลิกกลับไปดูคำตอบ</A>";
} else {
	echo "<h3>ไม่สามารถตั้งคำถามในกระทู้ ถาม - ตอบ ได้</h3>";
}
?>