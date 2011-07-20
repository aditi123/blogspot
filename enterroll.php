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
function validate_email()
{
var str=document.form1.email.value
if(IsBlank(str))
{
alert("email field cannot be empty")
return false
}
return true
}
function validate_password()
{
var str=document.form1.pass.value
if(IsBlank(str))
{
alert("password field cannot be empty")
return false
}
return true
}
function check()
{
if(!validate_email(document.form1.email.value))
{
document.write("error")
return false
}
if(!validate_password(document.form1.pass.value))
{
document.write("error")
return false
}
}
</script>
<?php
echo "<form name=form1 method=get action='profile.php'>";
echo "<blockquote><h1>THIS PAGE IS FOR THE SAFETY PURPOSE OF YOUR ACCOUNT SO THAT NO ONE ELSE VIEWS IT..</h1></blockquote><br>";
echo "enter your email";
echo "<input type='text' name='email' onBlur='validate_email()'><br>";
echo "enter your password";
echo "<input type='text' name='pass' onBlur='validate_password()'>";
echo "<input type=submit name=submit value='enter' onClick='check()'>";
echo "<form>";
?>
