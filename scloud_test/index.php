<?php
require_once 'Services/Soundcloud.php';

// create a client object with your app credentials
$client = new Services_Soundcloud('53a4817090ccd5cd69a6a032a1d11e42');

// find all sounds of buskers licensed under 'creative commons share alike'
$tracks = $client->get('tracks', array('q' => 'buskers', 'license' => 'cc-by-sa'));

$users = $client->get('users',   array('q' => 'k'));
// var_dump($tracks);

$user_array = json_decode($users);

foreach($user_array as $user) {

	echo "<h1>".$user->username."</h1>";
	$user_url = "https://w.soundcloud.com/icon/?url=" . $user->permalink_url;
	echo "<iframe allowtransparency='true' scrolling='no' frameborder='no' src=" . $user_url . "&color=orange_white&size=32' style='width: 32px; height: 32px;'></iframe>";
}
?>