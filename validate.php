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
$val1=$_GET['logname'];
$val2=$_GET['pass'];
echo "login page<br><br>";
setcookie("logname",$val1);
$sql_disp=("SELECT * FROM check_login;");
$result1=mysql_query($sql_disp);

if($val1=="")
{
echo "please enter the name!";
echo "<html>";
echo "<head>";
echo "<title> Validate</title>";
echo "<HEAD>";
echo "<BODY>";
echo "<A href='login.html'>BACK</a>";
}
else if($val2=="")
{
echo "please enter the password!";
echo "</html>";
echo "<head>";
echo "<title> Validate</title>";
echo "<HEAD>";
echo "<BODY>";
echo "<A href='login.html'>BACK</a>";
}
else 
{
while($row=mysql_fetch_array($result1))
{
if($row[email]==$val1&&$row[password]==$val2)
Header("Location: enterblog.php");
else
echo "user not registered";
}
}
?>