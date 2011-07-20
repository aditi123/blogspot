<head>
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
function validate_name()
{
var str=document.form1.name.value
if(IsBlank(str))
{
alert("name field cannot be empty")
return false
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
function validate_state()
{
var str=document.form1.state.value
if(IsBlank(str))
{
alert("state field cannot be empty")
return false
}
return true
}
function validate_city()
{
var str=document.form1.city.value
if(IsBlank(str))
{
alert("city field cannot be empty")
return false
}
return true
}
function validate_roll()
{
var str=document.form1.roll.value
if(IsBlank(str))
{
alert("roll field cannot be empty")
return false
}
return true
}
function radio(frm)
{
for (var i = 0; i < frm.batch.length; i++)
{
      if (frm.batch[i].checked)
	  {
         return true
         break
      }
   }
   return false
}
function check()
{
if(!validate_name(document.form1.name.value))
{
document.write("ERROR")
return false
}
if(!validate_email(document.form1.email.value))
{
document.write("ERROR")
return false
}
if(!validate_password(document.form1.pass.value))
{
document.write("ERROR")
return false
}
if(!validate_state(document.form1.state.value))
{
document.write("ERROR")
return false
}
if(!validate_city(document.form1.city.value))
{
document.write("ERROR")
return false
}
if(!validate_roll(document.form1.roll.value))
{
document.write("ERROR")
return false
}
if(!radio(document.form1.batch.value))
{
document.write("ERROR")
return false
}
}
</script>
</head>
<?php
session_start();
echo "<a href='logout.php'>LOG OUT</a>";
echo "<form name='form1' method='get' action='hostel.php'>";
echo "<font color='green'><b>SELECT</b></font><br><br>";
echo "<input type=radio name='gender' value='male'>MALE&nbsp;&nbsp;&nbsp;";
echo "<input type=radio name='gender' value='female'>FEMALE<br><br>";
echo "<font color='green'><b>SELECT YOUR HOSTEL</b></font><BR><BR><BR>";
echo "<SELECT TYPE='LISTBOX' NAME='HOSTELS'>";
echo "<OPTION>AGATE</OPTION>";
echo "<OPTION>BERYL</OPTION>";
echo "<OPTION>CORAL</OPTION>";
echo "<OPTION>DIAMOND</OPTION>";
echo "<OPTION>EMERALD</OPTION>";
echo "<OPTION>GARNET-A</OPTION>";
echo "<OPTION>GARNET-B</OPTION>";
echo "<OPTION>GARNET-C</OPTION>";
echo "<OPTION>JADE</OPTION>";
echo "<OPTION>LAPIS</OPTION>";
echo "<OPTION>OPAL-A</OPTION>";
echo "<OPTION>OPAL-B</OPTION>";
echo "<OPTION>OPAL-C</OPTION>";
echo "<OPTION>OPAL-D</OPTION>";
echo "<OPTION>PEARL</OPTION>";
echo "<OPTION>RUBY</OPTION>";
echo "<OPTION>SAPPHIRE</OPTION>";
echo "<OPTION>TOPAZ</OPTION>";
echo "<OPTION>ZIRCON-A</OPTION>";
echo "<OPTION>ZIRCON-B</OPTION>";
echo "<OPTION>ZIRCON-C</OPTION>";
echo "</SELECT><BR><BR><BR>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN1 VALUE='AGATE'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN2 VALUE='BERYL'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN3 VALUE='CORAL'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN4 VALUE='DIAMOND'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN5 VALUE='EMERALD'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN6 VALUE='GARNET-A'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN7 VALUE='GARNET-B'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN8 VALUE='GARNET-C'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN9 VALUE='JADE'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN10 VALUE='LAPIS'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN11 VALUE='OPAL-A'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN12 VALUE='OPAL-B'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN13 VALUE='OPAL-C'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN14 VALUE='OPAL-D'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN15 VALUE='PEARL'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN16 VALUE='RUBY'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN17 VALUE='SAPPHIRE'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN18 VALUE='TOPAZ'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN19 VALUE='ZIRCON-A'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN20 VALUE='ZIRCON-B'>";
echo "<INPUT TYPE=HIDDEN NAME=HIDDEN21 VALUE='ZIRCON-C'>";

echo "NAME:";
echo "<INPUT TYPE='TEXT' NAME='name' onBlur='validate_name()'><br><br>";
echo "E-mail:";
echo "<INPUT TYPE='TEXT' NAME='email' onBlur='validate_email()'><br><br>";
echo "PASSWORD:";
echo "<INPUT TYPE='password' NAME='pass' onBlur='validate_password()'><br><br>";
echo "STATE:";
echo "<INPUT TYPE='text' NAME='state' onBlur='validate_state()'><br><br>";
echo "CITY:";
echo "<INPUT TYPE='text' NAME='city' onBlur='validate_city()'><br><br>";
echo "ROLL NUMBER:";
echo "<INPUT TYPE='text' NAME='roll' onBlur='validate_roll()'><br><br>";

echo "<font color='green'><b>SELECT YOUR BATCH</b></font><BR><BR><BR>";

echo "<INPUT TYPE=radio  name='batch' VALUE='1st YEAR'>1st YEAR";
echo "<INPUT TYPE=radio  name='batch' VALUE='2nd YEAR'>2nd YEAR";
echo "<INPUT TYPE=radio  name='batch' VALUE='3rd YEAR'>3rd YEAR";
echo "<INPUT TYPE=radio  name='batch' VALUE='4th YEAR'>4th YEAR";
echo "<INPUT TYPE=radio  name='batch' VALUE='MTECH'>MTECH";
echo "<br><br>";
echo "<table border=2>";
echo "<tr>";
echo "<td><input type='text' name='year' value='2011'></td>";
echo "<td><input type='text' name='month' value='mm'></td>";
echo "<td><input type='text' name='day' value='dd'></td>";
echo "</tr>";
echo "</table>";
echo "<INPUT TYPE=SUBMIT name=SUBMIT VALUE=ENTER onClick='check()'>";

echo "</FORM>";
 