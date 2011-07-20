<?php
session_start();
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
$i=1;
$mysql_db=mysql_select_db("hostel",$connect_mysql);
$sql_disp=("select * from image");
$result=mysql_query($sql_disp);
echo "<form method=get action='playpf.php'>";
while($row=mysql_fetch_array($result))
{
echo "<input type='text' name='image' value='$row[background]' readonly><input  type='radio' name='select' value='$row[background]'>BACKGROUND$i<br>";
$i++;
}
echo "<input type='submit' name=submit value='update background'>";
echo "</form>";
?>