<?
$id_ans=$_GET[id_ans];
$id_ques=$_GET[id_ques];
?>
<HTML>
<HEAD><TITLE>ź�ӵͺ ����Ѻ�������к�</TITLE></HEAD>
<BODY>
<h3>ź�ӵͺ ����Ѻ�������к�</h3>
<FORM METHOD=POST ACTION="answer_del2.php">
<INPUT TYPE="password" NAME="password">
<INPUT TYPE="hidden" NAME="id_ques" VALUE="<? echo $id_ques;?>">
<INPUT TYPE="hidden" NAME="id_ans" VALUE="<? echo $id_ans;?>">
<INPUT TYPE="submit" VALUE="Submit">
</FORM>
</BODY>
</HTML>
