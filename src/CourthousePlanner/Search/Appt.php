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
        <h2>Appointments</h2>
        <?php
            $colNames = array("Appointment ID", "Case ID", "Room ID", "Filing Fee", "Crime Code", "Date");
            buildTableFromQuery("SELECT * FROM Appointment", $colNames);
        ?>
    </div>
</html>
