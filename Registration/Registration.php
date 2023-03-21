<?php
$msg="";
if (isset($_POST['upload'])){
$con = mysqli_connect("localhost","root","","registration");


$text =$_POST['firstname'];
$text1=$_POST['lastname'];
$sql="INSERT INTO registration (username , password) VALUES ('$text','$text1')";

mysqli_query($con,$sql);

}
?>

<html>
<body>

<form action="Registration.php" method="post" enctype="multipart/form-data">
Firstname: <input type="text" name="firstname" />
Lastname: <input type="text" name="lastname" />

<input type="submit" name="upload" id="upload" value="upload"/>
</form>

</body>
</html>