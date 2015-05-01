<!DOCTYPE HTML>
<html>
	<head>
		<title>Dancer List</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="dancer.js"></script>

	</head>

	<body>
		<form>
			<select id="dancers" name="dancer">
			<?php $sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa");
				  $query = "SELECT * FROM dancers";
				  $result = mysqli_query($sql_link, $query);
			 ?>

				<?php while ($row = mysqli_fetch_assoc($result)):?>
					<option value="<?php echo $row['id']?>"><?php echo $row['first_name'];?></option>
				<?php endwhile;?>	
			</select>
			<div id="spot"></div>
		</form>

	</body>

</html>