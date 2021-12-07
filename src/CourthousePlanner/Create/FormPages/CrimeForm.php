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
    <form action = ../POSTForms/CrimePost.php method = "post">
        <div>
            <label for = "Penal Code"> Penal Code: </label>
            <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
        </div>
        <div>
            <label for = "Crime_Type"> Crime Type: </label>
            <p>
                <input type="radio" id="Felony" name="crime_type" value="Felony">
                <label for="Felony">Felony</label><br>
                <input type="radio" id="Misdemeanor" name="crime_type" value="Misdemeanor">
                <label for="Misdemeanor">Misdemeanor</label><br>
                <input type="radio" id="Civil" name="crime_type" value="Civil">
                <label for="Civil">Civil</label>
            </p>
        </div>
        <div>
            <label for = "Law Description"> Law Description: </label>
            <input type = "text" name = "law_desc" required = "required" placeholder = "Description of the Law"/>
        </div>
        <div class="submitbutton">
            <button name = "submit" value = "submit" type="submit">Register</button>
        </div>
    </form>
</div>
