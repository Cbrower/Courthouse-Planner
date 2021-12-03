<?php
Include("Common/NavPanel.php");
Include("Common/MySQLHelpers.php");
?>
<html>
	<head>
		<div class="pagetitle">
			<h1>Courtroom Planner</h1>
		</div>
		<link rel="stylesheet" href="Styles/Navbar.css">
	</head>
	<?php
		navPanel("./");
		$mysqli = connectToDatabase();
		if (array_key_exists("apt_id", $_POST)) {
			$cmd = "SELECT * FROM Appointment WHERE apt_id = " . $_POST["apt_id"];
			$result = $mysqli->query($cmd);
			if (!$result) {
				echo "<h3>No appointment exists with id: " . $_POST["apt_id"] . "<h3>";
			} else {
				// Display the appointment information
				echo "<h3>Appointment id: " . $_POST["apt_id"] . "<h3>";
			}
		} else {
			// Create prompt user for appointment id
			echo "<form method=\"post\">";
			echo "<label for=\"apt_id\">Appt ID:</label>";
			echo "<select name=\"apt_id\" id=\"apt_id\">";
			echo "<option value=\"none\"></option>";
			foreach ($result as $row) {
				echo "<option value=\"" . $row[$ID_COL] . "\">" . $row[$ID_COL] . "</option>";
			}
			echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">";
			echo "</select>";
			echo "</form>";
		}
	?>
</html>
