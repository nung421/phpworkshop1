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
		<tr valign='bottom' align='center'>
			<td><img src='bar2.gif' width='15' height='$width_bar0'> <br/>$data_poll[0] %</td>
			<td><img src='bar2.gif' width='15' height='$width_bar1'> <br/>$data_poll[1] %</td>
			<td><img src='bar2.gif' width='15' height='$width_bar2'> <br/>$data_poll[2] %</td>
			<td><img src='bar2.gif' width='15' height='$width_bar3'> <br/>$data_poll[3] %</td>
		</tr>
		<tr align='center'>
			<td>เชียงใหม่</td>
			<td>กาญจนบุรี</td>
			<td>ภูเก็ต</td>
			<td>กระบี่</td>
		</tr>
	</table></br>	";
	echo "จำนวนผู้โหวตทั้งหมด $total คน";
	?>
	</body>
</html>