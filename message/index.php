<html>
<head><title>ฝากข้อความบนเว็บ </title>
<SCRIPT language=JavaScript>
<!--
function check_data(){
	if(document.frm.name.value==""){ 
		alert("กรุณากรอกชื่อด้วยครับ"); 
		document.frm.name.focus(); 
		return false;
	} else if (document.frm.message.value=="") {
		alert("กรุณากรอกข้อความด้วยครับ");
		document.frm.message.focus(); 
		return false;
	}
}

function add_text(x) {
	document.frm.message.value = document.frm.elements.message.value+" "+ x;
	document.frm.message.focus();
}

//-->
</SCRIPT>
</head>
<body>
<H2>ฝากข้อความบนเว็บ</H2>
<FONT FACE="TAHOMA" SIZE="2">

<table BORDER="2" BORDERCOLOR="#0080C0"  WIDTH="210">
<tr>
	<td>
	<FONT FACE="TAHOMA" SIZE="2">
	<MARQUEE WIDTH="210" HEIGHT="250" DIRECTION="UP" 
		ONMOUSEOVER=stop(); ONMOUSEOUT=start(); 
		SCROLLAMOUNT="1" SCROLLDELAY="0">
<?php
include "connect.php";
include "function.php";
	$sql="select * from tb_message order by id desc";
$result=mysql_db_query($dbname,$sql);
while ($record=mysql_fetch_array($result) ) {
	$id=$record[id];
	$name=$record[name];
	$message=nl2br($record[message]);
	$save_date=$record[save_date];
	$save_date=displaydate_time($save_date);


	$pic="<IMG SRC='images/smile.gif'>";
	$message=str_replace(":)",$pic, $message);

	$pic="<IMG SRC='images/open_mouthed_smile.gif'>";
	$message=str_replace(":D",$pic, $message);

	$pic="<IMG SRC='images/winking_smile.gif'>";
	$message=str_replace(";)",$pic, $message);

	$pic="<IMG SRC='images/sursprised_smile.gif'>";
	$message=str_replace(":-O",$pic, $message);

	$pic="<IMG SRC='images/smile_with_tongue_out.gif'>";
	$message=str_replace(":P",$pic, $message);

	$pic="<IMG SRC='images/hot_smile.gif'>";
	$message=str_replace("(H)",$pic, $message);

	$pic="<IMG SRC='images/angry_smile.gif'>";
	$message=str_replace(":@",$pic, $message);

	$pic="<IMG SRC='images/confused_smile.gif'>";
	$message=str_replace(":S",$pic, $message);

	$pic="<IMG SRC='images/embarrassed_smile.gif'>";
	$message=str_replace(":$",$pic, $message);

	$pic="<IMG SRC='images/sad_smile.gif'>";
	$message=str_replace(":(",$pic, $message);


	echo "<BR>$message<BR>";
	echo "<b>จาก : </b>$name<BR>";
	echo "<b>วัน : </b>$save_date<br>";
	echo "----------------------------------------<BR>";
				  
} // while
?>
</MARQUEE>	
</FONT>	
	</td>
</tr>
</table>


<form method="POST" name="frm" action="save.php" ONSUBMIT="return check_data()">
ชื่อ : <input type="text" name="name" SIZE="20"><BR>
ฝากข้อความ : <BR>
<textarea name="message" rows="3"cols="33"></textarea><BR>
<A HREF="javascript:add_text(':)')"><IMG SRC="images/smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':D')"><IMG SRC="images/open_mouthed_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(';)')"><IMG SRC="images/winking_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':-O')"><IMG SRC="images/sursprised_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':P')"><IMG SRC="images/smile_with_tongue_out.gif" BORDER="0"></A>
<A HREF="javascript:add_text('(H)')"><IMG SRC="images/hot_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':@')"><IMG SRC="images/angry_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':S')"><IMG SRC="images/confused_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':$')"><IMG SRC="images/embarrassed_smile.gif" BORDER="0"></A>
<A HREF="javascript:add_text(':(')"><IMG SRC="images/sad_smile.gif" BORDER="0"></A>

<BR>
<input type="submit" value="Submit">
<input type="reset" value="Reset">

</form>
</FONT>
</body>
</html>