<?php
session_start();
$count=0;
$capacity=750;
$count_emerald=0;
$capacity_emerald=250;
$count_sapphire=0;
$capacity_sapphire=250;
$count_beryl=0;
$capacity_beryl=250;
$ag=0;
$co=0;
$di=0;
$caag=200;
$caco=250;
$cadi=250;
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
$sql_disp=("SELECT * FROM allot_hostel3;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
$sql_disp_emerald=("SELECT * FROM allot_hostel3 where hostel='EMERALD'");
$result_emerald=mysql_query($sql_disp_emerald);
$count_emerald=mysql_num_rows($result_emerald);
$sql_disp_sapphire=("SELECT * FROM allot_hostel3 where hostel='SAPPHIRE'");
$result_sapphire=mysql_query($sql_disp_sapphire);
$count_sapphire=mysql_num_rows($result_sapphire);
$sql_disp_beryl=("SELECT * FROM allot_hostel3 where hostel='BERYL'");
$result_beryl=mysql_query($sql_disp_beryl);
$count_beryl=mysql_num_rows($result_beryl);
echo "<form method='get' action='showrecords.php'>";
echo "<table border=2>";
echo "<th>ROLL NUMBER</th><th>E-MAIL</th><th>PASSWORD</th><th>STATE</th><th>CITY</th><th>HOSTEL</th><th>BATCH</th><th>NAME</th><th>REGISTERING DATE</th></th>GENDER</th>";
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
$capacity-=$count;
echo "<blockquote><h1>AVAILABLE SEATS:$capacity</h1></blockquote>";
$count_emerald=mysql_num_rows($result_emerald);
$capacity_emerald-=$count_emerald;
echo "<blockquote><h1>AVAILABLE SEATS IN EMERALD:$capacity_emerald</h1></blockquote>";
$count_sapphire=mysql_num_rows($result_sapphire);
$capacity_sapphire-=$count_sapphire;
echo "<blockquote><h1>AVAILABLE SEATS IN SAPPHIRE:$capacity_sapphire</h1></blockquote>";
$count_beryl=mysql_num_rows($result_beryl);
$capacity_beryl-=$count_beryl;
echo "<blockquote><h1>AVAILABLE SEATS IN BERYL:$capacity_beryl</h1></blockquote>";
echo "</table>";
echo "<input type=submit name=sumit value='show the selected'>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
