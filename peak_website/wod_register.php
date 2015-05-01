<DOCTYPE HTML>
	<head>
		<title>Peak 360 WOD Creator</title>
	</head>

<body>
		<?php

		if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		?>
			
		<?php if($_POST): ?>

		<?php 
				$sql_link = new mysqli("localhost", "peak_360", "admin", "peak_360");

				$workout_name = mysqli_escape_string($sql_link, $_POST['name']);
				$wod_type = mysqli_escape_string($sql_link, $_POST['wod_type']);
				$description = mysqli_escape_string($sql_link, $_POST['description']);
				$integer_date = strtotime($_POST['wod_date']); //integer date format
//				$wod_date = mysqli_escape_string($sql_link, $_POST['wod_date']);						
//2015-03-17
				$wod_date = date("Y-m-d", $integer_date);
				$query = sprintf("INSERT INTO workouts (workout_name, wod_type, description, wod_date) VALUES ('%s', '%s', '%s', '%s')", 
				$workout_name, $wod_type, $description, $wod_date);

				$result = mysqli_query($sql_link, $query);
				echo $query;
		?>

	<h1>WOD <?php 
			$dateToDisplay = date("F j, Y, g:i a", $integer_date);
			echo "Entered a workout for " . $_POST['name'] . " for " . $dateToDisplay;
			?>
			</h1>


	<?php else:?>

	<h1>No WOD Provided</h1>

	<?php endif;?>
