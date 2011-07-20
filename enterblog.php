<html>
<head><title>blogs</title>
<style>
h1{font-size=25pt;}
h4{font-size=20pt}
</style>
</head>
<body background="enter.jpg">
     
	 <table width='100%' height='100%'>
     <tr width='100%' height='20%'><a href='logout.php'>LOG OUT</a>
	 <td>
	 <?php
	 
	 echo "<form method=get action='wall.php'>";
	 $logcookie=$_COOKIE['logname'];
     echo "<font color=maroon><input type='text' name='cookie' value='welcome $logcookie' readonly><br>What's on your mind<br><textarea rows=2 cols=50 name='share' wrap='physical'></textarea><br><input type=submit name=submit value='share and visit your wall'></font>";
	 echo "</form>";
	 ?>
	 </td>
	 <td><marquee direction="right"><img src="skiing.gif"><a href='new.php'><br><h1>UPDATE NEWS DAILY!!</h1></a></marquee></td>
     <td><font style='position:absolute; left:1050;top=160' color='maroon'><a href='members.php'vlink='maroon'><h1>MEMBERS</h1></center></a><br><a href='blogtable.php'><center><h1>BLOGS</h1></a></font></td>
	 </tr>
	 <tr width='100%' height='50'>
	 <td width='30%>
	 <center><font color='maroon'><a href="quiz.php">CLICK here to Participate <br>in a QUICK QUIZ regarding this site<br>
	 and win EXCITING SURPRISES daily!!</a></font><br><img src="blinking_new.gif"><a href='a.php'>HOSTEL ALLOTMENT</a><br><br><a href='show.php'>SHOW RECORDS OF <br>REGISTERED HOSTELLERS!!</a></center>
	 </td>
	 <td width="40%">
	 <font style='position:absolute; left:450;top=460'>
	 <?php
	 
$blogtype1="COMEDY";
$blogtype2="FICTION";
$blogtype3="FACTUAL";
$blogtype4="REALSTORIES";

echo "<form action='blogspot.php' method='get'>";
echo "<font color=maroon><b><u><CENTER>SELECT THE CATEGORY OF BLOG</CENTER></u></b></font><br><br>";
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
	 
	</font></td> 
	 <td width='30%'><center><font><h3><img src="blinking_new.gif"><ul>
<LI><a href='newsdaily.php'>WHATS NEW??</a><LI><a href='notice.html'>PRAGYAN NOTICE BOARD</a></LI><LI><a href='playprofile.php'>PLAY WITH YOUR PROFILE</a></LI>
</ul></h3></font></center>
	 </td>
	 </tr>
	 <tr width=100% height="30%">
	<td colspan=3> <font style='position:absolute; left:100;top=760' color=maroon><form method='get' action='showprivileges.php'>
	 <b>CATEGORY:</b><br><br>
    <input type='radio' name='user' value='user'><b>USER</b><br>
    <input type='radio' name='user' value='administrator'><b>ADMINISTRATOR</b><br>
	<input type=submit name=submit value='show privileges'></td></tr>
	</form>
	 </td>
	
	 </tr>
	 
	 </table>

</body>
</html>	  
