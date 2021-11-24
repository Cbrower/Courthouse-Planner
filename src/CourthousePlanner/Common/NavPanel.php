<?php
	function navPanel($pathToMain) {
		// Inspired from https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp
		echo "<div class=\"navbar\">";
		echo "<a href=\"#home\">Home</a>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Register</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"#\">Appointment</a>";
		echo "<a href=\"#\">Court Case</a>";
		echo "<a href=\"#\">Courtroom</a>";
		echo "<a href=\"#\">Penal Code</a>";
		echo "<a href=\"#\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Update</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"#\">Appointment</a>";
		echo "<a href=\"#\">Court Case</a>";
		echo "<a href=\"#\">Courtroom</a>";
		echo "<a href=\"#\">Penal Code</a>";
		echo "<a href=\"#\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Delete</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"#\">Appointment</a>";
		echo "<a href=\"#\">Court Case</a>";
		echo "<a href=\"#\">Courtroom</a>";
		echo "<a href=\"#\">Penal Code</a>";
		echo "<a href=\"#\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Search</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"" . $pathToMain . "Search/Appt.php\">Appointment</a>";
		echo "<a href=\"" . $pathToMain . "Search/CourtCase.php\">Court Case</a>";
		echo "<a href=\"" . $pathToMain . "Search/Courtroom.php\">Courtroom</a>";
		echo "<a href=\"" , $pathToMain . "Search/PenalCode.php\">Penal Code</a>";
		echo "<a href=\"" . $pathToMain . "Search/Person.php\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<a href=\"#stats\">Stats</a>";
		echo "</div>";
	}
?>
