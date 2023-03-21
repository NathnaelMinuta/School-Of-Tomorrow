<?php
$msg="";
if (isset($_POST['upload'])){
$con = mysqli_connect("localhost","root","","test");


$text =$_POST['firstname'];
$text1=$_POST['lastname'];
$sql="INSERT INTO log (username , password) VALUES ('$text','$text1')";

mysqli_query($con,$sql);

}
?>

<html>
<body>

<form action="insert.php" method="post" enctype="multipart/form-data">
Firstname: <input type="text" name="firstname" />
Lastname: <input type="text" name="lastname" />

<input type="submit" name="upload" id="upload" value="upload"/>
</form>

</body>
</html>