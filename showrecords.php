<?php
$show_record=$_GET['record'];
$batch=$_GET['batch'];
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
if($batch=="1st YEAR")
{
$disp=("select * from allot_hostel where roll_number='$show_record'");
$disp1=mysql_query($disp);
$disp2=("select * from allot_girlshostel where roll_number='$show_record'");
$disp2=mysql_query($disp2);
}
else if($batch=="2nd YEAR")
{
$disp=("select * from allot_hostel2 where roll_number='$show_record'");
$disp1=mysql_query($disp);
$disp2=("select * from allot_girlshostel2 where roll_number='$show_record'");
$disp2=mysql_query($disp2);
}
else if($batch=="3rd YEAR")
{
$disp=("select * from allot_hostel3 where roll_number='$show_record'");
$disp1=mysql_query($disp);
$disp2=("select * from allot_girlshostel3 where roll_number='$show_record'");
$disp2=mysql_query($disp2);
}
else if($batch=="4th YEAR")
{
$disp=("select * from allot_hostel4 where roll_number='$show_record'");
$disp1=mysql_query($disp);
$disp2=("select * from allot_girlshostel4 where roll_number='$show_record'");
$disp2=mysql_query($disp2);
}
else if($batch=="MTECH")
{
$disp=("select * from allot_hostel5 where roll_number='$show_record'");
$disp1=mysql_query($disp);
$disp2=("select * from allot_girlshostel5 where roll_number='$show_record'");
$disp2=mysql_query($disp2);
}

echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "<table>";
echo "<form method=get action='u.php'>";
while($row=mysql_fetch_array($disp1))
{
echo "<tr>";
echo "<td><h1>$row[name]</h1></td></tr>";
echo "<tr><td>ROLL NUMBER:<input type='text' name='roll' value='$row[roll_number]'></td></tr>";
echo "<tr><td>GENDER:<input type='text' name='gender' value='$row[gender]'></td></tr>";
echo "<tr><td>BATCH:<input type='text' name='batch' value='$row[batch]'></td></tr>";
echo "<tr><td>HOSTEL:<input type='text' name='hostel' value='$row[hostel]'></td></tr>";
echo "<tr><td>EMAIL:<input type='text' name='email' value='$row[email]'></td></tr>";
echo "<tr><td>PASSWORD:<input type='text' name='password' value='$row[password]'></td></tr>";
echo "<tr><td>STATE:<input type='text' name='state' value='$row[state]'></td></tr>";
echo "<tr><td>CITY:<input type='text' name='city' value='$row[city]'></td></tr>";
echo "<tr><td>REGISTERED DATE:$row[registering_date]</td></tr>";
}
echo "<input type=submit name='submit' value='UPDATE'>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table>";


if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "<table>";
echo "<form method=get action='u.php'>";
while($row=mysql_fetch_array($disp2))
{
echo "<tr>";
echo "<td><h1>$row[name]</h1></td></tr>";
echo "<tr><td>ROLL NUMBER:<input type='text' name='roll' value='$row[roll_number]'></td></tr>";
echo "<tr><td>GENDER:<input type='text' name='gender' value='$row[gender]'></td></tr>";
echo "<tr><td>BATCH:<input type='text' name='batch' value='$row[batch]'></td></tr>";
echo "<tr><td>HOSTEL:<input type='text' name='hostel' value='$row[hostel]'></td></tr>";
echo "<tr><td>EMAIL:<input type='text' name='email' value='$row[email]'></td></tr>";
echo "<tr><td>PASSWORD:<input type='text' name='password' value='$row[password]'></td></tr>";
echo "<tr><td>STATE:<input type='text' name='state' value='$row[state]'></td></tr>";
echo "<tr><td>CITY:<input type='text' name='city' value='$row[city]'></td></tr>";
echo "<tr><td>REGISTERED DATE:$row[registering_date]</td></tr>";
}
echo "<input type=submit name='submit' value='UPDATE'>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table>";
if(mysql_num_rows($disp2)<1)
{
echo "no result";
}
?>