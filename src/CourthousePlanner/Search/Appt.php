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
		// TODO Use inner joins to get all info and pretty up the table
		buildTableFromQuery("SELECT * FROM Appointment");
	?>
</html>
