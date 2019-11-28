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

$sql = "CREATE TABLE photos (
subject VARCHAR(30) NOT NULL,
location VARCHAR(30) NOT NULL,
date_taken VARCHAR(50),
url VARCHAR(60) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table photos created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
