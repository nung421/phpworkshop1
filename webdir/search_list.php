<?
$keyword=$_POST[keyword];
$cate_id=$_POST[cate_id];
if ($keyword=="") {
	echo "<H3>ERROR : กรุณากรอกคำค้นด้วยครับ</H3>";
	exit();
}
?>
<HTML>
<HEAD><TITLE>Web Directory</TITLE></HEAD>
<BODY>
<H1>:: Web Directory ::</H1>
<P> 
<B>ผลการค้นหาข้อมูล จากคำค้น "<?=$keyword?>" </B>
<UL>
<?
include "connect.php";
if ($cate_id=="*") {
	$sql="select * from tb_url where title like '%$keyword%' or detail like '%$keyword%' ";
} else {
	$sql="select * from tb_url where category ='$cate_id' and (title like '%$keyword%' or detail like '%$keyword%')";
}
$result=mysql_db_query($dbname,$sql);
while($rs=mysql_fetch_array($result)) {
	$id=$rs[id];
	$post_by=$rs[post_by];
	$url=$rs[url];
	$category=$rs[category];
	$title=$rs[title];
	$detail=$rs[detail];
	$count_click=$rs[count_click];

	echo "<LI>";
	echo "<B><A HREF='link.php?id=$id&goto=$url' TARGET='_blank'>$title</A></B> ";
	echo "Hits [$count_click]<BR>";
	echo "<FONT SIZE=2><B>จาก :</B>  $post_by <B>URL : </B> $url </FONT><BR>";	
	echo "$detail <BR><BR>";
	echo "</LI>";
}
?>
</UL>
</BODY>
</HTML>