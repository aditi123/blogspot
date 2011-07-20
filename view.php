<style>
h1{font-size=35pt;font-family=jokerman;}
h2{font-size=24pt;font-family=tahoma;}
</style>
<body background="haunt.jpg" text="white">
<table>
<tr>
<td width="75%" height="100%">
<?php
$a=$_GET['fname'];
$b=$_GET['lname'];
$c=$_GET['email'];
$d=$_GET['pass'];
$e=$_GET['comment'];
$f=$_GET['music1'];
$g=$_GET['music2'];
$h=$_GET['music3'];
$i=$_GET['music4'];
$j=$_GET['music5'];
echo "<center>";
echo "<h1><u>Congratulations!! <br>now you are a part of our HALLOWEEN..</u><h1>";
echo "<u>Your DEATH TIME is:</u>";
echo date("H:i, jSF");
echo "<h2>FIRST NAME:$a</h2>";
echo "<br>";
echo "<h2>LAST NAME:$b</h2>";
echo "<br>";
echo "<h2>EMAIL:$c</h2>";
echo "<br>";
echo "<h2>PASSWORD:$d</h2>";
echo "<br>";
echo "<h2>COMMENTS:$e</h2>";
echo "<br>";
echo "<h2>MUSIC:";
echo "<br>";
if($f!="")
echo "$f,";

if($g!="")
echo "$g,";

if($h!="")
echo "$h,";

if($i!="")
echo "$i,";

if($j!="")
echo $j;


echo "</center>";
?>
</td>
<td color="black" height="100%">
<marquee direction="up"><img src="bone-skull.gif"></marquee>
</td>
</tr>
</table>


</body>