<body background="backblog.jpg">
<table>
<td bgcolor="black" height="45">
<img src="dg8.gif" name="hr1"><img 
src="dg8.gif" name="hr2"><img 
src="dgc.gif" name="c"><img 
src="dg8.gif" name="mn1"><img 
src="dg8.gif" name="mn2"><img 
src="dgc.gif" name="c"><img 
src="dg8.gif" name="se1"><img 
src="dg8.gif" name="se2"><img 
src="dgpm.gif" name="ampm">
</td></table>
</body>
<script type="text/javascript">

dg0 = new Image();dg0.src = "dg0.gif";
dg1 = new Image();dg1.src = "dg1.gif";
dg2 = new Image();dg2.src = "dg2.gif";
dg3 = new Image();dg3.src = "dg3.gif";
dg4 = new Image();dg4.src = "dg4.gif";
dg5 = new Image();dg5.src = "dg5.gif";
dg6 = new Image();dg6.src = "dg6.gif";
dg7 = new Image();dg7.src = "dg7.gif";
dg8 = new Image();dg8.src = "dg8.gif";
dg9 = new Image();dg9.src = "dg9.gif";
dgam= new Image();dgam.src= "dgam.gif";
dgpm= new Image();dgpm.src= "dgpm.gif";
dgc = new Image();dgc.src = "dgc.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours()+100;
mn= d.getMinutes()+100;
se= d.getSeconds()+100;
if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}
tot=''+hr+mn+se;
document.hr1.src = 'dg'+tot.substring(1,2)+'.gif';
document.hr2.src = 'dg'+tot.substring(2,3)+'.gif';
document.mn1.src = 'dg'+tot.substring(4,5)+'.gif';
document.mn2.src = 'dg'+tot.substring(5,6)+'.gif';
document.se1.src = 'dg'+tot.substring(7,8)+'.gif';
document.se2.src = 'dg'+tot.substring(8,9)+'.gif';
document.ampm.src= 'dg'+am_pm+'.gif';}
dotime();
//end -->
</script>
<?php
session_start();
echo "<form method='get' action='newsample.php'>";
$server="localhost";//as per your server
echo "<input type='text' name='server' value='$server' readonly>";
$username="root";
echo "<input type='text' name='username' value='$username' readonly>";
$password="mysql";//as per your password
echo "<input type='text' name='password' value='$password' readonly>";
echo "<input type=submit value='go to home page'>";
echo "</form>";
$connect_mysql=mysql_connect($server,$username,$password);
if($connect_mysql)
echo "connection established<br>";
else
die("unable to connect<br>");
$sql_database=("create database hostel");
$result_database=mysql_query($sql_database);
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
echo "<br><br>connected to the database<br><br>";
else
die("<br>unable to connect to the database");
$sql_create1st_year="create table 1st_year_hostels("."hostel char(15) not null,"."capacity int(3) not null".")";
$result_1st_year=mysql_query($sql_create1st_year);
$sql_create2nd_year="create table 2nd_year_hostels("."hostel char(15) not null,"."capacity int(3) not null".")";
$result_2nd_year=mysql_query($sql_create2nd_year);
$sql_create3rd_year="create table 3rd_year_hostels("."hostel char(15) not null,"."capacity int(3) not null".")";
$result_3rd_year=mysql_query($sql_create3rd_year);
$sql_create4th_year="create table 4th_year_hostels("."hostel char(15) not null,"."capacity int(3) not null".")";
$result_4th_year=mysql_query($sql_create4th_year);
$sql_createmtech="create table mtech("."hostel char(15) not null,"."capacity int(3) not null".")";
$result_mtech=mysql_query($sql_createmtech);
$sql_createregistered_details="create table registered_details("."name varchar(30) not null,"."t_address varchar(767) not null,"."p_address varchar(767) not null,"."institute varchar(767) not null,"."department varchar(767) not null,"."email char(50) primary key not null,"."contact_num int(15) not null,"."likes_intrests varchar(767) not null,"."source varchar(30) not null,"."password char(20) not null,"."category_users char(18) not null,"."background blob not null".")";
$result_registered_details=mysql_query($sql_createregistered_details);
$sql_createcheck_login="create table check_login("."email char(50) primary key not null,"."password char(20) not null,"."category_users char(18) not null".")";
$result_check_login=mysql_query($sql_createcheck_login);
$sql_createmembers="create table members("."name varchar(30) not null,"."email char(50) primary key not null,"."category_users char(18) not null".")";
$result_members=mysql_query($sql_createmembers);
$sql_createallot_hostel="create table allot_hostel("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_hostel=mysql_query($sql_createallot_hostel);
$sql_createallot_hostel2="create table allot_hostel2("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_hostel2=mysql_query($sql_createallot_hostel2);
$sql_createallot_hostel3="create table allot_hostel3("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_hostel3=mysql_query($sql_createallot_hostel3);
$sql_createallot_hostel4="create table allot_hostel4("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_hostel4=mysql_query($sql_createallot_hostel4);
$sql_createallot_hostel5="create table allot_hostel5("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_hostel5=mysql_query($sql_createallot_hostel5);
$sql_createallot_girlshostel="create table allot_girlshostel("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_girlshostel=mysql_query($sql_createallot_girlshostel);
$sql_createallot_girlshostel2="create table allot_girlshostel2("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_girlshostel2=mysql_query($sql_createallot_girlshostel2);
$sql_createallot_girlshostel3="create table allot_girlshostel3("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_girlshostel3=mysql_query($sql_createallot_girlshostel3);
$sql_createallot_girlshostel4="create table allot_girlshostel4("."name varchar(30) not null,"."roll_number int(15) primary key not null,"."gender char(10) not null,"."email char(50) not null,"."password char(20) not null,"."state varchar(50) not null,"."city varchar(50) not null,"."batch varchar(20) not null,"."hostel char(30) not null,"."registering_date date not null".")";
$result_allot_girlshostel4=mysql_query($sql_createallot_girlshostel4);
$sql_createblog="create table blog("."topic varchar(200) primary key not null,"."blogs longtext not null,"."userid char(50) not null,"."date date not null".")";
$result_blog=mysql_query($sql_createblog);
$sql_createimage="create table image("."background char(30) primary key not null".")";
$result_image=mysql_query($sql_createimage);
$sql_insertimage1="insert into image(background) VALUES('background.jpg')";//as per the name of the table you are creating.
$resultimage1=mysql_query($sql_insertimage1);
$sql_insertimage2="insert into image(background) VALUES('background2.jpg')";//as per the name of the table you are creating.
$resultimage2=mysql_query($sql_insertimage2);
$sql_insertimage3="insert into image(background) VALUES('background3.jpg')";//as per the name of the table you are creating.
$resultimage3=mysql_query($sql_insertimage3);
$sql_insertimage4="insert into image(background) VALUES('background4.jpg')";//as per the name of the table you are creating.
$resultimage4=mysql_query($sql_insertimage4);
$sql_createdisplaynew="create table displaynew("."new varchar(767) primary key not null,"."userid char(50) not null,"."date date not null".")";
$result_displaynew=mysql_query($sql_createdisplaynew);
$sql_createwall="create table wall( "."user char(50) not null,"."sharings varchar(767) primary key not null".")";
$result_wall=mysql_query($sql_createwall);
$sql_createquestions="create table questions("."name char(50) not null,"."questions varchar(767) primary key not null,"."date date not null".")";
$result_questions=mysql_query($sql_createquestions);
?>
</body>