
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

$var3=$_GET['roll'];
$var4=$_GET['gender'];
$var5=$_GET['batch'];
$var6=$_GET['hostel'];
$var7=$_GET['email'];
$var8=$_GET['password'];
$var9=$_GET['state'];
$var10=$_GET['city'];


if($var5=="1st YEAR"&&$var4=="male")
{
$sql_update=("UPDATE allot_hostel SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_hostel where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="1st YEAR"&&$var4=='female')
{
$sql_update=("UPDATE allot_girlshostel SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_girlshostel where roll_number='$var3'");
$disp1=mysql_query($disp);
}
else if($var5=="2nd YEAR"&&$var4=='male')
{
$sql_update=("UPDATE allot_hostel2 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_hostel2 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="2nd YEAR"&&$var4=='female')
{
$sql_update=("UPDATE allot_girlshostel2 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_girlshostel2 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="3rd YEAR"&&$var4=='male')
{
$sql_update=("UPDATE allot_hostel3 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_hostel3 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="3rd YEAR"&&$var4=='female')
{
$sql_update=("UPDATE allot_girlshostel3 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_girlshostel3 where roll_number='$var3'");
$disp1=mysql_query($disp);
}
else if($var5=="4th YEAR"&&$var4=='male')
{
$sql_update=("UPDATE allot_hostel4 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_hostel4 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="4th YEAR"&&$var4=='female')
{
$sql_update=("UPDATE allot_girlshostel4 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_girlshostel4 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

else if($var5=="MTECH"&&$var4=='male')
{
$sql_update=("UPDATE allot_hostel5 SET gender='$var4',batch='$var5',hostel='$var6',email='$var7',password='$var8',state='$var9',city='$var10' WHERE roll_number='$var3'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
$disp=("select * from allot_hostel5 where roll_number='$var3'");
$disp1=mysql_query($disp);
}

echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "<table>";
echo "<form method=get action='delrec.php'>";
while($row=mysql_fetch_array($disp1))
{
echo "<tr>";
echo "<td><h1>$row[name]</td></tr>";
echo "<tr><td>ROLL NUMBER:<input type='text' name='roll' value='$row[roll_number]'></td></tr>";
echo "<tr><td>GENDER:$row[gender]</td></tr>";
echo "<tr><td>BATCH:BATCH:<input type='text' name='batch' value='$row[batch]'></td></tr>";
echo "<tr><td>HOSTEL:$row[hostel]</td></tr>";
echo "<tr><td>EMAIL:$row[email]</td></tr>";
echo "<tr><td>PASSWORD:$row[password]</td></tr>";
echo "<tr><td>STATE:$row[state]</td></tr>";
echo "<tr><td>CITY:$row[city]</td></tr>";
echo "<tr><td>REGISTERED DATE:$row[registering_date]</td></tr>";
}
echo "<input type=submit name=submit value='DELETE'>";
echo "</form>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table>";



if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
?>