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
			$cmd = "SELECT A.filing_fee, A.crime_code, A.case_id, R.court_name, R.room_num, ";
			$cmd = $cmd . "CONCAT(P1.first_name, ' ', P1.last_name) as defendent, ";
			$cmd = $cmd . "CONCAT(P2.first_name, ' ', P2.last_name) as defence_attorney, ";
			$cmd = $cmd . "CONCAT(P3.first_name, ' ', P3.last_name) as prosecutor, ";
			$cmd = $cmd . "CONCAT(P4.first_name, ' ', P4.last_name) as judge FROM Appointment A ";
			$cmd = $cmd . "INNER JOIN CourtRoom R ON R.room_id = A.room_id ";
			$cmd = $cmd . "INNER JOIN CourtCase C ON C.case_id = A.case_id ";
			$cmd = $cmd . "INNER JOIN Person P1 ON P1.pid = C.def_id ";
			$cmd = $cmd . "INNER JOIN Person P2 ON P2.pid = C.def_att_id ";
			$cmd = $cmd . "INNER JOIN Person P3 ON P3.pid = C.pros_id ";
			$cmd = $cmd . "INNER JOIN Person P4 ON P4.pid = C.jid ";
			$cmd = $cmd . "WHERE apt_id = " . $_POST["apt_id"];
			$result = $mysqli->query($cmd);
			if (!$result) {
				echo "<h3>No appointment exists with id: " . $_POST["apt_id"] . "<h3>";
			} else {
				// Display the appointment information
				$row = $result->fetch_assoc();
				echo "<table>";
				echo "<tr><td>Appointment ID:</td> <td>" . $_POST["apt_id"] . "</td></tr>";
				echo "<tr><td>Location:</td> <td>" . $row["court_name"] . "</td></tr>";
				echo "<tr><td>Room Number:</td> <td>" . $row["room_num"] . "</td></tr>";
				echo "<tr><td>Defendent:</td> <td>" . $row["defendent"] . "</td></tr>";
				echo "<tr><td>Defence Attorney:</td> <td>" . $row["defence_attorney"] . "</td></tr>";
				echo "<tr><td>Prosecutor:</td> <td>" . $row["prosecutor"] . "</td></tr>";
				echo "<tr><td>Judge:</td> <td>" . $row["judge"] . "</td></tr>";
				echo "</table>";

				// Display charges information
			}
		} else {
			// Create prompt user for appointment id
			$cmd = "SELECT * FROM Appointment";
			$result = $mysqli->query($cmd);
			echo "<form method=\"post\">";
			echo "<label for=\"apt_id\">Appt ID:</label>";
			echo "<select name=\"apt_id\" id=\"apt_id\">";
			echo "<option value=\"none\"></option>";
			foreach ($result as $row) {
				echo "<option value=\"" . $row["apt_id"] . "\">" . $row["apt_id"] . "</option>";
			}
			echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">";
			echo "</select>";
			echo "</form>";
		}
	?>
</html>
