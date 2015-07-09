<?
include "function.php";
$title_ques=$_POST[title_ques];
$detail_ques=$_POST[detail_ques];
$name_ques=$_POST[name_ques];
$email_ques=$_POST[email_ques];

if ($title_ques=="" or $detail_ques=="" or $name_ques=="" or $email_ques=="") {
	echo "<h3>ERROR : กรุณากรอกข้อมูลให้ครบนะครับ<h3>";		
	exit();
}
if (!checkemail($email_ques)) {
	echo "<h3>ERROR : รูปแบบอีเมล์ที่กรอกไม่ถูกต้องนะครับ </h3>";	 	
	exit();
}

$date_ques=date("Y-m-d");

include "connect.php";
$sql="insert into tb_question values('','$title_ques','$detail_ques','$name_ques','$email_ques','$date_ques')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ตั้งคำถามในกระทู้ ถาม - ตอบ เรียบร้อยแล้วครับ</h3>";
	echo "<A HREF='question_view.php'>คลิกกลับสู่หน้าหลัก</A>";
} else {
	echo "<h3>ERROR : ไม่สามารถตั้งคำถามในกระทู้ ถาม - ตอบ ได้</h3>";
}
?>