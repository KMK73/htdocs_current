<!DOCTYPE HTML>
<html>
	<head>
		<title>Star Wars Character Generator</title>
	</head>
			<?php 
				$species_file = file_get_contents("http://swapi.co/api/species/?format=json");
				$species_json = json_decode($species_file);
				$species = $species_json->results;

				$planets_file = file_get_contents("http://swapi.co/api/planets/?format=json");
				$planets_json = json_decode($planets_file);
				$planets = $planets_json->results;
			?>

	<body>
		<div>
			<form action="character.php" method="POST">
				<h1>Your Name</h1>
	
				<input type="text" name="character_name" value=""/>

				<h1>Species</h1>

					<select name="species">
						<?php foreach($species as $spec):?>
							<option value="<?php echo $spec->url;?>">
								<?php echo $spec->name; ?>
							</option>
							
						<?php endforeach;?>
					</select>

				<h1>Home Planet</h1>

				<select name="planet">
					<?php foreach($planets as $planet):?>
						<option value="<?php echo $planet->url;?>">
							<?php echo $planet->name; ?>
						</option>
						
					<?php endforeach;?>
				</select>

				<input type="submit" value="Create"/>

			</form>
		</div>



	</body>

<html>