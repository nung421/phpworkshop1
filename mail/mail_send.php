<?php
$to_send=$_POST[to_send];
$subject_send=$_POST[subject_send];
$messages_send=$_POST[messages_send];
$from_send=$_POST[from_send];
$header="From: ".$from_send;

if (mail($to_send,$subject_send,$messages_send,$header)) {
	echo "<h2>ได้ส่งอีเมลเรียบร้อยแล้วครับ</h2>";
} else {
	echo "<h2> ไม่สามารถส่งอีเมลได้ </h2>";
}
?>
