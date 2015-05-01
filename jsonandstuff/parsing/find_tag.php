<?php
include_once('lib/simple_html_dom.php');

$imgur_front_page_html = file_get_html('http://www.imgur.com');

foreach($imgur_front_page_html->find('img') as $image) {
	echo $image->src;
} 

?>