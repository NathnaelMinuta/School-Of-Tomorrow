<?php
$msg="";
if (isset($_POST['upload'])){
$con = mysqli_connect("localhost","root","","hello");


$text =$_POST['fullname'];
$text1=$_POST['age'];
$text2=$_POST['grade'];
$text3=$_POST['email'];
$text4=$_POST['contact'];
$text5=$_POST['sex'];
$sql="INSERT INTO hello (fullname,age,grade,email,contact,sex) VALUES ('$text','$text1','$text2','$text3','$text4','$text5')";

mysqli_query($con,$sql);

}
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="Comments.css">

<script type="text/javascript">
function validateform()
{
var b=document.forms["myform"]["email"].value
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
var x=document.forms["myform"]["fullname"].value
var x=document.forms["myform"]["age"].value
var x=document.forms["myform"]["grade"].value
var x=document.forms["myform"]["contact"].value
var x=document.forms["myform"]["sex"].value
if (x==null || x=="" )
  {
  alert("All fields must be filled out");
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
<body>
<u><h1>Students' Registration Form</h1></u>
<form action="Student's Registration.php" name="myform" onsubmit="return validateform()" method="post" enctype="multipart/form-data">
Full Name: <input type="text" name="fullname" />
<br/>
AGE: <input type="number" name="age" />
<br>
Grade:<input type="number" name="grade">
<br>
Email:<input type="text" name="email">
<br>
Contact:<input type="Number" name="contact">
<br>
<input type="radio" name="sex" value="male">Male
<br>
<input type="radio" name="sex" value="female">Female
<br>
<input type="submit" name="upload" id="upload" value="submit"/>
</form>
<h1><marquee direction="up">Thanks for Registering in School of Tomorrow!</marquee></h1>
</body>
</html>