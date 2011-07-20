<?php
session_start();
$email=$_GET['email'];
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
$delete=("delete from registered_details where email='$email'");
$result=mysql_query($delete);
$delete2=("delete from members where email='$email'");
$result2=mysql_query($delete2);
$delete3=("delete from check_login where email='$email'");
$result3=mysql_query($delete3);
if($result&&$result2&&$result3)
echo "user successfully deleted";
else 
echo "could not delete";
?>