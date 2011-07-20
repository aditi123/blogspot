<?php
$password=$_GET['pass'];
if($password!="administrator")
die("Sorry the password is incorrect");
else
echo "HERE are your privileges<br>";
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
echo "<form method='get' action='administratorarea.php' >";
echo "<h1>SHOW TABLES</h1><br>";
echo "news board<input type=radio name='display' value='displaynew'><br>";
echo "blogs<input type=radio name='display' value='blog'><br>";
echo "questions<input type=radio name='display' value='questions'>";
echo "<h1>HOSTEL ALLOTMENT</h1><br><input type=radio name='display' value='allot_hostel'>1st YEAR HOSTELS RECORD<br><input type=radio name='display' value='allot_hostel2'>2nd YEAR HOSTELS RECORD<br><input type=radio name='display' value='allot_hostel3'>3rd YEAR HOSTELS RECORD<br><input type=radio name='display' value='allot_hostel4'>4th YEAR HOSTELS RECORD<br><input type=radio name='display' value='allot_hostel5'>5th YEAR HOSTELS RECORD";
echo "<br><br><input type='submit' name='submit' value='select the table you want to see'>";
echo "</form>";
echo "<a href='enterblog.php'>GO BACK</a>";
?>
