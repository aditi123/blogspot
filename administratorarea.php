<?php
$logcookie=$_COOKIE['logname'];
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
	echo "<h1>WELCOME $logcookie<br>";
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
$table=$_GET['display'];
if($table=="displaynew")
{
$sql_disp=("SELECT * FROM displaynew");
$sql_result=mysql_query($sql_disp);
echo "<table width=100% border=0>";
$i=1;
while($row=mysql_fetch_array($sql_result))
{
echo "<tr>";
echo "<td><b><h1>NEWS$i:</h1></b>$row[new]<br><div align=right><h3>BY:$row[userid]<br>$row[date]</h3></div><br><input type='submit' name='submit' value='delete'></td>";
echo "</tr>";
$i++;
}

echo "</table>";
if(mysql_num_rows($sql_result)<1)
{
echo "no result";
}
}
else if($table=="blog")
{
$sql_disp=("SELECT * FROM blog");
$result=mysql_query($sql_disp);
echo "<table width=50% border=2>";
echo "<th>BLOG</th>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td width=100%><u>$row[topic]</u><br>$row[blogs]<br>$row[userid]<br>$row[date]<br><input type='submit' name='submit' value='delete'></td>";
echo "</tr>";
}

echo "</table>";
}
else if($table=="questions")
{
$disp=("select * from questions order by date asc;");
$disp1=mysql_query($disp);

echo "<table>";
echo "<th>QUESTIONS</th><th>BY</th>";
while($row=mysql_fetch_array($disp1))
{
echo "<tr>";
echo "<td>$row[questions]</td>";
echo "<td>$row[name]<br>$row[date]</td>";
echo "<td><input type='submit' name='submit' value='delete'></td>";
echo "</tr>";
}
echo "</table>";
if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
}
else if($table=="allot_hostel")
{
$sql_disp=("SELECT * FROM allot_hostel;");
$result=mysql_query($sql_disp);
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
echo "</table>";
}
else if($table=="allot_hostel2")
{
$sql_disp=("SELECT * FROM allot_hostel2;");
$result=mysql_query($sql_disp);
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
echo "</table>";
}
else if($table=="allot_hostel3")
{
$sql_disp=("SELECT * FROM allot_hostel3;");
$result=mysql_query($sql_disp);
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
echo "</table>";
}
else if($table=="allot_hostel4")
{
$sql_disp=("SELECT * FROM allot_hostel4;");
$result=mysql_query($sql_disp);
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
echo "</table>";
}
else if($table=="allot_hostel5")
{
$sql_disp=("SELECT * FROM allot_hostel5;");
$result=mysql_query($sql_disp);
echo "<form method='get' name='administratordelete.php'>";
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
echo "<input type='submit' name='submit' value='show the selected'>";
echo "</table>";
echo "</form>";
}
echo "<a href='enterblog.php'>GO BACK</a>";
?>
