<?php
session_start();
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
	$logcookie=$_COOKIE['logname'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
if($connect_mysql)
echo "connection established<br>";
else
die("unable to connect<br>");
echo "<a href='logout.php'>LOG OUT</a>";
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
echo "<br><br>connected to the database<br><br>";
else
die("<br>unable to connect to the database");
$new=$_GET['new'];
echo $new;
$sql_insert="insert into displaynew(new,userid,date) VALUES('$new','$logcookie',now())";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<br>";
echo "<a href='newsdaily.php'>go</a>";
?>