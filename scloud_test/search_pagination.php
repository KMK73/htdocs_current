<?php
require_once 'Services/Soundcloud.php';
error_reporting(E_ALL);
// create a client object with your app credentials
$client = new Services_Soundcloud('53a4817090ccd5cd69a6a032a1d11e42');

$page_size = 100;

// get first 100 tracks
$tracks = $client->get('tracks', array('q' => $_POST["track_title"]));
$tracks_array = json_decode($client->get('tracks', array(
    'order' => 'created_at',
    'limit' => $page_size)
));

// start paging through results, 100 at a time
$tracks_array = array_merge($tracks, json_decode($client->get('tracks', array(
    'order' => 'created_at',
    'limit' => $page_size,
    'linked_partitioning' => 1
))));

foreach($tracks_array as $tracks){

	echo "<h1>".$tracks->title."</h1>";
	$tracks_url = "https://w.soundcloud.com/player/?url=" . $tracks->uri;

	echo "<iframe width='75%'' height='166' scrolling='no' fram	eborder='no' src='". $tracks_url ."&color=0066cc' style='width: 75%; height: 166px;'></iframe>";	
}
?>