<?php
session_start();
$count=0;
$capacity_OPAL_C=250;
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
$sql_disp=("SELECT * FROM allot_girlshostel;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
echo "<form method='get' action='showrecords.php'>";
echo "<table border=2>";
echo "<th>ROLL NUMBER</th><th>E-MAIL</th><th>PASSWORD</th><th>STATE</th><th>CITY</th><th>HOSTEL</th><th>BATCH</th><th>NAME</th><th>REGISTERING DATE</th><th>GENDER</th><th>SELECT</th>";
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>$row[roll_number]</td>";
echo "<td>$row[email]</td>";
echo "<td>$row[password]</td>";
echo "<td>$row[state]</td>";
echo "<td>$row[city]</td>";
echo "<td>$row[hostel]</td>";
echo "<td><input type='text' name='batch' value='$row[batch]' readonly></td>";
echo "<td>$row[name]</td>";
echo "<td>$row[registering_date]</td>";
echo "<td>$row[gender]</td>";
echo "<td><input type='radio' name='record' value=$row[roll_number]></td>";
echo "</tr>";
}
$count=mysql_num_rows($result);
$capacity_OPAL_C-=$count;
echo "<blockquote><h1>AVAILABLE SEATS:$capacity_OPAL_C</h1></blockquote>";
echo "</table>";
echo "<input type=submit name=submit value='show the selected'>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
