<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hello";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, fullname, age, grade, email, contact, sex FROM hello";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Full name</th><th>Age</th><th>Grade</th><th>Email</th><th>Contact</th><th>SEX</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["fullname"]."</td><td> ".$row["age"]."</td><td> ".$row["grade"]."</td><td> ".$row["email"]."</td><td> ".$row["contact"]."</td><td> ".$row["sex"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Display.css">
</head>
<body bgcolor="lightcyan">
</body>
</html>