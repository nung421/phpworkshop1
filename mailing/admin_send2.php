<?
$subject=$_POST[subject];
$messages=$_POST[messages];

if ($subject=="" or $messages=="") {
	echo "<H3>ERROR : ��سҡ�͡���������ú��Ѻ</H3>";
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
	echo "<H3>�觢�����ö֧��Ҫԡ���º��������</H3>";
}
echo "[ <A HREF=admin_send.php>��Ѻ仿�����觢������</A> ] ";
?>