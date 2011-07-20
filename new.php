<body>
<table>
<tr>
<td><img src='background2im.jpg'><font style='position:absolute; left:550;top=200'>
<table>
<tr>
<td>
<center>
<?php
session_start();
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
	echo "<a href='logout.php'>LOG OUT</a>";
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
echo "<form method='get' action='displaynew.php'>";
echo "<h1>ENTER HERE</h1><br>";
echo "<center><textarea rows=15 cols=50 wrap='physical' name='new'>";
echo "</textarea></center><br>";
echo "<input type=submit name=submit value='upload'>";

?>
</center></font>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>