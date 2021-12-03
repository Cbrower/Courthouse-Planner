<link rel="stylesheet" href="../Styles/Table.css">
<?php
	Include("../Common/MySQLHelpers.php");
	function buildTableFromQuery($cmd) {
		$mysqli = connectToDatabase();
		
		$result = $mysqli->query($cmd);
		if (!$result) {
			die("Query to show fields from table failed");
		}

		echo "<table>";
		echo "<tr>";

		$cols = $result->fetch_fields();
		for ($i = 0; $i < count($cols); $i++) {
			$cols[$i] = $cols[$i]->name;
		}

		for ($i = 0; $i < $result->field_count; $i += 1) {
			echo "<th>" . $cols[$i] . "</th>";
		}
		echo "</tr>";

		foreach ($result as $row) {
			echo "<tr>";
			for ($i = 0; $i < $result->field_count; $i += 1) {
				echo "<td>" . $row[$cols[$i]] . "</td>";
			}
			echo "</tr>";

		}

		echo "</table>";
		mysqli_close($mysqli);
	}
?>
