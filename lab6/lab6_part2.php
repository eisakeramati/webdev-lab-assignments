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

$sql = "INSERT INTO photos (subject, location, date_taken, url)
VALUES ('st.lawrence market', 'downtown toronto', 'August 15', 'd1.jpg')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully 1";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO photos (subject, location, date_taken, url)
VALUES ('front st.', 'downtown toronto', 'August 16', 'd2.jpg')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully 2";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO photos (subject, location, date_taken, url)
VALUES ('church and front', 'downtown toronto', 'August 20', 'd3.jpg')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully 3";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO photos (subject, location, date_taken, url)
VALUES ('esplanade', 'downtown toronto', 'August 15', 'd4.jpg')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully 4";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO photos (subject, location, date_taken, url)
VALUES ('distilery district', 'downtown toronto', 'August 22', 'd5.jpg')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully 5";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
