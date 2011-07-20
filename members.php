<?php
session_start();

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


$sql_disp=("SELECT * FROM members;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
echo "<form method='get' action='profile.php'>";
echo "<table border=2 width=20% height=100%>";
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo "<td bgcolor='mergenta'>$row[name]<br><input type=radio name='name' value='$row[email]'>$row[email]<br><input type=submit value='see profile'></td>";
echo "</tr>";

}
echo "<h1>TOTAL NUMBER OF MEMBERS:$count</h1>";
echo "</table>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
