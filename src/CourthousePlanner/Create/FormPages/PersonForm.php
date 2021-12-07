<?php
Include("../../Common/NavPanel.php");
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../Styles/FormStyle.css">
    <link rel="stylesheet" type="text/css" href="../../Styles/Navbar.css">
</head>
<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
        navPanel("../../");
    ?>
    <form action = ../POSTForms/PersonPost.php method = "post">
        <div>
            <label for = "First Name"> First Name: </label>
            <input type = "text" name = "fname" required = "required" placeholder = "First Name" />
        </div>
        <div>
            <label for = "Last Name"> Last Name: </label>
            <input type = "text" name = "lname" required = "required" placeholder = "Last Name" />
        </div>
        <div>
            <label for = "Phone Number"> Phone Number: </label>
            <input type = "tel" name = "phone" required = "required" placeholder = "(123)-456-7890"/>
        </div>
        <div>
            <label for = "DOB"> Date of Birth: </label>
            <input type = "date" name = "dob" required = "required" max = "<?= date('Y-m-d'); ?>"/>
        </div>
        <div>
            <label for = "Person Type"> Person Type: </label>
            <p>
                <input type="radio" id="Citizen" name="person_type" value="Citizen">
                <label for="Citizen">Citizen</label><br>
                <input type="radio" id="Attorney" name="person_type" value="Attorney">
                <label for="Attorney">Attorney</label><br>
                <input type="radio" id="Judge" name="person_type" value="Judge">
                <label for="Judge">Judge</label>
            </p>
        </div>
        <div class="submitbutton">
            <button type="submit" value="submit" name="submit">Register</button>
        </div>
    </form>
</div>
