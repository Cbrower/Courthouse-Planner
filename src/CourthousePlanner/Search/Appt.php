<?php
Include("../Common/NavPanel.php");
Include("Search.php");
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
	<h2>Appointments</h2>
	<?php
		$colNames = array("Appointment ID", "Case ID", "Room ID", "Filing Fee", "Crime Code");
		buildTableFromQuery("SELECT * FROM Appointment", $colNames);
	?>
</html>
