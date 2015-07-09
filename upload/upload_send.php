<?
$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

if ($fileupload) {
	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {
		copy($fileupload,"photo/".$fileupload_name);
		echo "<h2> Upload รูปภาพเรียบร้อยแล้วครับ </h2>";
		echo "<img src='photo/$fileupload_name'>";
	} else{
		echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพ</h3>";
	}
	unlink($fileupload);
} else {
	echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพ</h3>";
}
?>