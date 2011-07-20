<?php
session_start();
$server="localhost";
$username="root";
$password="mysql";
$connect_mysql=mysql_connect($server,$username,$password);
$pass=$_GET['pass'];
$background=$_GET['back'];
$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.
$disp=("select * from registered_details where password='$pass'");
$disp1=mysql_query($disp);
echo "<table width=100% height=100% >";
echo "<tr>";
echo "<td >";
echo "<font style='position:absolute; left:150;top=250'><form method=get action='up.php'><img src='$background'>";
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


echo "<input type=submit name=submit value='update'>";
echo "</form>";
if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
echo "</td></font>";
echo "</tr>";
echo "</table>";
?>