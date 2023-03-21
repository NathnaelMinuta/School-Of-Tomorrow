<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, fname, faname,lname, bday, contact, email, password, news FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Firstname</th><th>Fathername</th><th>Lastname</th><th>Birthday</th><th>Contact</th><th>Email</th><th>Password</th><th>Course</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td> ".$row["faname"]."</td><td> ".$row["lname"]."</td><td> ".$row["bday"]."</td><td> ".$row["contact"]."</td><td> ".$row["email"]."</td><td> ".$row["password"]."</td><td> ".$row["news"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Display1.css">
</head>
<body bgcolor="lightcyan">
</body>
</html>