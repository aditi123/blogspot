<?php
session_start();
$user=$_GET['view'];
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
if($connect_mysql)
echo "connection established<br>";
else
die("unable to connect<br>");
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
echo "<br><br>connected to the database<br><br>";
else
die("<br>unable to connect to the database");


$sql_disp=("SELECT * FROM blog where topic='$user';");
$result=mysql_query($sql_disp);
echo "<table width=50% border=2>";
echo "<th>BLOG</th>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td width=100%><u>$row[topic]</u><br>$row[blogs]<br>$row[userid]<br>$row[date]</td>";
echo "</tr>";
}

echo "</table>";
echo "<a href='enterblog.php'>go back</a>";
?>
