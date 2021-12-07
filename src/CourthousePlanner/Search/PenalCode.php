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
        <h2>Penal Codes</h2>
        <?php
            $colNames = array("Penal Code", "Description", "Crime Type");
            buildTableFromQuery("SELECT * FROM CrimeDict", $colNames);
        ?>
    </div>
</html>
