<?
$subject=$_POST[subject];
$messages=$_POST[messages];

if ($subject=="" or $messages=="") {
	echo "<H3>ERROR : กรุณากรอกข้อมูลให้ครบครับ</H3>";
} else {

	$from="webmaster@yourdomain.com";
	$header="From: ".$from;

	include "connect.php";
	$sql="select * from tb_list";
	$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result)) {
		$to=$rs[email];

		mail($to,$subject,$messages,$header);
		//echo "$to<BR>";
	}
	echo "<H3>ส่งข่าวสารถึงสมาชิกเรียบร้อยแล้ว</H3>";
}
echo "[ <A HREF=admin_send.php>กลับไปฟอร์มส่งข่าวสาร</A> ] ";
?>