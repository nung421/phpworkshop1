<?php
include "chksession.php";
?>
<html>
<head><title>Member �к���Ҫԡ</title></head>
<body>
<h1>:: Change Password ::</h1>
<form method=POST action="changepw2.php">
  <table cellspacing="2">
    <tr> 
      <td><b>Username : </b></td> <td><?php=$sess_username?></td>
    </tr>
    <tr> 
      <td><b>���ʼ�ҹ��� : </b></td><td><input name="oldpass" type="password"> * </td>
    </tr>
    <tr> 
      <td><b> ���ʼ�ҹ����: </b></td><td><input name="newpass" type="password"> * </td>
    </tr>
    <tr> 
      <td><b>�׹�ѹ���ʼ�ҹ���� :</b></td><td><input name="newpass2" type="password"> * </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="Submit" value="Submit"> <input type="Reset" value="Reset"></td>
    </tr>
  </table>
</form>
[ <a href="main.php">��Ѻ˹����ѡ</a> ] 
</body>
</html>