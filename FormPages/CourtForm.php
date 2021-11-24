<?php include('MainRedirect.php'); ?>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/FormStyle.css">
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
    <div>
        <label for = "Room Number"> Room Number: </label>
        <input type = "number" name = "roomNum" required = "required" placeholder = "001"/>
    </div>
    <div>
        <label for = "Room ID"> Room ID: </label>
        <input type = "number" name = "roomID" required = "required" placeholder = "0001"/>
    </div>
    <button type="submit">Register</button>
</form>