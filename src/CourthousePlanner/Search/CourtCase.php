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
	<h2>Court Cases</h2>
	<?php
		$colNames = array("Case ID", "Case Division", "Defendant ID", "Defence Attorney ID", "Prosecutor ID", "Judge ID");
		buildTableFromQuery("SELECT * FROM CourtCase", $colNames);
	?>
</html>
