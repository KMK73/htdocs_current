<!DOCTYPE HTML>
<html>
	<head>
		<title>New Star Wars Character</title>
	</head>
			<?php 
			
				$character_name = $_POST['character_name'];

				$species_url = $_POST['species'];
				$planet_url = $_POST['planet'];

				$species_file = file_get_contents($species_url . "?format=json");
				$species_info = json_decode($species_file);

				$planets_file = file_get_contents($planet_url . "?format=json");
				$planet_info  = json_decode($planets_file);
			?>

	<body>
		<div>
			<p>Your name is <?php echo $character_name;?> and you are a <?php echo $species_info->name?>.
			Your average life span is <?php echo $species_info->average_lifespan;?>.</p>

			<p>You were born on <?php echo $planet_info->name;?>. It's climate is <?php echo $planet_info->climate;?>
			with a population of <?php echo $planet_info->population;?>.</p>

		</div>



	</body>

<html>