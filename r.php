<html>
<head>
<title>about our site</title>
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
var str=document.form1.n1text.value
if(IsBlank(str))
{
alert("name field cannot be empty")
return false
}
return true
}
function validate_tadd()
{
var str=document.form1.n3text.value
if(IsBlank(str))
{
alert("temporary address field cannot be empty")
return false
}
return true
}
function validate_padd()
{
var str=document.form1.n4text.value
if(IsBlank(str))
{
alert("permanent address field cannot be empty")
return false
}
return true
}
function validate_email()
{
var str=document.form1.n7text.value
if(IsBlank(str))
{
alert("email field cannot be empty")
return false
}
return true
}
function validate_password()
{
var str=document.form1.n2text.value
if(IsBlank(str))
{
alert("password field cannot be empty")
return false
}
return true
}

function validate_institute()
{
var str=document.form1.n5text.value
if(IsBlank(str))
{
alert("institute field cannot be empty")
return false
}
return true
}
function validate_department()
{
var str=document.form1.n6text.value
if(IsBlank(str))
{
alert("department field cannot be empty")
return false
}
return true
}
function validate_contact()
{
var str=document.form1.n8text.value
if(IsBlank(str))
{
alert("contact field cannot be empty")
return false
}
return true
}
function radio(frm)
{
message=""
for (var i = 0; i < frm.n10text.length; i++)
    {
     if (frm.n10text[i].checked)
	 message+=frm.n10text[i].value
    }
		 if(message=="")
		 {
		    alert("select any")
            return false
		 }

		 return true
}
function check()
{
if(!validate_name(document.form1.n1text.value))
{
document.write("error")
return false
}
if(!validate_tadd(document.form1.n3text.value))
{
document.write("error")
return false
}
if(!validate_padd(document.form1.n4text.value))
{
document.write("error")
return false
}
if(!validate_email(document.form1.n7text.value))
{
document.write("error")
return false
}
if(!validate_password(document.form1.n2text.value))
{
document.write("error")
return false
}
if(!validate_institute(document.form1.n5text.value))
{
document.write("error")
return false
}
if(!validate_department(document.form1.n6text.value))
{
document.write("error")
return false
}
if(!validate_contact(document.form1.n8text.value))
{
document.write("error")
return false
}
if(!radio(document.form1.n10text.value))
{
document.write("error")
return false
}
}
</script>
</head>
<body>

<table width=100% height=100% cellpadding=0 cellspacing=0>
<tr>

<td bgcolor="#CCaa00" width=50% height="100%">
<?php
$date_array = getdate(); // no argument passed so today's date will be used
 print "<h1><div align='right'>Today's date: $date_array[mday]/$date_array[mon]/$date_array[year]<p></center></div>";
$var1="NAME";
$var2="PASSWORD";
$var3="TEMPORARY ADDRESS";
$var4="PERMANENT ADDRESS";
$var5="INSTITUTE";
$var6="DEPARTMENT";
$var7="EMAIL ADDRESS";
$var8="CONTACT NUMBER";
$var9="LIKES AND INTERESTS";
$var10="HOW DID YOU COME TO KNOW ABOUT BLOGSPOT";
echo "<div align=right>";
echo "<h1>ENTER YOUR DETAILS</h1><br><h5>entries with '*' are mandatory<h5><br><BR>";
echo "<FORM  name='form1' METHOD=GET ACTION='re.php'>";
echo "*NAME:";
echo "<input type='text' name='n1text' onBlur='validate_name()'><br><BR><BR>";

echo "*TEMPORARY ADDRESS:";
echo "<input type='text' name='n3text' onBlur='validate_tadd()'><br><BR><BR>";
echo "*PERMANENT ADDRESS:";
echo "<input type='text' name='n4text' onBlur='validate_padd()'><br><BR><BR>";
echo "*INSTITUTE:";
echo "<input type='text' name='n5text' onBlur='validate_institute()'><br><BR><BR>";
echo "*DEPARTMENT:";
echo "<input type='text' name='n6text'  onBlur='validate_department()'><br><BR><BR>";
echo "*EMAIL ADDRESS:";
echo "<input type='text' name='n7text'  onBlur='validate_email()'><br><BR><BR>";
echo "*PASSWORD:";
echo "<input type='password' name='n2text'  onBlur='validate_password()'><br><BR><BR>";
echo "CONTACT NUMBER:";
echo "<input type='text' name='n8text'  onBlur='validate_contact()'><br><BR><BR>";
echo "LIKES AND INTERESTS:";
echo "<textarea rows='5' cols='25' name='n9text'>";
echo "<br><BR><BR>";
echo "</textarea><br><br><br>";
echo "*HOW DID YOU COME TO KNOW ABOUT BLOGSPOT:<BR>";
echo "<input type='radio' name='n10text' value='friends'  onBlur='radio()'>FRIENDS<br>
      <input type='radio' name='n10text' value='newspaper' onBlur='radio()'>NEWSPAPER<br>
      <input type='radio' name='n10text' value='others' onBlur='radio()'>OTHERS<br><br><br>";
