<?php
$to_send="nung421@hotmail.com";
$subject_send="ทดสอบส่งเมลแบบ HTML";
$from_send="ann421@hotmail.com";
$messages_send="
<html>
<head><title>ส่งอีเมลแบบ HTML</title></head>
<body>
<h3>นำกลอนมาฝาก</h3>
แค่ฟ้าที่กั้นไว้<br>
ไม่อาจขวางใจที่ใกล้กว่า<br>
แม้ไม่ได้คิดถึงทุกครั้งที่หลับตา<br>
แต่ก็คิดถึงตลอดเวลาที่หายใจ<br>
<br>
จงค้นหาหัวใจที่รักแท้<br>
มิยอมแพ้จะรักเธอมิหวั่นไหว<br>
จงค้นหารักนี้ด้วยใจ<br>
เหนืออื่นใดก็มิเท่ารักแท้จริง <br>
</body>
</html>";

$header = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
$header.="From: ".$from_send;

if (mail($to_send,$subject_send,$messages_send,$header)) {
	echo "<h2>ส่งเมลแบบ HTML ได้เรียบร้อยแล้วครับ</h2>";
} else {
	echo "<h2> ไม่สามารถส่งเมลแบบ HTML ได้ </h2>";
}
?>