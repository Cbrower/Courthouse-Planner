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
