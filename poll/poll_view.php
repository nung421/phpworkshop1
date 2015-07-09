<!DOCTYPE html>
<html>
  <head>
    <title>จังหวัดไหนน่าเที่ยวมากที่สุด</title>
    <meta charset="UTF-8">
  </head>
  <body>
	<?php
	$filename="poll.txt";
	$fp=fopen($filename,"r");
	$get_poll=fread($fp,filesize($filename));
	fclose($fp);
	$data_poll=explode("-",$get_poll);

	$total=array_sum($data_poll);

	$data_poll[0]=round(($data_poll[0]/$total)*100,2);
	$data_poll[1]=round(($data_poll[1]/$total)*100,2);
	$data_poll[2]=round(($data_poll[2]/$total)*100,2);
	$data_poll[3]=round(($data_poll[3]/$total)*100,2);

	$width_bar0=$data_poll[0]*3;
	$width_bar1=$data_poll[1]*3;
	$width_bar2=$data_poll[2]*3;
	$width_bar3=$data_poll[3]*3;

	echo "<h4>จังหวัดไหนน่าเที่ยวมากที่สุด</h4>";
	echo "
	<table>
	<tr>
		<td>เชียงใหม่</td>
		<td><IMG SRC='bar.gif' WIDTH='$width_bar0' HEIGHT='15' > $data_poll[0] %</td>
	</tr>
	<tr>
		<td>กาญจนบุรี</td>
		<td><IMG SRC='bar.gif' WIDTH='$width_bar1' HEIGHT='15' > $data_poll[1] %</td>
	</tr>
	<tr>
		<td>ภูเก็ต</td>
		<td><IMG SRC='bar.gif' WIDTH='$width_bar2 ' HEIGHT='15' > $data_poll[2] %</td>
	</tr>
	<tr>
		<td>กระบี่</td>
		<td> <IMG SRC='bar.gif' WIDTH='$width_bar3' HEIGHT='15' > $data_poll[3] %</td>
	</tr>
	</table></br>	";
	echo "จำนวนผู้โหวตทั้งหมด $total คน";
	?>
	</body>
</html>