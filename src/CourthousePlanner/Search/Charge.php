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
	<h2>Charges</h2>
	<?php
		$colNames = array("Case ID", "Penal Code", "Charged");
		buildTableFromQuery("SELECT * FROM Charges", $colNames);
	?>
</html>
