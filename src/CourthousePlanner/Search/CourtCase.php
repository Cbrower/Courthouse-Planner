<?php
    Include("../Common/NavPanel.php");
    Include("Search.php");
?>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../Styles/Navbar.css">
	</head>
	<div id="wrapper">
	    <div id = "banner">

	    </div>
        <?php
            navPanel("../");
        ?>
        <h2>Court Cases</h2>
        <?php
            $colNames = array("Case ID", "Case Division", "Defendant ID", "Defence Attorney ID", "Prosecutor ID", "Judge ID");
            buildTableFromQuery("SELECT * FROM CourtCase", $colNames);
        ?>
    </div>
</html>
