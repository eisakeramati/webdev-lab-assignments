<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "ekeramat";
$password = "OrOrgil4";
$name = "ekeramat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $name);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT subject, location, date_taken, url FROM photos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<img src=";
      echo $row["url"];
      echo " width='300' height='300' style='margin-left:auto; margin-right:auto;'><div style='text-transform:uppercase;fontweight:
      400;position:relative;top:-1px;'>";
        echo "<br> ". $row["subject"]. " - ". $row["location"]. " - " . $row["date_taken"]. " - " .$row["url"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
