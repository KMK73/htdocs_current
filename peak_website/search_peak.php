
	<?php
		error_reporting(E_ALL);

		$sql_link = new mysqli("localhost", "peak_360", "admin", "peak_360");

		$query = "";
		if ($_GET) {
			if($_GET['wod_date']) {

				$wod_date = mysqli_escape_string ($sql_link, $_GET['wod_date']);
				$integer_date = strtotime($wod_date); //integer date format
				$formatted_date = date("Y-m-d", $integer_date);


				$query =sprintf("SELECT workout_name, wod_type, description FROM workouts WHERE wod_date = '%s'" , $formatted_date);
				// echo $query;
			} else {

				$query = "SELECT * FROM workouts";

			}
		}
			$result = mysqli_query($sql_link, $query);
			$json = array();
				
			foreach($result as $row) {
				$json[] = array(
					"workout_name" => $row['workout_name'], 
					"wod_type" => $row['wod_type'], 
					"description" => $row['description']);
			}
			echo json_encode($json);
	?>
