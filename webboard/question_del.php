<?
$id_ques=$_GET[id_ques];
?>
<HTML>
<HEAD><TITLE>ลบคำถามสำหรับผู้ดูแลระบบ</TITLE></HEAD>
<BODY>
<h3>ลบคำถามสำหรับผู้ดูแลระบบ</h3>
<FORM METHOD=POST ACTION="question_del2.php">
<INPUT TYPE="password" NAME="password">
<INPUT TYPE="hidden" NAME="id_ques" VALUE="<? echo $id_ques;?>">
<INPUT TYPE="submit" VALUE="Submit">
</FORM>
</BODY>
</HTML>
