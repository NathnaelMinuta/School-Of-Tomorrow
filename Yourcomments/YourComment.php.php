<?php
$msg="";
if (isset($_POST['upload'])){
$con = mysqli_connect("localhost","root","","hello");


$text =$_POST['description'];
$text1=$_POST['fullname'];
$sql="INSERT INTO hello(description,fullname) VALUES ('$text','$text1')";

mysqli_query($con,$sql);

}
?>
<html>
<head><title>Your Comment</title>
<link rel="stylesheet" type="text/css" href="Your Comment.css">
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Are you sure you want to submit your comment?");
if (r==true)
  {
  alert("Your comment have been submited successfuly!");
  }
else
  {
  alert("You pressed Cancel!");
  }
}
</script>
</head>
<body bgcolor="lightcyan">
<Center><form action="Your Comment.php" method="post" enctype="multipart/form-data">
<h1>Write your comment:</h1>
<br>
<textarea rows="20" cols="100" name="description" placeholder="Enter your comment">
</textarea>
<br>
Full Name: <input type="text" name="fullname" />
<input type="submit" name="upload" id="upload" value="upload" onclick="show_confirm()"/>
</form></Center>
</body>

</html>