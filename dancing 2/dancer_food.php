<?php
		$sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa"); 

		$dancer_id = $_GET['id'];

		$query = "SELECT * FROM food JOIN dancer_food ON dancer_food.food_id = food.id WHERE dancer_food.dancer_id = " . $dancer_id;

		$result = mysqli_query($sql_link, $query);

		$food = array();

//		foreach($result as $row) {
		while ($row = mysqli_fetch_assoc($result)) {
			$new_food = array("food" => $row['name'], "id" => $row['food_id']);
			$food[] = $new_food;
			}

			echo json_encode($food);
		?>
