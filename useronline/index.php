<?
$host="localhost";
$user="root";
$pw="";
$dbname="db_useronline";
$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<h3>�������ö�Դ��Ͱҹ��������</h3>";
	exit();
}

$time_now=time();
$time_out=$time_now + 350;

session_start();
$sess_id=session_id();

$sql="delete from tb_useronline where online_id='$sess_id' or online_time<'$time_now' ";
mysql_db_query($dbname,$sql);

$sql="insert into tb_useronline values('$sess_id','$time_out')";
mysql_db_query($dbname,$sql);

$sql="select * from tb_useronline ";
$result=mysql_db_query($dbname,$sql);
$useronline=mysql_num_rows($result);
mysql_close();

echo "<h3>��й���դ� Online �ӹǹ $useronline ��</h3>"; 
?>