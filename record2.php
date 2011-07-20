<?php
session_start();
$count=0;
$count_garnet_a=0;
$count_garnet_b=0;
$count_garnet_c=0;
$count_jade=0;
$capacity=1000;
$capacity_garnet_a=250;
$capacity_garnet_b=250;
$capacity_garnet_c=250;
$capacity_jade=250;
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
$sql_disp=("SELECT * FROM allot_hostel2;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
$sql_disp_garnet_a=("SELECT * FROM allot_hostel2 where hostel='GARNET-A'");
$result_garnet_a=mysql_query($sql_disp_garnet_a);
$count_garnet_a=mysql_num_rows($result_garnet_a);
$sql_disp_garnet_b=("SELECT * FROM allot_hostel2 where hostel='GARNET-B'");
$result_garnet_b=mysql_query($sql_disp_garnet_b);
$count_garnet_b=mysql_num_rows($result_garnet_b);
$sql_disp_garnet_c=("SELECT * FROM allot_hostel2 where hostel='GARNET-C'");
$result_garnet_c=mysql_query($sql_disp_garnet_c);
$count_garnet_c=mysql_num_rows($result_garnet_c);
$sql_disp_jade=("SELECT * FROM allot_hostel2 where hostel='JADE'");
$result_jade=mysql_query($sql_disp_jade);
$count_jade=mysql_num_rows($result_jade);
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
echo "<td><input type='radio' name='record' value='$row[roll_number]'></td>";
echo "</tr>";
}
$count_garnet_a=mysql_num_rows($result_garnet_a);
$capacity_garnet_a-=$count_garnet_a;
echo "<blockquote><h1>AVAILABLE SEATS IN GARNET-A:$capacity_garnet_a</h1></blockquote>";
$count_garnet_b=mysql_num_rows($result_garnet_b);
$capacity_garnet_b-=$count_garnet_b;
echo "<blockquote><h1>AVAILABLE SEATS IN GARNET-B:$capacity_garnet_b</h1></blockquote>";
$count_garnet_c=mysql_num_rows($result_garnet_c);
$capacity_garnet_c-=$count_garnet_c;
echo "<blockquote><h1>AVAILABLE SEATS IN GARNET-C:$capacity_garnet_c</h1></blockquote>";
$count_jade=mysql_num_rows($result_jade);
$capacity_jade-=$count_jade;
echo "<blockquote><h1>AVAILABLE SEATS IN JADE:$capacity_jade</h1></blockquote>";
$count=mysql_num_rows($result);
$capacity-=$count;
echo "<blockquote><h1>AVAILABLE SEATS:$capacity</h1></blockquote>";
echo "</table>";
echo "<input type=submit name=sumit value='show the selected'>";
echo "</form>";

if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
