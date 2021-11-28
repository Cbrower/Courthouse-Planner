<?php
	function connectToDatabase() {
		$dbhost = 'localhost:3306';
		$dbuser = 'mysql_user';
		$dbpass = "mysql_password";
		$dbname = "CourthousePlanner";

		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if (!$mysqli) {
			die("Could not connect:" . mysql_error());
		}

		return $mysqli;
	}
?>
