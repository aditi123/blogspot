<?php
$user=$_GET['user'];
$logcookie=$_COOKIE['logname'];
if($user=="user"||$user=="")
die ("sorry. you have no privileges $logcookie");
else 
echo "you have many privileges<br>";
echo $logcookie;
echo "<form method='get' action='privilege.php'>";
echo "Enter the ADMINISTRATOR password<br>";
echo "<input type='password' name='pass'>";
echo "<input type=submit name=submit value='submit your password'>";
echo "</form>";
?>