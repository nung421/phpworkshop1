<HTML>
<HEAD><TITLE>Web Directory</TITLE></HEAD>
<BODY>
<H1>:: Web Directory ::</H1>
<P> 
<B>Top 10 URL</B>
<UL>
<?
include "connect.php";
$sql="select * from tb_url order by count_click desc LIMIT 0 , 10 ";
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