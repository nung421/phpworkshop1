<?
$name=$_POST[name];
$url=$_POST[url];
$category=$_POST[category];
$title=$_POST[title];
$detail=$_POST[detail];

if ($name=="" or $url=="" or $title=="" or $detail=="") {
	echo "<H3>ERROR : ��سҡ�͡��������´�ͧ����������䫵�������º����</H3>";
	exit();
}

$url="http://".$url;
$count_url=0;

include "connect.php";
$sql="INSERT INTO tb_url VALUES('','$name','$url','$category','$title','$detail','$count_url')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>���� ���䫵� (URL) ���º��������</H3>";
	echo "[ <A HREF=index.php>��Ѻ���˹���á</A> ] ";
} else {
	echo "<H3>ERROR : �������ö���� ���䫵� (URL) ��</H3>";
}
mysql_close();
?>