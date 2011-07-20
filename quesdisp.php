<?php
session_start();
$question=$_GET['question'];
$logcookie=$_COOKIE['logname'];
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

$sql_insert="insert into questions(name,questions,date) VALUES('$logcookie','$question',now())";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
$disp=("select * from questions order by date asc;");
$disp1=mysql_query($disp);

echo "<table>";
echo "<th>QUESTIONS</th><th>BY</th>";
while($row=mysql_fetch_array($disp1))
{
echo "<tr>";
echo "<td>$row[questions]</td>";
echo "<td>$row[name]<br>$row[date]</td>";
echo "<td><input type='button' name='del' value='delete'></td>";
echo "</tr>";
}
echo "</table>";
if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
?>