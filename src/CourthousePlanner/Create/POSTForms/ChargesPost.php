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

        if (isset($_POST['submit'])) {
            $case_ID = $_POST['caseID'];
            $penal_code = $_POST['penal_code'];
            $charged = $_POST['outcome'];
            $sql = "INSERT INTO Charges (case_id,penal_code,charged) VALUES ('$case_ID','$penal_code', $charged)";
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
