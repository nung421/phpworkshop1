<?
$name=$_POST[name];
$url=$_POST[url];
$category=$_POST[category];
$title=$_POST[title];
$detail=$_POST[detail];

if ($name=="" or $url=="" or $title=="" or $detail=="") {
	echo "<H3>ERROR : กรุณากรอกรายละเอียดของการเพิ่มเว็บไซต์ให้เรียบร้อย</H3>";
	exit();
}

$url="http://".$url;
$count_url=0;

include "connect.php";
$sql="INSERT INTO tb_url VALUES('','$name','$url','$category','$title','$detail','$count_url')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>เพิ่ม เว็บไซต์ (URL) เรียบร้อยแล้ว</H3>";
	echo "[ <A HREF=index.php>กลับสู่หน้าแรก</A> ] ";
} else {
	echo "<H3>ERROR : ไม่สามารถเพิ่ม เว็บไซต์ (URL) ได้</H3>";
}
mysql_close();
?>