echo "*<h1>Select your permission:</h1><BR>";
echo "<input type='radio' name='n11text' value='user'>USER<br>
      <input type='radio' name='n11text' value='administrator'>ADMINISTRATOR<br><br><br>";
	  
echo "<input type=submit name=submit value='SUBMIT YOUR DETAILS' onClick='check()'>";
echo "</form>";
echo "</div>";

?>
</td>
<td bgcolor="orange" width=50% height="100%"><h1><center>INTERESTING FACTS ABOUT BLOGS AND ITS ORIGIN</center></h1><br><h1>Things you may not know about Blogs</h1><br>
•	A new blog is created somewhere in the world every half a second. That goes on to prove how popular blogging is on the Internet.<br> 
•	Blogs have influence. Surveys suggest that lot of Internet users prefer reading reviews published on blogs before making a purchase.<br> 
•	You don't need to spend a single penny to publish a blog. All you need is a computer and an Internet connection. You may even write blogs from a mobile phone. <br>
•	You don't need any technical skills to create a blog. If you know how to write an email on the computer, you are good enough to write a blog.<br> 
•	If you are worried about sharing your details on the Internet, you can create personal blog that can only be read by your close friends and family members. <br>
•	You can put advertising on your blogs and make some decent income. There are people who have quit their regular jobs to become full-time bloggers. <br>
•	You don't need to know English to write a blog. There are free tools available to help you publish blogs in any <br>Indian language including Hindi, Urdu, Punjabi, Bangla, Tamil, etc.<br> 
•	If you like clicking pictures with your digital camera, you can join the growing community of photo bloggers in the world who display pictures on their blogs.<br> 
•	44% of all bloggers are parents, 70% have college degrees, two-thirds are male and 50% of them lie in the 18-34 age group. <br>
•	You'll find an audience if you write what you’re passionate about. - Mark Frauenfelder <br><br></h2>
<h1>5 Reasons Why You Must Create a Blog</h1><br>
1. Share your thoughts and opinions with the world<br>
Got something to say about the deteriorating political system of India? Or the performance of Indian cricket team?<br> Or have an opinion on a topic like abortion or child marriages?<br> Well, blogs are a perfect place to pen your thoughts online.<br>
2. Preserve memories for great-grand children<br>
Anything you blog, be it a story or a photo or a video clip, is saved forever on the Internet. Now imagine your great grand-children and their children reading your blog when they grow up. They'll almost feel like having a conversation with you. <br>
3. Show your expertise, help people or even get a new job
A Blog instantly tells the world how knowledgeable you are on a particular topic and establishes you as an expert. You can also use your skills to help people online through the blog. Some companies even do head-hunting through blogs.<br> 
4. Stay connected with friends and family
If you have friends and family members spread in different parts of the world, a blog is the best way to keep in touch with everyone. For instance,<br> if there's a family function at your home, you can upload the pictures to your blog and others can see view and comment on them instantly.<br> No need for emails.<br>
5. Make money from your blog
It's true that you can make a comfortable living from your blog provided you write consistently and work hard. Blogs won't make you rich overnight but if you follow some simple rules, chances are that blogging will definitely help you pay some of the bills.<br>
<br><br><h1>Interesting Facts about Bloggers</h1> <br>
•	Bloggers with advertising invest significantly more money in their blogs than bloggers who do not accept advertising.<br> 
•	Bloggers are generally the first to learn about new web technologies and applications, such as RSS and Twitter.<br> 
•	Bloggers are tremendously sophisticated in leveraging available tools to make their blogs more robust or easily updatable.<br> 
•	While the majority of bloggers manage their blogs solo, among professional and corporate bloggers, one in ten pay staff to contribute to their blogs. <br>
•	One in five bloggers don't think that newspapers will survive the next ten years.<br> Half believe that blogs will be a primary source for news and entertainment in the next five years.<br> 
</td>
</table>
</body>
</html>	  
