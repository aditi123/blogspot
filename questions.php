<script>
function IsBlank(s)
{
var len=s.length
for(i=0;i<len;i++)
{
if(s.charAt(i)!=" ")
{
return false
}
}
return true
}
function validate_question()
{
var str=document.form1.question.value
if(IsBlank(str))
{
alert("question field cannot be empty")
return false
}
return true
}
function check()
{
if(!validate_question(document.form1.question.value))
{
document.write("error")
return false
}
}
</script>
<body>
<marquee direction='right' scrollamount='5'><img src="back2.1.jpg"></marquee>
<?php
echo "<a href='logout.php'>LOG OUT</a>";
echo "<font style='position:absolute; left:250;top=300'><h1><table height=100% width=100%>";
echo "<tr>";
echo "<td><img src='backgroundim.jpg'></td>";
echo "</tr>";
echo "<form name='form1' method=get action='quesdisp.php'>";
echo "<tr>";
echo "<td>";
echo "<font style='position:absolute; left:150;top=500'><h1>ask your questions</h1></font>";
echo "</td>";
echo "<tr>";
echo "<td><font style='position:absolute; left:150;top=550'><textarea rows='3' cols='40' name='question' wrap='physical' onBlur='validate_question()'></textarea></h1></font></td>";
echo "</tr>";
echo "<tr>";
echo "<td><font style='position:absolute; left:220;top=630'><h1><input type='submit' name='submit' value='submit your question' onClick='check()'></h1></font></td>";
echo "</tr>";
echo "</form>";
echo "</table></h1></font>";
?>