
<?php
session_start();
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
$sql_disp_agate=("SELECT * FROM allot_hostel where hostel='AGATE';");
$result_agate=mysql_query($sql_disp_agate);
$count_agate=mysql_num_rows($result_agate);
if($count_agate>1)

$hostel1=$_GET['HIDDEN1'];
$hostel2=$_GET['HIDDEN2'];
$hostel3=$_GET['HIDDEN3'];
$hostel4=$_GET['HIDDEN4'];
$hostel5=$_GET['HIDDEN5'];
$hostel6=$_GET['HIDDEN6'];
$hostel7=$_GET['HIDDEN7'];
$hostel8=$_GET['HIDDEN8'];
$hostel9=$_GET['HIDDEN9'];
$hostel10=$_GET['HIDDEN10'];
$hostel11=$_GET['HIDDEN11'];
$hostel12=$_GET['HIDDEN12'];
$hostel13=$_GET['HIDDEN13'];
$hostel14=$_GET['HIDDEN14'];
$hostel15=$_GET['HIDDEN15'];
$hostel16=$_GET['HIDDEN16'];
$hostel17=$_GET['HIDDEN17'];
$hostel18=$_GET['HIDDEN18'];
$hostel19=$_GET['HIDDEN19'];
$hostel20=$_GET['HIDDEN20'];
$hostel21=$_GET['HIDDEN21'];
$NAME=$_GET['HOSTELS'];
$e_mail=$_GET['email'];
$password=$_GET['pass'];
$student=$_GET['name'];
$batch=$_GET['batch'];
$roll_num=$_GET['roll'];
$state=$_GET['state'];
$city=$_GET['city'];
$year=$_GET['year'];
$month=$_GET['month'];
$day=$_GET['day'];
$gender=$_GET['gender'];
$date=$year."-".$month."-".$day;
if($gender=="male")
{
if(($NAME=='AGATE'||$NAME=='CORAL'||$NAME=='DIAMOND')&&($batch=='1st YEAR'))
{
$sql_insert="insert into allot_hostel(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}

else if(($NAME=='GARNET-A'||$NAME=='GARNET-B'||$NAME=='GARNET-C'||$NAME=='JADE')&&($batch=='2nd YEAR'))
{
$sql_insert="insert into allot_hostel2(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='EMERALD'||$NAME=='SAPPHIRE'||$NAME=='BERYL')&&($batch=='3rd YEAR'))
{
$sql_insert="insert into allot_hostel3(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='RUBY'||$NAME=='PEARL'||$NAME=='LAPIS'||$NAME=='TOPAZ')&&($batch=='4th YEAR'))
{
$sql_insert="insert into allot_hostel4(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='ZIRCON-A'||$NAME=='ZIRCON-B'||$NAME=='ZIRCON-C')&&($batch=='MTECH'))
{
$sql_insert="insert into allot_hostel5(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);

echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else
{
echo "<blockquote><h1>applicant could not register successfully</h1></blockquote><br>";
}
}
else if($gender=="female")
{
if(($NAME=='OPAL-C')&&($batch=='1st YEAR'))
{
$sql_insert="insert into allot_girlshostel(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='OPAL-B')&&($batch=='2nd YEAR'))
{
$sql_insert="insert into allot_girlshostel2(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='OPAL-D')&&($batch=='3rd YEAR'))
{
$sql_insert="insert into allot_girlshostel3(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else if(($NAME=='OPAL-A')&&($batch=='4th YEAR'))
{
$sql_insert="insert into allot_girlshostel4(name,roll_number,gender,email,password,state,city,batch,hostel,registering_date) VALUES('$student','$roll_num','$gender','$e_mail','$password','$state','$city','$batch','$NAME','$date')";//as per the name of the table you are creating.

$result=mysql_query($sql_insert);
echo "<blockquote><h1>APPLICANT REGISTERED SUCCESSFULLY</h1></blockquote>";
}
else 
{
echo "<h1>USER COULD NOT REGISTER SUCCESSFULLY</h1><br>";
}
}
else
echo "Select accordingly! you failed to register yourself";
echo "AS PER YOUR ENTERED DETAILS</br>";
echo "HOSTEL:$NAME";
echo "<br>";
echo "NAME:$student";
echo "<br>";
echo "GENDER:$gender";
echo "<br>";
echo "BATCH:$batch";
echo "<br>";
echo "E-MAIL:$e_mail";
echo "<br>";
echo "PASSWORD:$password";
echo "<br>";
echo "STATE:$state";
echo "<br>";
echo "CITY:$city";
echo "<br>";
echo "ROLL NUMBER:$roll_num";
echo "<br>";
echo "<a href='record.php'>click here to see the records till now</a><br>";
echo "<a href='record2.php'>click here to see the records of second years till now</a><br>";
echo "<a href='record3.php'>click here to see the records of third years till now</a><br>";
echo "<a href='record4.php'>click here to see the records of fourth years till now</a><br>";
echo "<a href='record5.php'>click here to see the records of mtech students till now</a><br>";
echo "<a href='recordgirls.php'>click here to see the records of 1st year girls till now</a><br>";
echo "<a href='recordgirls2.php'>click here to see the records of 2nd year girls till now</a><br>";
echo "<a href='recordgirls3.php'>click here to see the records of 3rd year girls till now</a><br>";
echo "<a href='recordgirls4.php'>click here to see the records of 4th year girls till now</a><br>";
echo "<a href='members.php'>click here to see the records of members till now</a><br>";

?>
