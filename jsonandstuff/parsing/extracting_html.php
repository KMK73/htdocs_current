<?php
include_once('lib/simple_html_dom.php');

echo file_get_html('http://www.google.com/')->plaintext;
?>