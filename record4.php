<?php
session_start();
$count=0;
$capacity=1000;
$count_ruby=0;
$capacity_ruby=250;
$count_pearl=0;
$capacity_pearl=250;
$count_lapis=0;
$capacity_lapis=250;
$count_topaz=0;
$capacity_topaz=250;
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
$sql_disp=("SELECT * FROM allot_hostel4;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
$sql_disp_ruby=("SELECT * FROM allot_hostel4 where hostel='RUBY'");
$result_ruby=mysql_query($sql_disp_ruby);
$count_ruby=mysql_num_rows($result_ruby);
$sql_disp_pearl=("SELECT * FROM allot_hostel4 where hostel='PEARL'");
$result_pearl=mysql_query($sql_disp_pearl);
$count_pearl=mysql_num_rows($result_pearl);
$sql_disp_lapis=("SELECT * FROM allot_hostel4 where hostel='LAPIS'");
$result_lapis=mysql_query($sql_disp_lapis);
$count_lapis=mysql_num_rows($result_lapis);
$sql_disp_topaz=("SELECT * FROM allot_hostel4 where hostel='TOPAZ'");
$result_topaz=mysql_query($sql_disp_topaz);
$count_topaz=mysql_num_rows($result_topaz);
echo "<form method='get' action='showrecords.php'>";
echo "<table border=2>";
echo "<th>ROLL NUMBER</th><th>E-MAIL</th><th>PASSWORD</th><th>STATE</th><th>CITY</th><th>HOSTEL</th><th>BATCH</th><th>NAME</th><th>REGISTERING DATE</th><th>GENDER</th>";
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
$count_ruby=mysql_num_rows($result_ruby);
$capacity_ruby-=$count_ruby;
echo "<blockquote><h1>AVAILABLE SEATS IN RUBY:$capacity_ruby</h1></blockquote>";
$count_pearl=mysql_num_rows($result_pearl);
$capacity_pearl-=$count_pearl;
echo "<blockquote><h1>AVAILABLE SEATS IN PEARL:$capacity_pearl</h1></blockquote>";
$count_lapis=mysql_num_rows($result_lapis);
$capacity_lapis-=$count_lapis;
echo "<blockquote><h1>AVAILABLE SEATS IN LAPIS:$capacity_lapis</h1></blockquote>";
$count_topaz=mysql_num_rows($result_topaz);
$capacity_topaz-=$count_topaz;
echo "<blockquote><h1>AVAILABLE SEATS IN TOPAZ:$capacity_topaz</h1></blockquote>";

echo "</table>";
echo "<input type=submit name=sumit value='show the selected'>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
