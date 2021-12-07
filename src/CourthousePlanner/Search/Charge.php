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
        <h2>Charges</h2>
        <?php
            $colNames = array("Case ID", "Penal Code", "Charged");
            buildTableFromQuery("SELECT * FROM Charges", $colNames);
        ?>
    </div>
</html>
