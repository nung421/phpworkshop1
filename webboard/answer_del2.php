<?
$password=$_POST[password];
$id_ques=$_POST[id_ques];
$id_ans=$_POST[id_ans];
if ($password<>"admin1234") {
    echo "<h3>ERROR : ���ʼ�ҹ�ͧ�������к����١��ͧ��Ѻ</h3>";
	exit();
}

include "connect.php";
$sql="delete from tb_answer where id_ans='$id_ans' ";
mysql_db_query($dbname,$sql);

echo "<h3>ź�ӵͺ���º�������Ǥ�Ѻ</h3>";
echo "<A HREF='question_view.php'>��ԡ��Ѻ���˹����ѡ</A><p>";
echo "<A HREF='answer_view.php?id_ques=$id_ques'>��ԡ��Ѻ���˹�ҤӶ��</A>";

mysql_close($c);
?>