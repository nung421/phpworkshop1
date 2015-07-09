<?php
$order=$_GET['order'];
if ($order=="") { $order=1; }
$start=$order-1;

include "connect.php";
$sql="select * from tb_photo order by id_photo desc limit $start,1 ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
$id_photo=$r[id_photo];
$name_photo=$r[name_photo];
$detail_photo=$r[detail_photo];

$sql="select * from tb_photo";
$result=mysql_db_query($dbname,$sql);
$total=mysql_num_rows($result);

echo "<h2>DISPLAY PHOTO </h2>";
echo "<img src='images/$name_photo' border=1><p>";
echo "<b>รายละเอียด :</b><br>";
echo "$detail_photo<p>";
if ($order>1) {	
	$prev=$order-1; 
	echo "<a href='view.php?order=$prev'><img src='arrow1.jpg' border=0></a>&nbsp;";
}
echo "( $order of $total )";
if ($order<>$total) {
	$next=$order+1;
	echo "&nbsp;<a href='view.php?order=$next'><img src='arrow2.jpg' border=0></a>";
}
mysql_close();
?>
