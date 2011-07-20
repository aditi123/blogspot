<?php
session_start();
    $servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
	$logcookie=$_COOKIE['logname'];
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
$sql_disp=("SELECT * FROM blog order by date asc;");
$result=mysql_query($sql_disp);
echo "<form method=get action='seeblog.php'>";
echo "<table bgcolor='mergenta' width=15% border=0>";
echo "<th>BLOGS</th>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td width=100%><u><input type=text name='userid' value='$row[topic]' readonly</u><br>$row[date]</td>";
echo "<td><input type=radio name='view' value='$row[topic]'>VIEW</td>";
echo "</tr>";
}
echo "<tr><td>";
echo "<input type=submit name=submit value='see your selected blog'></td></tr>";
echo "</table>";
echo "</form>";
echo "<a href='enterblog.php'>go back</a>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
