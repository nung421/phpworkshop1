<HTML>
<HEAD><TITLE>Web Directory</TITLE></HEAD>
<BODY>
<H1>:: Web Directory ::</H1>
<FORM ACTION="add_url2.php" METHOD="POST">
  <H3>à¾ÔèÁàÇçºä«µì (URL)</H3>
  <TABLE WIDTH="400" BORDER="0" CELLPADDING="1" CELLSPACING="1" BGCOLOR="#E5E5E5">
    <TR>
      <TD WIDTH="92">ª×èÍ¼ÙéÊè§</TD>
      <TD WIDTH="301"><INPUT NAME="name" TYPE="text" SIZE="30" ></TD>
    </TR>
    <TR>
      <TD>URL</TD>
      <TD>http://<INPUT NAME="url" TYPE="text" SIZE="35"></TD>
    </TR>
    <TR>
      <TD>ËÁÇ´ËÁÙè</TD>
      <TD>
	  <SELECT NAME="category">
		<?
		include "category.php";
		for ($i=0;$i<count($cate);$i++) {
			echo "<OPTION VALUE='$i'>$cate[$i]</OPTION>";
		}
	  ?>
      </SELECT>
	  </TD>
    </TR>
    <TR>
      <TD WIDTH="92">ËÑÇ¢éÍ</TD>
      <TD WIDTH="301"><INPUT NAME="title" TYPE="text" SIZE="30"></TD>
    </TR>
    <TR>
      <TD>ÃÒÂÅÐàÍÕÂ´</TD>
      <TD><TEXTAREA NAME="detail" COLS="40" ROWS="4"></TEXTAREA></TD>
    </TR>
    <TR>
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="submit"  VALUE="Submit">
        <INPUT TYPE="reset" VALUE="Reset"></TD>
    </TR>
  </TABLE>
</FORM>
[ <A HREF="index.php">¡ÅÑºÊÙèË¹éÒáÃ¡</A> ] 
</BODY>
</HTML>