<?
$detail_ans=$_POST[detail_ans];
$name_ans=$_POST[name_ans];
$email_ans=$_POST[email_ans];
$ref_id=$_POST[ref_id];
$date_ans=date("Y-m-d");

include "function.php";
if ($detail_ans=="" or $name_ans=="" or $email_ans=="") {
	echo "<h3>ERROR : ��سҡ�͡���������ú�Ф�Ѻ<h3>";
	exit();
}
if (!checkemail($email_ans)) {
	echo "<h3>ERROR : �ٻẺ���������͡���١��ͧ�Ф�Ѻ </h3>";	 	
	exit();
}

include "connect.php";
$sql="insert into tb_answer values('','$detail_ans','$name_ans','$email_ans','$date_ans','$ref_id')";
$result=mysql_db_query($dbname,$sql);

if ($result) {
	echo "<h3>�ѹ�֡�ӵͺ���º�������Ǥ�Ѻ</h3>";
	echo "<A HREF='question_view.php'>��ԡ��Ѻ���˹����ѡ</A><BR><BR>";
	echo "<A HREF='answer_view.php?id_ques=$ref_id'>��ԡ��Ѻ仴٤ӵͺ</A>";
} else {
	echo "<h3>�������ö��駤Ӷ��㹡�з�� ��� - �ͺ ��</h3>";
}
?>