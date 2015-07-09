<?
$email=$_POST[email];
$subscribe=$_POST[subscribe];

if(!ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)$",$email) )  {
	echo "<H3>ERROR : รูปแบบของอีเมลไม่ถูกต้องครับ</H3>";
} else {

	include "connect.php";
	
	if ($subscribe=="YES") {

		$sql="select * from tb_list where email='$email' ";
		$result=mysql_db_query($dbname,$sql);
		$num=mysql_num_rows($result);

		if ($num==0){
			$sql="insert into tb_list value('$email')";
			mysql_db_query($dbname,$sql);
			echo "<H3>อีเมลของท่าน $email <BR>ได้ลงทะเบียนรับข่าวสารเรียบร้อยแล้ว</H3>";
		}else {
			echo "<H3>ERROR : ไม่สามารถลงทะเบียนรับข่าวสารได้ <BR> เนื่องจากอีเมล์ของท่าน $email มีอยู่ในระบบแล้ว</H3>";
		}

	} else {

		$sql="delete from tb_list where email='$email' ";
		$result=mysql_db_query($dbname,$sql);
		echo "<H3>อีเมลของท่าน $email <BR>ถูกลบออกจากระบบรับข่าวสารเรียบร้อยแล้ว</H3>";
	}
	mysql_close();
}
echo "[ <A HREF=index.php>กลับหน้าแรก</A> ] ";

?>

