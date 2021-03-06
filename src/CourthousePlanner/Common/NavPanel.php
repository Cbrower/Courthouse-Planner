<?php
	function navPanel($pathToMain) {
		// Inspired from https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp
		echo "<div class=\"navbar\">";
		echo "<a href=\"" . $pathToMain . "Main.php\">Home</a>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Register</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/AppointmentForm.php\"\">Appointment</a>";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/ChargesForm.php\"\">Charge</a>";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/CaseForm.php\"\">Court Case</a>";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/CourtForm.php\"\">Courtroom</a>";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/CrimeForm.php\"\">Penal Code</a>";
		echo "<a href=\"" . $pathToMain . "Create/FormPages/PersonForm.php\"\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Update</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"" . $pathToMain . "Update/updateAppointment.php\">Appointment</a>";
		echo "<a href=\"" . $pathToMain . "Update/updatePerson.php\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class=\"dropdown\">";
		echo "<button class=\"dropbtn\">Search</button>";
		echo "<div class=\"dropdown-content\">";
		echo "<a href=\"" . $pathToMain . "Search/Appt.php\">Appointment</a>";
		echo "<a href=\"" . $pathToMain . "Search/Charge.php\">Charge</a>";
		echo "<a href=\"" . $pathToMain . "Search/CourtCase.php\">Court Case</a>";
		echo "<a href=\"" . $pathToMain . "Search/Courtroom.php\">Courtroom</a>";
		echo "<a href=\"" , $pathToMain . "Search/PenalCode.php\">Penal Code</a>";
		echo "<a href=\"" . $pathToMain . "Search/Person.php\">Person</a>";
		echo "</div>";
		echo "</div>";
		echo "<a href=\"" . $pathToMain . "ApptConf.php\">Appointment Confirmation</a>";
		echo "<a href=\"" . $pathToMain . "Delete/Appointment.php\">Cancel Appointment</a>";
		echo "</div>";
	}
?>
