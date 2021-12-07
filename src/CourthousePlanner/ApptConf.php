<?php
Include("Common/NavPanel.php");
Include("Common/MySQLHelpers.php");
?>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="Styles/Navbar.css">
		<link rel="stylesheet" href="Styles/Table.css">
	</head>
	<div id="wrapper">
	    <div id = "banner">

	    </div>
		<?php
			navPanel("./");
			$mysqli = connectToDatabase();
			if (array_key_exists("apt_id", $_POST)) {
				$cmd = "SELECT A.filing_fee, A.crime_code, A.case_id, R.court_name, A.apt_date, ";
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
					echo "<h3> Appointment Details: </h3>";
					$row = $result->fetch_assoc();
					echo "<div class=\"sqltable\">";
					echo "<table>";
					echo "<tr><td>Appointment ID:</td> <td>" . $_POST["apt_id"] . "</td></tr>";
					echo "<tr><td>Location:</td> <td>" . $row["court_name"] . "</td></tr>";
					echo "<tr><td>Date:</td> <td>" . date("F jS, Y", strtotime($row["apt_date"])) . "</td></tr>";
					echo "<tr><td>Defendent:</td> <td>" . $row["defendent"] . "</td></tr>";
					echo "<tr><td>Defence Attorney:</td> <td>" . $row["defence_attorney"] . "</td></tr>";
					echo "<tr><td>Prosecutor:</td> <td>" . $row["prosecutor"] . "</td></tr>";
					echo "<tr><td>Judge:</td> <td>" . $row["judge"] . "</td></tr>";
					echo "</table>";
					echo "</div>";

					// Display charges information
					$cmd = "SELECT C.penal_code, C.charged, D.law_desc, D.crime_type FROM Charges C INNER JOIN CrimeDict D ON D.penal_code = C.penal_code WHERE case_id = " . $row["case_id"];
					$result = $mysqli->query($cmd);
					if ($result) {
						$i = 1;
						foreach ($result as $row) {
							echo "<h4> Charge " . $i . ":</h4>";
							echo "<div class=\"sqltable\">";
							echo "<table>";
							echo "<tr><td>Penal Code:</td> <td>" . $row["penal_code"] . "</td></tr>";
							if ($row["charged"] == NULL) {
								echo "<tr><td>Charged:</td> <td>In Progress</td></tr>";
							} else if ($row["charged"] == 0) {
								echo "<tr><td>Charged:</td> <td>Not Guilty</td></tr>";
							} else {
								echo "<tr><td>Charged:</td> <td>Guilty</td></tr>";
							}
							echo "<tr><td>Description:</td> <td>" . $row["law_desc"] . "</td></tr>";
							if ($row["crime_type"] == 0) {
								echo "<tr><td>Crime Type:</td> <td>Civil</td></tr>";
							} else if ($row["crime_type"] == 1) {
								echo "<tr><td>Crime Type:</td> <td>Misdemeanor</td></tr>";
							} else {
								echo "<tr><td>Crime Type:</td> <td>Felony</td></tr>";
							}
							echo "</table>";
							echo "</div>";
							$i += 1;
						}
					} else {
						echo "<h4> No charges found </h4>";
						echo $mysqli->error;
					}
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
	</div>
</html>
