<?php
session_start();
$count=0;
$capacity=750;
$count_zircon_a=0;
$capacity_zircon_a=250;
$count_zircon_b=0;
$capacity_zircon_b=250;
$count_zircon_c=0;
$capacity_zircon_c=250;
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
$sql_disp=("SELECT * FROM allot_hostel5;");
$result=mysql_query($sql_disp);
$count=mysql_num_rows($result);
$sql_disp_zircon_a=("SELECT * FROM allot_hostel5 where hostel='ZIRCON-A'");
$result_zircon_a=mysql_query($sql_disp_zircon_a);
$count_zircon_a=mysql_num_rows($result_zircon_a);
$sql_disp_zircon_b=("SELECT * FROM allot_hostel5 where hostel='ZIRCON-B'");
$result_zircon_b=mysql_query($sql_disp_zircon_b);
$count_zircon_b=mysql_num_rows($result_zircon_b);
$sql_disp_zircon_c=("SELECT * FROM allot_hostel5 where hostel='ZIRCON-C'");
$result_zircon_c=mysql_query($sql_disp_zircon_c);
$count_zircon_c=mysql_num_rows($result_zircon_c);
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
$count_zircon_a=mysql_num_rows($result_zircon_a);
$capacity_zircon_a-=$count_zircon_a;
echo "<blockquote><h1>AVAILABLE SEATS IN ZIRCON-A:$capacity_zircon_a</h1></blockquote>";
$count_zircon_b=mysql_num_rows($result_zircon_b);
$capacity_zircon_b-=$count_zircon_b;
echo "<blockquote><h1>AVAILABLE SEATS IN ZIRCON-B:$capacity_zircon_b</h1></blockquote>";
$count_zircon_c=mysql_num_rows($result_zircon_c);
$capacity_zircon_c-=$count_zircon_c;
echo "<blockquote><h1>AVAILABLE SEATS IN ZIRCON-C:$capacity_zircon_c</h1></blockquote>";
echo "</table>";
echo "<input type=submit name=sumit value='show the selected'>";
echo "</form>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
