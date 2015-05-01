<?php
require_once 'Services/Soundcloud.php';
error_reporting(E_ALL);
// create a client object with your app credentials
$client = new Services_Soundcloud('53a4817090ccd5cd69a6a032a1d11e42');

// get first 5 tracks
$page_size = 5;
$tracks = $client->get('tracks', array('q' => $_POST["track_title"], 'order' => 'created_at', 'limit' => $page_size));

$tracks_array = json_decode($tracks);

foreach($tracks_array as $track) {

	echo "<h1>".$track->title."</h1>";
	$track_url = "https://w.soundcloud.com/player/?url=" . $track->uri;

	echo "<iframe width='75%'' height='166' scrolling='no' fram	eborder='no' src='". $track_url ."&color=0066cc' style='width: 75%; height: 166px;'></iframe>";	
}
?>
