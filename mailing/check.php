<?
$email=$_POST[email];
$subscribe=$_POST[subscribe];

if(!ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)$",$email) )  {
	echo "<H3>ERROR : �ٻẺ�ͧ��������١��ͧ��Ѻ</H3>";
} else {

	include "connect.php";
	
	if ($subscribe=="YES") {

		$sql="select * from tb_list where email='$email' ";
		$result=mysql_db_query($dbname,$sql);
		$num=mysql_num_rows($result);

		if ($num==0){
			$sql="insert into tb_list value('$email')";
			mysql_db_query($dbname,$sql);
			echo "<H3>����Ţͧ��ҹ $email <BR>��ŧ����¹�Ѻ����������º��������</H3>";
		}else {
			echo "<H3>ERROR : �������öŧ����¹�Ѻ��������� <BR> ���ͧ�ҡ������ͧ��ҹ $email ��������к�����</H3>";
		}

	} else {

		$sql="delete from tb_list where email='$email' ";
		$result=mysql_db_query($dbname,$sql);
		echo "<H3>����Ţͧ��ҹ $email <BR>�١ź�͡�ҡ�к��Ѻ����������º��������</H3>";
	}
	mysql_close();
}
echo "[ <A HREF=index.php>��Ѻ˹���á</A> ] ";

?>

