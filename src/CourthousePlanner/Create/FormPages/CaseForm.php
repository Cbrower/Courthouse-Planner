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
    <form action = ../POSTForms/CasePost.php method = "post">
        <div>
            <label for = "Case Division"> Case Division: </label>
            <input type = "number" name = "caseDiv" required = "required" placeholder = "001-001"/>
        </div>
        <div>
            <label for = "Defendant ID"> Defendant ID: </label>
            <input type = "number" name = "defID" required = "required" placeholder = "123-456-789"/>
        </div>
        <div>
            <label for = "Defence Attorney ID"> Defense Attorney ID: </label>
            <input type = "number" name = "defAttorneyID" required = "required" placeholder = "123-456-789"/>
        </div>
        <div>
            <label for = "Prosecution ID"> Prosecution ID: </label>
            <input type = "number" name = "prosecutionID" required = "required" placeholder = "123-456-789"/>
        </div>
        <div>
            <label for = "Judge ID"> Judge ID: </label>
            <input type = "number" name = "judgeID" required = "required" placeholder = "123-456-789"/>
        </div>
        <div class="submitbutton">
            <button name = "submit" value = "submit" type="submit">Register</button>
        </div>
    </form>
</div>
