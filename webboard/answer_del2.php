<?
$password=$_POST[password];
$id_ques=$_POST[id_ques];
$id_ans=$_POST[id_ans];
if ($password<>"admin1234") {
    echo "<h3>ERROR : รหัสผ่านของผู้ดูแลระบบไม่ถูกต้องครับ</h3>";
	exit();
}

include "connect.php";
$sql="delete from tb_answer where id_ans='$id_ans' ";
mysql_db_query($dbname,$sql);

echo "<h3>ลบคำตอบเรียบร้อยแล้วครับ</h3>";
echo "<A HREF='question_view.php'>คลิกกลับสู่หน้าหลัก</A><p>";
echo "<A HREF='answer_view.php?id_ques=$id_ques'>คลิกกลับสู่หน้าคำถาม</A>";

mysql_close($c);
?>