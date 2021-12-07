<?php
    Include("../Common/NavPanel.php");
    Include("../Search/Search.php");
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
            if (array_key_exists("delete", $_POST) && $_POST["delete"] 
                    && array_key_exists("dapp_id", $_POST) && $_POST["dapp_id"] != "none") {
                echo "<h2>Remove Person Record</h2>";
                echo "<p> Are you sure you want delete the following record:</p>";
                $colNames = array("Appointment ID", "Case ID", "Room ID", "Filing Fee", "Crime Code");
                buildTableFromQuery("SELECT * FROM Appointment WHERE apt_id = " . $_POST["dapp_id"], $colNames);
                echo "<form method=\"post\">";
                echo "	<input type=\"hidden\" name=\"id\" value=\"" . $_POST["dapp_id"] . "\"/>";
                echo "	<input type=\"submit\" name=\"delete_record\" value=\"Delete Record\">";
                echo "</form>";
            } else if (array_key_exists("delete_record", $_POST) && $_POST["delete_record"]
                    && array_key_exists("id", $_POST) && $_POST["id"] != "none") {
                $mysqli = connectToDatabase();
                $ID = $_POST["id"];
                $cmd = "DELETE FROM Appointment WHERE apt_id = " . $ID;
                if ($mysqli->query($cmd)) {
                    echo "<p>Record Deleted</p>";
                } else {
                    echo "<p>Failed to delete record because: " . $mysqli->error . "</p>";
                }
            } else {
                header("Location: ../Main.php");
                exit();
            }
        ?>
    </div>
</html>
