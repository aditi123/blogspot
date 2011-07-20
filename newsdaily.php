<body>
<table>
<tr>
<td><img src='background4-vert.jpg'>
<font style="position:absolute; left:100; top=250"><table width=80%>
<tr>
<td>
<?php
session_start();
$servercookie=$_COOKIE['server'];
	$usernamecookie=$_COOKIE['username'];
	$passwordcookie=$_COOKIE['password'];
    $connect_mysql=mysql_connect($servercookie,$usernamecookie,$passwordcookie);
	echo "<a href='logout.php'>LOG OUT</a>";

$mysql_db=mysql_select_db("hostel",$connect_mysql);//as per the name of the database u are saving it in.

$sql_disp=("SELECT * FROM displaynew order by date asc");
$result=mysql_query($sql_disp);
echo "<table width=100% border=0>";
$i=1;
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td><b><h1>NEWS$i:</h1></b>$row[new]<br><div align=right><h3>BY:$row[userid]<br>$row[date]</h3></div></td>";
echo "</tr>";
$i++;
}

echo "</table>";
if(mysql_num_rows($result)<1)
{
echo "no result";
}
?>
</td>
</tr>
</table></font>
</td>
</tr>
</table>
</body>