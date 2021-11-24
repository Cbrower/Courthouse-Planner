<?php include('MainRedirect.php'); ?>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/FormStyle.css">
</head>
<form action = ../POSTForms/CasePost.php method = "post">
    <div>
        <label for = "Case ID"> Case ID: </label>
        <input type = "number" name = "caseID" required = "required" placeholder = "001-001"/>
    </div>
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
    <button type="submit">Register</button>
</form>