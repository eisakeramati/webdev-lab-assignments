<?php

$string = file_get_contents("results.json");

$json_a = json_decode($string, true);

$a1 = $json_a['data'];

$a3 = $a1['item'];
$a4 = $a3['track'];


echo "<body>";
echo "<div style='border-radius: 5px; border-style: solid; font-family: sans-serif; text-align: center; background-color: #DB7093; width: 700px; margin-left: auto; margin-right: auto;'>";
echo "<h2> Hawaiian Music with JSON</h2>";
echo $a4['artist'][0] . "<br>";
echo  $a4['album'][0]  . "<br>";
echo  $a4['title'][0] . "<br>";
echo "<img src=";
echo  $a4['imageurl'][0] ;
echo " style='width: 20%;height: 20%;'>";
echo "</div>";
echo "</body>";

?>



<div id="imm" class="container">
    <img src="" alt="">
<div id = 'page5' style="margin-top:150px; border-top:solid;">

</div>
   <div id="page6">

   </div>
   <div id="page7" style="background-color:#DCDCDC; margin-right:1360px; height:102.6%; margin-top:-715px; border-right:solid;">

   </div>

</div>
