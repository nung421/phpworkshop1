<?
$id_ques=$_GET[id_ques];
?>
<HTML>
<HEAD><TITLE>ź�Ӷ������Ѻ�������к�</TITLE></HEAD>
<BODY>
<h3>ź�Ӷ������Ѻ�������к�</h3>
<FORM METHOD=POST ACTION="question_del2.php">
<INPUT TYPE="password" NAME="password">
<INPUT TYPE="hidden" NAME="id_ques" VALUE="<? echo $id_ques;?>">
<INPUT TYPE="submit" VALUE="Submit">
</FORM>
</BODY>
</HTML>
