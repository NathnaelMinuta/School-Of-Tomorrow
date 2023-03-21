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

$sql = "SELECT id, description, fullname FROM hello";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Description</th><th>Full Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["description"]."</td><td> ".$row["fullname"]."</td></tr>";
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