<?php
include "chksession.php";
include "function.php";

include "connect.php";
$sql="select * from tb_member where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
$record=mysql_fetch_array($result);

$username=$record[username];
$name=$record[name];
$sex=$record[sex];
$email=$record[email];
$telephone=$record[telephone];
$address=$record[address];
$reg_date=$record[reg_date];

mysql_close();
?>
<html>
<head><title>Member �к���Ҫԡ</title></head>
<body>
<h1>:: Edit Member ::</h1>
<form method="POST" action="edit2.php">
  <table cellspacing="2">
    <tr> 
      <td><b>Username : </b></td><td><?php=$username?></td>
    </tr>
    <tr> 
      <td><b>���� - ʡ�� : </b></td><td><?php=$name?></td>
    </tr>
    <tr> 
      <td><b>�� : </b></td><td><?php=$sex?></td>
    </tr>
    <tr> 
      <td><b>����� : </b></td>
      <td><input name="email_edit" type="text" value="<?php=$email?>" SIZE="26"> * </td>
    </tr>
    <tr> 
      <td><b>���Ѿ�� : </b></td>
      <td><input name="tel_edit" type="text" value="<?php=$telephone?>" SIZE="26"></td>
    </tr>
    <tr> 
      <td VALIGN="top"><b>�������Դ��� :</b></td>
      <td><textarea name="address_edit"cols="35" rows="3"><?php=$address?></textarea></td>
    </tr>
    <tr>
      <td><b>��Ѥ������ :</b></td>
      <td><?php=displaydate($reg_date)?></td>
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