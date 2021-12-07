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
        <h2>People</h2>
        <?php
            $colNames = array("ID", "First Name", "Last Name", "Birth Date", "Phone Number", "Is Lawyer", "Is Judge");
            buildTableFromQuery("SELECT * FROM Person", $colNames);
        ?>
    </div>
</html>
