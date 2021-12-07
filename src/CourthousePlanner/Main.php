<?php
Include("Common/NavPanel.php");

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="Styles/NavBar.css" />
</head>

<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
    navPanel("./");
    ?>
    <div id = "content_area">

        <h3>Welcome!</h3>
        <p>
            Courthouse Planner: This site is to be used to manage all courthouse appointments. <br>
            No login is required.

        </p>
    </div>


</div>
</html>