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
	<h2>Courtrooms</h2>
	<?php
		$colNames = array("Room ID", "District", "Court Name", "Room Number");
		buildTableFromQuery("SELECT * FROM Courtroom", $colNames);
	?>
</html>
