<?php include('MainRedirect.php'); ?>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/FormStyle.css">
</head>
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
            <input type="radio" id="guilty" name="outcome" value= TRUE>
            <label for="guilty">Guilty</label><br>
            <input type="radio" id="not_guilty" name="outcome" value= FALSE>
            <label for="not_guilty">Not Guilty</label><br>
        </p>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
