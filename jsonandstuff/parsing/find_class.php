<!DOCTYPE HTML>
<html>
	<?php
		include_once('lib/simple_html_dom.php');
		$front_page = file_get_html('http://www.reddit.com');
	?>
	<head>
		<title>Reddit Front Page Headlines</title>
	</head>

	<body>

		<div>
			<?php foreach($front_page->find('p.title') as $p):?>
				<p>
					<?php echo $p->plaintext;?>

				</p>
			<?php endforeach;?>	
		</div>


	</body>

</html>