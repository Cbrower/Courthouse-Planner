<html>
	<head>
		<div class="pagetitle">
			<h1>Courtroom Planner</h1>
		</div>
		<link rel="stylesheet" href="Styles/Navbar.css">
	</head>
	<!-- Inspired from https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp -->
	<div class="navbar">
		<a href="#home">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Register</button>
			<div class="dropdown-content">
				<a href="FormPages/AppointmentForm.php">Appointment</a>
				<a href="FormPages/CaseForm.php">Court Case</a>
				<a href="FormPages/CourtForm.php">Courtroom</a>
				<a href='FormPages/CrimeForm.php'>Penal Code</a>
				<a href="FormPages/PersonForm.php">Person</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Update</button>
			<div class="dropdown-content">
				<a href="#">Appointment</a>	
				<a href="#">Court Case</a>
				<a href="#">Courtroom</a>
				<a href='#'>Penal Code</a>
				<a href="#">Person</a>	
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Delete</button>
			<div class="dropdown-content">
				<a href="#">Appointment</a>	
				<a href="#">Court Case</a>
				<a href="#">Courtroom</a>
				<a href='#'>Penal Code</a>
				<a href="#">Person</a>	
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Search</button>
			<div class="dropdown-content">
				<a href="#">Appointment</a>	
				<a href="#">Court Case</a>
				<a href="#">Courtroom</a>
				<a href='#'>Penal Code</a>
				<a href="#">Person</a>	
			</div>
		</div>
		<a href="#stats">Stats</a>
	</div>
</html>
