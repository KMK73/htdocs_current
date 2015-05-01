<DOCTYPE HTML>
	<head>
		<title>RECORD YOUR WOD</title>
	</head>

<body>

	<form action ="record_wod.php" method="POST">
	<h1>Log your Workout</h1>
	
	<h3>Date of WOD</h3>
	<input type ="date" name="wod_date"/>

	<br/><input type= "submit" value = "Search"/>
	</form>

	<?php
error_reporting(E_ALL);
		
		if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}



		$sql_link = new mysqli("localhost", "peak_360", "admin", "peak_360");

		$query = "";

		if($_POST['wod_date']) {

			// $dateToDisplay = date(“F j, Y, g:i a”, $wod_date);
			$wod_date = mysqli_escape_string ($sql_link, $_POST['wod_date']);
			$integer_date = strtotime($wod_date); //integer date format
			$formatted_date = date("Y-m-d", $integer_date);


			$query =sprintf("SELECT workout_name, wod_type, description FROM workouts WHERE wod_date = '%s'" , $formatted_date);

		} else {
			$query = "SELECT workout_name FROM workouts";

		}

		$result = mysqli_query($sql_link, $query);
	?>

	<?php foreach ($result as $row): ?>

		<h4>Name: </h4><p><?php echo $row['workout_name'];?></p>
		<h4>Type: </h4><p><?php echo $row['wod_type'];?></p>
		<h4>Description: </h4><p><?php echo $row['description'];?></p>

	<?php endforeach;?>


</body>
</html>