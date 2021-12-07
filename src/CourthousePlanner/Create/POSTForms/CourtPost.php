<?php
    Include("../../Common/NavPanel.php");
    Include("../../Common/MySQLHelpers.php");
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../Styles/Navbar.css">
</head>
<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
        navPanel("../../");
        $conn = connectToDatabase();

        if(isset($_POST['submit']))
        {
            $district = $_POST['district'];
            $court_name = $_POST['courtName'];
            $sql = "INSERT INTO CourtRoom (district, court_name) VALUES ('$district','$court_name')";
            if (mysqli_query($conn, $sql)) {
                echo '<div style="font-size:1.25em;">New record has been added successfully !</div>';
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        else{
            echo '<div style="font-size:1.25em;">Error During Submission. Please Try Again.</div>';
        }
    ?>
</div>
