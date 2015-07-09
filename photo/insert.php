<?php
$photo=$_FILES['photo']['tmp_name'];
$photo_name=$_FILES['photo']['name'];
$photo_size=$_FILES['photo']['size'];
$photo_type=$_FILES['photo']['type'];

$detail=$_POST['detail'];

if (!$photo) {	
	echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพได้ครับ</h3>"; 
} else { 
	include "connect.php";
	$array_last=explode(".",$photo_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {
		copy($photo,"images/".$photo_name);
		$sql="insert into tb_photo values('','$photo_name','$detail')";
		mysql_db_query($dbname,$sql);
		echo "<a href='admin.php'><h3>Upload รูปภาพ เรียบร้อยแล้วครับ</h3></a>"; 

	} else{
		echo "<h3>ERROR : เฉพาะรูปภาพนามสกุล *.gif , *.jpg , *.jpeg เท่านั้น</h3>"; 
	}
	unlink($photo);
	mysql_close();
} 
?>