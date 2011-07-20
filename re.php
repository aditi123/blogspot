<body background="back2.jpg" text="black">
<?php
$date_array = getdate(); // no argument passed so today's date will be used
 
 print "Today's date: $date_array[mday]/$date_array[mon]/$date_array[year]<p>";
$A=$_GET['n1text'];
$B=$_GET['n2text'];
$C=$_GET['n3text'];
$D=$_GET['n4text'];
$E=$_GET['n5text'];
$F=$_GET['n6text'];
$G=$_GET['n7text'];
$H=$_GET['n8text'];
$I=$_GET['n9text'];
$J=$_GET['n10text'];
$K=$_GET['n11text'];
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

$sql_insert="INSERT INTO registered_details(name,t_address,p_address,institute,department,email,contact_num,likes_intrests,source,password,category_users,background) VALUES('$A','$C','$D','$E','$F','$G','$H','$I','$J','$B','$K','background3.jpg')";
$result=mysql_query($sql_insert);
$sql_insert1="INSERT INTO check_login(email,password,category_users) VALUES('$G','$B','$K')";
$result1=mysql_query($sql_insert1);
$sql_insert2="INSERT INTO members(name,email,category_users) VALUES('$A','$G','$K')";
$result2=mysql_query($sql_insert2);
if($result)
{
echo "records are inserted";
}
else
{
die("records could not be inserted");
mysql_error();
}

echo " <center><font size=40><u>YOUR PERSONAL DETAILS</u></font></center>";
echo "<BR><BR>";
echo "<font size=20>FIRST NAME:</font><font color=white size=20>$A</font><br>";
echo "<font size=20>TEMPORARY ADDRESS:</font><font color=white size=20>$C</font><BR>";
echo "<font size=20>PERMANENT ADDRESS: </font><font color=white size=20>$D</font><BR>";
echo "<font size=20>INSTITUTE: </font><font color=white size=20>$E</font><BR>";
echo "<font size=20>DEPARTMENT: </font><font color=white size=20>$F</font><BR>";
echo "<font size=20>EMAIL: </font><font color=white size=20>$G</font><BR>";
echo "<font size=20>PASSWORD: </font><font color=white size=20>$B</font><BR>";
echo "<font size=20>CONTACT NUMBER: </font><font color=white size=20>$H</font><BR>";
echo "<font size=20>YOUR LIKES AND DISLIKES </font><font color=white size=20>$I</font><BR>";
echo "<font size=20>YOUR ENTERED SOURCE: </font><font color=white size=20>$J</font><BR>";
?>
</body>

