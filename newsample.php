<html>
<body>
<table height="100%" width="100%" cellpadding=0 cellspacing=0>
<tr HEIGHT="10%" WIDTH="100%">
<td><center><img src="blogspot.jpg" width="800"></center>
</td>
</tr>
<tr>
<td>
<center><table width="800" height="10%" border=1>
<tr>
<td bgcolor="olive"><a href="aboutus.php">ABOUT US</a></td>
<td bgcolor="mergenta"><a href="newsample.php">HOME</a></td>
<td bgcolor="olive"><a href="benefits.php">BENEFITS</a></td>
<td bgcolor="mergenta"><a href="r.php">REGISTRATION</a></td>
<td bgcolor="olive"><a href="login.html">LOGIN</a></td>
</tr>
</table>
</center>
<td>
</tr>
<tr height="60%" width="100%">
<td><center><img src="anigif.gif" width="800"></center>

</td>
</tr>




<tr height="20%">
<td><center><img src="b3.jpg" width="800"></center>
<?php
	 $server=$_GET['server'];
	 $username=$_GET['username'];
	 $password=$_GET['password'];
	 setcookie("server",$server);
	 setcookie("username",$username);
	 setcookie("password",$password);
$blogtype1="COMEDY";
$blogtype2="FICTION";
$blogtype3="FACTUAL";
$blogtype4="REALSTORIES";
echo "<form action='blog.php' method='get'>";
echo "<font face='jokerman' color='brown'><b><u><h1><CENTER>SELECT THE CATEGORY OF BLOG</CENTER></h1></u></b></font><br><br>";
echo "<center>";
echo "<SELECT TYPE='LISTBOX' NAME='BLOGFIELD'>";
echo "<OPTION>$blogtype1</OPTION>";
echo "<OPTION>$blogtype2</OPTION>";
echo "<OPTION>$blogtype3</OPTION>";
echo "<OPTION>$blogtype4</OPTION>";

echo "</SELECT><BR><BR><BR>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN1 VALUE='$blogtype1'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN2 VALUE='$blogtype2'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN3 VALUE='$blogtype3'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN4 VALUE='$blogtype4'>";

echo "<INPUT TYPE=SUBMIT name=SUBMIT VALUE=ENTER>";
echo "</center>";
echo "</form>";
?>
</td>
</tr>
</table>
</body>
</html>