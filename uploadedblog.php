<html>
<head>
<title>blog</title>
<style>
h4{font-size=15pt;color="white";}
h1{font-size=25pt;color="white";}
h3{font-size=20pt;color="white";}
</style>
</head>
<body background="back2.jpg">
<table width=100%>
<tr>
<td width=80%>
<?php
    session_start();
    $servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
echo "<a href='logout.php'>LOG OUT</a>";

if($connect_mysql)
echo "connection established<br>";
else
die("unable to connect<br>");
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
echo "<br><br>connected to the database<br><br>";
else
die("<br>unable to connect to the database");
$logcookie=$_COOKIE['logname'];
$blog=$_GET['n1text'];
$topic=$_GET['topic'];
$sql_insert="insert into blog(topic,blogs,userid,date) VALUES('$topic','$blog','$logcookie',now())";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<font color='white'><h1><center>YOUR ENTERED BLOG IS</center></h1></font><br>";
echo "<h3>$topic</h3>";
echo "<h3>$blog</h3>";
echo "<br><br>";
echo "<a href='blogtable.php'><h4>Click here to submit</a>";
echo "<a href='blogspot.php'><h4>CLICK here to go back to the HOME page</h4></a>";
?>
</td>
<td>

</td>
</tr>
</table>
</body>
</html>