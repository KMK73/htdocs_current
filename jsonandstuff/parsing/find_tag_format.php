<!DOCTYPE HTML>
<html>
	<?php
		include_once('lib/simple_html_dom.php');
	?>
	<head>
		<title>Imgur Front Page</title>
	</head>

	<body>
<?php $imgur_front_page_html = file_get_html('http://www.imgur.com'); ?>

	<div>
		<?php foreach($imgur_front_page_html->find('img') as $image):?>
			<img src='<?php echo $image->src;?>'/>
		<?php endforeach;?>	
	</div>


	</body>

</html>