<?php
Include("../../Common/NavPanel.php");
?>
<head>
    <div class="pagetitle">
        <h1>Courtroom Planner</h1>
    </div>
    <link rel="stylesheet" href="../../Styles/Navbar.css">
</head>
<?php
navPanel("../../");
?>
<head>
    <link rel="stylesheet" type="text/css" href="../../Styles/FormStyle.css">
</head>
<form action = ../POSTForms/AppointmentPost.php method = "post">
    <div>
        <label for = "Case ID"> Case ID: </label>
        <input type = "number" name = "caseID" required = "required" placeholder = "001-001"/>
    </div>
    <div>
        <label for = "Room ID"> Room ID: </label>
        <input type = "number" name = "roomID" required = "required" placeholder = "0001"/>
    </div>
    <div>
        <label for = "Filing Fee"> Filing Fee: </label>
        <input type = "number" name = "filingFee" required = "required" placeholder = "$00.00"/>
    </div>
    <div>
        <label for = "Penal Code"> Penal Code: </label>
        <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
    </div>
    <div>
        <label for = "Date"> Date: </label>
        <input type = "date" name = "date" required = "required" placeholder = "mm/dd/yyyy" />
    </div>
    <button name = "submit" value = "submit" type="submit">Register</button>
    </form>
