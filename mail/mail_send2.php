<?php
$to_send="nung421@hotmail.com";
$subject_send="���ͺ�����Ẻ HTML";
$from_send="ann421@hotmail.com";
$messages_send="
<html>
<head><title>�������Ẻ HTML</title></head>
<body>
<h3>�ӡ�͹�ҽҡ</h3>
���ҷ�������<br>
����Ҩ��ҧ㨷��������<br>
��������Դ�֧�ء���駷����Ѻ��<br>
���Դ�֧��ʹ���ҷ������<br>
<br>
���������㨷���ѡ��<br>
���������ѡ�����������<br>
�������ѡ�������<br>
�˹�����㴡�������ѡ���ԧ <br>
</body>
</html>";

$header = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
$header.="From: ".$from_send;

if (mail($to_send,$subject_send,$messages_send,$header)) {
	echo "<h2>�����Ẻ HTML �����º�������Ǥ�Ѻ</h2>";
} else {
	echo "<h2> �������ö�����Ẻ HTML �� </h2>";
}
?>