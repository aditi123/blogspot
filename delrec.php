<?php
session_start();
$roll=$_GET['roll'];
$batch=$_GET['batch'];
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
$delete=("delete from allot_hostel where roll_number='$roll'");
$result=mysql_query($delete);
}
else if($batch=="2nd YEAR")
{
$delete=("delete from allot_hostel2 where roll_number='$roll'");
$result=mysql_query($delete);
}
else if($batch=="3rd YEAR")
{
$delete=("delete from allot_hostel3 where roll_number='$roll'");
$result=mysql_query($delete);
}
else if($batch=="4th YEAR")
{
$delete=("delete from allot_hostel4 where roll_number='$roll'");
$result=mysql_query($delete);
}
else if($batch=="MTECH")
{
$delete=("delete from allot_hostel5 where roll_number='$roll'");
$result=mysql_query($delete);
}
if($result)
echo "user successfully deleted";
else 
echo "could not delete";
?>