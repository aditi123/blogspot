<?php
session_start();
   $server="localhost";
$username="root";
$password="mysql";
$connect_mysql=mysql_connect($server,$username,$password);

if($connect_mysql)
echo "connection established<br>";
else
die("unable to connect<br>");
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
echo "<br><br>connected to the database<br><br>";
else
die("<br>unable to connect to the database");
$val1=$_GET['image'];
setcookie("image",$val1);
if($val1=="")
{
echo "please enter the name!";
echo "<html>";
echo "<head>";
echo "<title> Validate</title>";
echo "<HEAD>";
echo "<BODY>";
echo "<A href='playprofile.php'>BACK</a>";
}
else 
{
Header("Location: playpf.php");
}
?>