<?php
$msg="";
if (isset($_POST['upload'])){
$con = mysqli_connect("localhost","root","","registration");


$text =$_POST['fname'];
$text1=$_POST['faname'];
$text2=$_POST['lname'];
$text3=$_POST['bday'];
$text4=$_POST['contact'];
$text5=$_POST['email'];
$text6=$_POST['password'];
$text7=$_POST['news'];
$text7=$_POST['image'];

$sql="INSERT INTO Register(fname,faname,lname,bday,contact,email,password,news,image) VALUES ('$text','$text1','$text2','$text3','$text4','$text5','$text6','$text7','$text8')";

mysqli_query($con,$sql);

}
?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Comments.css">
<script type="text/javascript">
function validateform()
{
var b=document.forms["myform"]["email"].value
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
var x=document.forms["myform"]["fname"].value
var x=document.forms["myform"]["faname"].value
var x=document.forms["myform"]["lname"].value
var x=document.forms["myform"]["bday"].value
var x=document.forms["myform"]["contact"].value
var d=document.forms["myform"]["password"].value
if (x==null || x=="" )
  {
  alert("All fields must be filled out");
  return false;
  }

if (d==null || d=="" )
  {
  alert("You should fill your password");
  return false;
  }

 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>


</head>

<body bgcolor="lightcyan">
<u><h1>Students' Registration Form</h1></u>


<form name="myform" action="Registration1.php" onsubmit="return validateform()" method="post" enctype="multipart/form-data">
First Name:<input type="text" name="fname">
<br>
Father Name:<input type="text" name="faname">
<br>
Last Name:<input type="text" name="lname">
<br>
Email:<input type="text" name="email">
<br>
Password:<input type="password" name="password">
<br>
Birthday: <input type="date" name="bday">
<br>
Contact:<input type="Number" name="contact">
<br>
Image:<input type="file" name="image">
<br>
<select>
<option>-18</option>
<option>+18</option>
</select>
<select>
<Option>Male</Option>
<Option>Female</Option>
</Select>
<br>
<br>
<br>
<div style="color:navy; border-style:solid; border-width:1px; border-color:gray; background-color:gray; width:300px; height:350px;">
<center><u><h1>Type of Subject</h1></center></u>
<input type="checkbox" name="news" value="Physics">Physics<br>
<input type="checkbox" name="news" value="Maths">Maths<br>
<input type="checkbox" name="news" value="Chemistry">Chemistry<br>
<input type="checkbox" name="news" value="Biology">Biology<br>
<input type="checkbox" name="news" value="English">English<br>
<input type="checkbox" name="news" value="Amharic">Amharic<br>
<input type="checkbox" name="news" value="TD">TD<br>
<input type="checkbox" name="news" value="ICT">ICT<br>
<input type="checkbox" name="news" value="HPE">HPE<br>
</div>
<br>

<input type="submit" name="upload" id="upload" value="upload" onclick="show_confirm()"/>
</form>


</body>




</html>