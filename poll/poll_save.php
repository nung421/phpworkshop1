<!DOCTYPE html>
<html>
  <head>
    <title>จังหวัดไหนน่าเที่ยวมากที่สุด</title>
    <meta charset="UTF-8">
  </head>
  <body>
	<?php
	$savepoll = $_POST['savepoll'];
	if ($savepoll=="") {  
		echo "<h3> ERROR : กรุณาเลือกจังหวัดที่น่าเที่ยวมากที่สุด</h3>";
		exit();
	}
	$filename="poll.txt";
	$fp=fopen($filename,"r");
	$get_poll=fread($fp,filesize($filename));
	fclose($fp);

	$data_poll=explode("-",$get_poll);
	$data_poll[$savepoll]=$data_poll[$savepoll]+1;
	$total=array_sum($data_poll);

	$set_poll=implode("-",$data_poll);

	$fp=fopen($filename,"w");
	fwrite($fp, $set_poll);
	fclose($fp);

	echo "<h3> จังหวัดไหนน่าเที่ยวมากที่สุด</h3>";
	echo "เชียงใหม่ $data_poll[0] คน</br>";
	echo "กาญจนบุรี $data_poll[1] คน</br>";
	echo "ภูเก็ต $data_poll[2] คน</br>";
	echo "กระบี่ $data_poll[3] คน</br></br>";
	echo "จำนวนผู้เลือกทั้งหมด $total คน";
	?>
   </body>
</html>