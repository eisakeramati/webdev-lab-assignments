
<?php
$xml=simplexml_load_file("http://199.195.194.92:2199/rpc/meyima03/streaminfo.get?x=1");
$x2 = $xml->data;
$x3 = $x2->item;
$x4 = $x3->track;
echo "<head>";
echo "<meta http-equiv='refresh' content='10'>";
echo "</head>";
echo "<body>";
echo "<div style='border-radius: 5px; border-style: solid; font-family: 'Source Sans Pro', sans-serif; text-align: center; background-color: #F0E68CCC; width: 700px; margin-left: auto; margin-right: auto;'>";
echo "<h2> Hawaiian Music </h2>";
echo $x4->artist . "<br>";
echo $x4->album . "<br>";
echo $x4->title . "<br>";
echo "<img src=";
echo $x4->imageurl;
echo " style='width: 20%;height: 20%;'>";
echo "</div>";
echo "</body>";
?>
