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
	<h2>People</h2>
	<?php
		$colNames = array("ID", "First Name", "Last Name", "Birth Date", "Phone Number", "Is Lawyer", "Is Judge");
		buildTableFromQuery("SELECT * FROM Person", $colNames);
	?>
</html>
