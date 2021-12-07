<?php
Include("../../Common/NavPanel.php");
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../Styles/Navbar.css">
    <link rel="stylesheet" type="text/css" href="../../Styles/FormStyle.css">
</head>
<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
        navPanel("../../");
    ?>
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
            <label for = "Crime Code"> Crime Code: </label>
            <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
        </div>
        <div>
            <label for = "Date"> Date: </label>
            <input type = "date" name = "date" required = "required" placeholder = "mm/dd/yyyy" />
        </div>
        <div class="submitbutton">
            <button name = "submit" value = "submit" type="submit">Register</button>
        </div>
    </form>
</div>
