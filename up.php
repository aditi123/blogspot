
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

$var1=$_GET['name'];

$var3=$_GET['tadd'];
$var4=$_GET['padd'];
$var5=$_GET['insti'];
$var6=$_GET['dept'];
$var7=$_GET['email'];
echo "<form method='get' action='delete.php'>";
echo "<input type='text' name=email value='$var7'>";
echo "<input type='submit' name='del' value='delete'>";
echo "</form>";
$var7=$_GET['email'];
$var8=$_GET['contact'];
$var9=$_GET['li'];
$var10=$_GET['source'];
$disp=("select * from registered_details where email='$var7';");
$disp1=mysql_query($disp);
$sql_update=("UPDATE registered_details SET name='$var1',t_address='$var3',p_address='$var4',institute='$var5',department='$var6',likes_intrests='$var9',contact_num='$var8',source='$var10' WHERE email='$var7'");
$result=mysql_query($sql_update);
echo "<table width=100% height=100%>";
echo "<tr>";
echo "<td><img src='background3.jpg'>";
echo "<font style='position:absolute; left:150;top=300'><table width=600 height=100 border=0>";
echo "<th>PROFILE<th>";
while($row=mysql_fetch_array($disp1))
{
echo "<center>";
echo "<tr>";
echo "<td><h1>NAME:<input type='text' name='name' value='$var1' readonly></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>TEMPORARY ADDRESS:<input type='text' name='tadd' value='$var3'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>PERMANENT ADDRESS:<input type='text' name='padd' value='$var4'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>INSTITUTE:<input type='text' name='insti' value='$var5'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>DEPARTMENT:<input type='text' name='dept' value='$var6'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>EMAIL-ID:<input type='text' name='email' value='$var7' disabled></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>CONTACT NUMBER:<input type='text' name='contact' value='$var8'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>SOURCE:<input type='text' name='source' value='$var9'></h1></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h1>LIKES AND INTRESTS:<input type='text' name='li' value='$var10'></h1></td>";
echo "</tr>";
echo "</center>";
}
echo "</table>";
if(mysql_num_rows($disp1)<1)
{
echo "no result";
}
echo "</td>";
echo "</tr>";
echo "</table>";

?>