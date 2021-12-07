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
    <form action = ../POSTForms/CourtPost.php method = "post">
        <div>
            <label for = "District"> District: </label>
            <input type = "number" name = "district" required = "required" placeholder = "01" />
        </div>
        <div>
            <label for = "Court Name"> Court Name: </label>
            <input type = "text" name = "courtName" required = "required" placeholder = "Name" />
        </div>
        <div class="submitbutton">
            <button name = "submit" value = "submit" type="submit">Register</button>
        </div>
    </form>
</div>
