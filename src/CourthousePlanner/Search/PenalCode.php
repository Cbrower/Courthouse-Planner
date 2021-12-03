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
	<h2>Penal Codes</h2>
	<?php
		$colNames = array("Penal Code", "Description", "Crime Type");
		buildTableFromQuery("SELECT * FROM CrimeDict", $colNames);
	?>
</html>
