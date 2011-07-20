<?php
session_start();
$logcookie=$_COOKIE['logname'];
$name=$_GET['name'];
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
$disp=("select * from registered_details where email='$name'");
$disp1=mysql_query($disp);
echo "<table width=70% height=100% >";
echo "<tr>";
echo "<td >";
echo "<form method=get action='up.php'>";


while($row=mysql_fetch_array($disp1))
{
echo "<table>";
echo "<tr><td><img src='$row[background]'>";
echo "<center>";
echo "<font style='position:absolute;left:160;top:380'><table width=600 height=600 border=0>";
echo "<th><h1>PROFILE</h1><th>";
echo "<tr>";
echo "<td><h1>NAME:<input type='text' name='name' value='$row[name]' readonly></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>TEMPORARY ADDRESS:<input type='text' name='tadd' value='$row[t_address]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>PERMANENT ADDRESS:<input type='text' name='padd' value='$row[p_address]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>INSTITUTE:<input type='text' name='insti' value='$row[institute]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>DEPARTMENT:<input type='text' name='dept' value='$row[department]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>EMAIL-ID:<input type='text' name='email' value='$row[email]' readonly></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>CONTACT NUMBER:<input type='text' name='contact' value='$row[contact_num]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>SOURCE:<input type='text' name='source' value='$row[source]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>LIKES AND INTRESTS:<input type='text' name='li' value='$row[likes_intrests]'></h1></td>";
echo "</tr>";
echo "</table></font>";
echo "</center>";
echo "</td></tr></table>";
}
echo "<font style='position:absolute;left:160;top:980'><input type=submit name=submit value='update'></font>";
echo "</form>";
if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
echo "</td></font>";
echo "<td><img src='catsgif.gif'>";


echo "</td>";
echo "</tr>";
echo "</table>";
?>