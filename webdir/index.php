<HTML>
<HEAD><TITLE>Web Directory</TITLE></HEAD>
<BODY>
<H1>:: Web Directory ::</H1>
<P> 
[ <A HREF="index.php">˹���á</A> ] 
[ <A HREF="add_url.php">�������䫵� (URL)</A> ] 
[ <A HREF="search_url.php">�������䫵�</A> ] 
[ <A HREF="top10.php">Top 10 URL</A> ]
<BR>
<P><B> ��Ǵ���� >> </B></P>
<UL>
<?
include "connect.php";
include "category.php";
for ($i=0;$i<count($cate);$i++) {

	$sql="select id from tb_url where category='$i' ";
	$result=mysql_db_query($dbname,$sql);
	$num=mysql_num_rows($result);

	echo "<LI>";
	echo "<B><A HREF='list.php?cate_id=$i'>$cate[$i]</A></B> [$num]<BR>";
	echo "$cate_detail[$i] <BR><BR>";
	echo "</LI>";
}
?>
</UL>
</BODY>
</HTML>