<html>
	<head>
		<?php 
			selected_color = $POST['color'];
		
		?>
		<title>Welcome</title>
		<style>			
			  body {
			  		background-color:<?php echo $selectedcolor; ?>
			  		}
		</style>
	</head>

	<body>
		<h1>Pick a Color</h1>
	
			<form method="POST">
				<select name="selected_color">
					<option value="#FFFFFF">White</option>
					<option value="#000000">Black</option>
					<option value="#FF0000">Red</option>
				</select>
				<input type="submit" value="Change Color">
			</form>
	
	</body>
</html>