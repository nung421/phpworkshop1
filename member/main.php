<?php
include "chksession.php";
?>
<html>
<head><title>Member ระบบสมาชิก</title></head>
<body>
<h1>:: Logined In System ::</h1>
<p>ยินดีต้อนรับคุณ <b><?php=$sess_username?></b> ท่านกำลังอยู่ในระบบสมาชิก</p>
<p> [ <a href="edit.php">แก้ไขข้อมูลส่วนตัว</a> ] 
[ <a href="changepw.php">เปลี่ยนรหัสผ่าน</a> ]
[ <a href="logout.php">ออกจากระบบ</a> ]</p>
</body>
</html>