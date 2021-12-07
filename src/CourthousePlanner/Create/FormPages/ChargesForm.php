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
    <form action = ../POSTForms/ChargesPost.php method = "post">
        <div>
            <label for = "Case ID"> Case ID: </label>
            <input type = "number" name = "caseID" required = "required" placeholder = "001-001"/>
        </div>
        <div>
            <label for = "Penal Code"> Penal Code: </label>
            <input type = "number" name = "penal_code" required = "required" placeholder = "01-001" />
        </div>
        <div>
            <label for = "Found"> Found: </label>
            <p>
                <input type="radio" id="guilty" name="outcome" value= 1>
                <label for="guilty">Guilty</label><br>
                <input type="radio" id="not_guilty" name="outcome" value= 0>
                <label for="not_guilty">Not Guilty</label><br>
                <input type="radio" id="NULL" name="outcome" value= NULL>
                <label for="NULL">In Progress</label><br>
            </p>
        </div>
        <div class="submitbutton">
            <button name = "submit" value = "submit" type="submit">Register</button>
        </div>
    </form>
</div>
