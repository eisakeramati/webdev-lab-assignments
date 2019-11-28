<?php
session_start();
if(isset($_SESSION['views']))
  $_SESSION['views'] = $_SESSION['views']+ 1;
else
  $_SESSION['views'] = 1;
echo "views = ". $_SESSION['views'];

echo "<div style='font-size:22px;'>";
echo "The result table:";
echo "</div>";
$num1 = $_POST['name'];
if ( $num1 > 12 )
  $num1 = 12;
if ( $num1 < 2 )
  $num1 = 2;
$num2 = $_POST['name2'];
if ( $num2 > 12 )
  $num2 = 12;
if ( $num2 < 2 )
  $num2 = 2;
echo "<table border=\"1\" align=\"center\">";
for ( $counter = 1; $counter <= $num1; $counter += 1) {
  echo "<tr>";
  for ( $counter2 = 1; $counter2 <= $num2; $counter2 += 1) {
    echo "<td>";
    echo $counter * $counter2;
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
