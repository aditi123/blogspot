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
echo "<table>";
echo "<tr><td><img src='wall.jpg'>";
echo "<font style='position:absolute;top=220;left=40'><table width=100% border=0>";
	 echo "<tr>";
	 echo "<td>";
	 $share=$_GET['share'];
	 $logcookie=$_COOKIE['logname'];
	 $sql_insert="insert into wall(user,sharings) VALUES('$logcookie','$share')";//as per the name of the table you are creating.
     $result=mysql_query($sql_insert);
	 $sql_disp=("SELECT * FROM wall");
     $result_disp=mysql_query($sql_disp);
     while($row=mysql_fetch_array($result_disp))
     {
       echo "<h3>$row[user]:$row[sharings]</h3>";
     }  
	  
	 echo "</td>";
	 echo "</tr>";
	 echo "</table></font>";
	 echo "</td></tr>";
	 echo "</table>";
	 ?>