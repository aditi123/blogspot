<html>
<head><title>blogs</title>
</head>
<body background="back3.jpg">
<table width="100%" height=100%>
<tr height="20%" width="100%">
<td colspan=2><marquee scrollamount="4" direction="left"><h2><img src="50px-Question_book-new.svg.png"><a href="questions.php">ASK YOUR QUESTIONS HERE!!</a></h2></marquee></td>
</tr>
<tr height="80%">
<td width="40%">
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
function validate_topic()
{
var str=document.form1.topic.value
if(IsBlank(str))
{
alert("Enter some topic for your blog")
return false
}
return true
}
function validate_blog()
{
var str=document.form1.n1text.value
if(IsBlank(str))
{
alert("blog field cannot be empty")
return false
}
return true
}
function check()
{
if(!validate_topic(document.form1.topic.value))
{
document.write("ERROR")
return false
}
if(!validate_blog(document.form1.n1text.value))
{
document.write("ERROR")
return false
}
}
</script>
<?php

echo "<center>";
echo "<a href='logout.php'>LOG OUT</a>";
$a="enteredtext";
$name=$_GET['BLOGFIELD'];
setcookie("BLOGFIELD",$name);
echo "your selected blogfield is<br>";
echo $name;
echo "<br><br><br><br>";

 echo "<form name='form1' method=get action='uploadedblog.php'>";
 echo "<h1><center>ENTER YOUR BLOG</center></h1>";
 echo "<h3>TOPIC OF YOUR BLOG</h3>";
 echo "<input type=text name='topic' onBlur='validate_topic()'><br><br>";
 echo "<div align='right'><textarea rows='35' cols='50' wrap='physical' name='n1text' value='$a' onBlur='validate_blog()'>";
 echo "</textarea></div>";
 echo "<br><input type=submit name=submit value='upload' onClick='check()'>";
 echo "</form>";
echo "</center>";
?>
</td>
<td><div align="center"><h2><u>Interesting Facts about Bloggers </u></h2><h3>
•	Bloggers with advertising invest significantly more <br>money in their blogs than bloggers who do <br>not accept advertising. <br>
•	Bloggers are generally the first to learn about new<br> web technologies and applications, such as<br> RSS and Twitter. <br> 
•	Bloggers are tremendously sophisticated in lever<br>aging available tools to make their blogs more <br>robust or easily updatable.  <br>
•	While the majority of bloggers manage their blogs <br>solo, among professional and corporate bloggers,<br> one in ten pay staff to contribute to their blogs.  <br>
•	One in five bloggers don't think that newspapers <br>will survive the next ten years. <br> Half believe that blogs will be a primary <br>source for news and entertainment <br>in the next five years.  <br>
</h3></div></td>
</tr>
</table></center>
</body>
</html>