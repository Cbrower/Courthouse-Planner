<?php
Include("../Common/NavPanel.php");
Include("../Common/MySQLHelpers.php");
?>
<html>
	<head>
		<div class="pagetitle">
			<h1>Courtroom Planner</h1>
		</div>
		<link rel="stylesheet" href="../Styles/Navbar.css">
	</head>
	<?php
		navPanel("../");
	?>
	<h2>Cancel Appointment</h2>
	<form action="DeleteAppointment.php" method="post">
		<label for="dapp_id">Appt ID:</label>
		<select name="dapp_id" id="dapp_id">
			<option value="none"></option>
			<?php
				$ID_COL = "apt_id";
				$mysqli = connectToDatabase();
				$id_res = $mysqli->query("Select " . $ID_COL . " FROM Appointment");
				if (!$id_res) {
					die("Query to show id from table failed");
				}
				foreach ($id_res as $row) {
					echo "<option value=\"" . $row[$ID_COL] . "\">" . $row[$ID_COL] . "</option>";
				}
				mysqli_close($mysqli);
			?>
			<input type="submit" name="delete" value="Delete">
		</select>
	</form>
</html>
