<?php
$logcookie=$_COOKIE['logname'];
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
	$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
if($mysql_db)
	$disp=("select * from registered_details where email='$logcookie'");
$disp1=mysql_query($disp);
$background=$_GET['select'];
$sql_update=("UPDATE registered_details SET background='$background' where email='$logcookie'");
$result=mysql_query($sql_update);
if($result)
echo "updated";
else
echo "not updated";
echo "<table>";
echo "<tr>";
echo "<td><img src='$background'>";
echo "<table><tr>";
echo "<td>";

echo "<table width=50% height=50% >";
echo "<tr>";
echo "<td >";
echo "<font style='position:absolute; left:150;top=250'>";
echo "<table width=600 height=600 border=0>";
echo "<th>PROFILE<th>";
while($row=mysql_fetch_array($disp1))
{
echo "<center>";
echo "<tr>";
echo "<td><h1>NAME:<input type='text' name='name' value='$row[name]' readonly></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>TEMPORARY ADDRESS:<input type='text' name='tadd' value='$row[t_address]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>PERMANENT ADDRESS:<input type='text' name='padd' value='$row[p_address]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>INSTITUTE:<input type='text' name='insti' value='$row[institute]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>DEPARTMENT:<input type='text' name='dept' value='$row[department]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>EMAIL-ID:<input type='text' name='email' value='$row[email]' readonly></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>CONTACT NUMBER:<input type='text' name='contact' value='$row[contact_num]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>SOURCE:<input type='text' name='source' value='$row[source]'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>LIKES AND INTRESTS:<input type='text' name='li' value='$row[likes_intrests]'></h1></td>";
echo "</tr>";
echo "</center>";
}


echo "</table>";



if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
echo "</td></font>";
echo "</tr>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</td>";
echo "<a href='enterblog.php'><h1>go back to the main page</h1></a>";
echo "</tr>";
echo "</table>";

?>