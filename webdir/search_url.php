<HTML>
<HEAD><TITLE>Web Directory</TITLE></HEAD>
<BODY>
<H1>:: Web Directory ::</H1>
<P> 
<P><B> �������䫵�</B></P>
<FORM METHOD=POST ACTION="search_list.php">
<TABLE WIDTH="290" BGCOLOR="#E5E5E5">
<TR>
	<TD WIDTH="77">�Ӥ�</TD>
	<TD WIDTH="211"><INPUT NAME="keyword" TYPE="text" size="30"></TD>
</TR>
<TR>
	<TD>��Ǵ����</TD>
	<TD>
		<SELECT NAME="cate_id">
		<OPTION VALUE='*'>�ء��Ǵ����</OPTION>
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
  <TD>&nbsp;</TD>
  <TD><INPUT TYPE="submit" NAME="Submit" VALUE="Submit"></TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>
