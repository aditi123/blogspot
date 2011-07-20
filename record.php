<?php
session_start();
$count=0;
$count_agate=0;
$capacity_agate=250;
$count_coral=0;
$capacity_coral=200;
$count_diamond=0;
$capacity_diamond=250;
$capacity=700;

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
$sql_disp=("SELECT * FROM allot_hostel;");
$result=mysql_query($sql_disp);
$sql_disp1=("SELECT * FROM allot_hostel where hostel='AGATE'");
$result1=mysql_query($sql_disp1);
$count_agate=mysql_num_rows($result1);
$sql_disp2=("SELECT * FROM allot_hostel where hostel='CORAL'");
$result2=mysql_query($sql_disp2);
$count_coral=mysql_num_rows($result2);
$sql_disp3=("SELECT * FROM allot_hostel where hostel='DIAMOND'");
$result3=mysql_query($sql_disp3);
$count_diamond=mysql_num_rows($result3);
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
$capacity-=$count;
$count_agate=mysql_num_rows($result1);
$capacity_agate-=$count_agate;
echo "<h1>Available seats in AGATE:$capacity_agate</h1>";

$count_coral=mysql_num_rows($result2);
$capacity_coral-=$count_coral;
echo "<h1>Available seats in CORAL:$capacity_coral</h1>";

$count_diamond=mysql_num_rows($result3);
$capacity_diamond-=$count_diamond;
echo "<h1>Available seats in DIAMOND:$capacity_diamond</h1>";


echo "<blockquote><h1>AVAILABLE SEATS:$capacity</h1></blockquote>";
echo "</table>";
echo "<input type=submit name=sumit value='show the selected'>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
