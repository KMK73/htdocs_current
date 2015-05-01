<!DOCTYPE HTML>
<html>
	<head>
		<title>WOD CREATOR DATABASE</title>
	</head>

	<body>

<!-- 		create a form for coaches to create workouts
 -->	<form action="wod_register.php" method="POST">
			<h1>Create your WOD here</h1>
			<p>WOD Name</p>
			<input type="text" name="name"/>
			<p>WOD Type</p>
			<select name="wod_type">
			  <option value="timed">Timed</option>
			  <option value="not_timed">Not Timed</option>
			  <option value="reps">Number of Reps</option>
			  <option value="rounds">Number of Rounds</option>
			</select>
			<p>Description</p>
			<input type="text" name="description"/>
			<p>Date</p>

			<input type="date" name="wod_date">
			<input type="submit" value="Create"/>
		</form>


	</body>

</html>