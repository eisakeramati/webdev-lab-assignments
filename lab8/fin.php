<?php

$xml=simplexml_load_file("http://199.195.194.92:2199/rpc/meyima03/streaminfo.get?x=1");
$x2 = $xml->data;
$x3 = $x2->item;
$x4 = $x3->track;

$response = array();
$data = array();
$item = array();
$track = array();

$artist = $x4->artist;
$album = $x4->album;
$imageurl = $x4->imageurl;
$title = $x4->title;
$track['artist'] = $artist;
$track['album'] = $album;
$track['title'] = $title;
$track['imageurl'] = $imageurl;
$item['track'] = $track;
$data['item'] = $item;
$response['data'] = $data;
$fp = fopen('results.json', 'w');
if ( !$fp ) {
        echo "no file";
      }
fwrite($fp, json_encode($response));
fclose($fp);
header('Location: /~ekeramat/json.php');

?>
