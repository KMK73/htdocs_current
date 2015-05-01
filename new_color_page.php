<html>
	<head>
		<?php 
		error_reporting(E_ALL);

		
		$selected_color = $_POST['selected_color'];
		
		?>
		<title>Welcome</title>
		<style>			
			  body {
			  		background-color:<?php echo $selected_color; ?>
			  		}
		</style>
	</head>

	<body>
		<h1>Pick a Color</h1>
	
			<form  action = "new_color_page.php" method="POST">
				<select name="selected_color">
					<option value="#FFFFFF">White</option>
					<option value="#000000">Black</option>
					<option value="#FF0000">Red</option>
				</select>
				<input type="submit" value="Change Color">
			</form>
	
	</body>
</html>