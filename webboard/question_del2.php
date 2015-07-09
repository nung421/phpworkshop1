<?
$password=$_POST[password];
$id_ques=$_POST[id_ques];
if ($password<>"admin1234") {
    echo "<h3>ERROR : รหัสผ่านของผู้ดูแลระบบไม่ถูกต้องครับ</h3>";
	exit();
}

include "connect.php";

$sql="delete from tb_question where id_ques='$id_ques' ";
mysql_db_query($dbname,$sql);

$sql="delete from tb_answer where ref_id='$id_ques' ";
mysql_db_query($dbname,$sql);

echo "<h3>ลบคำถามเรียบร้อยแล้วครับ</h3>";
echo "<A HREF='question_view.php'>คลิกกลับสู่หน้าหลัก</A>";

mysql_close($c);
?>