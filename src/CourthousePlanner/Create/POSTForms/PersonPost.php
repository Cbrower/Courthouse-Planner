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
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];
            $DOB = $_POST['dob'];
            $person_status = $_POST['person_type'];
            $Attorney = 0;
            $Judge = 0;
            if($person_status === "Attorney"){
                $Attorney = 1;
            }
            if($person_status === "Judge"){
                $Judge = 1;
            }
            $sql = "INSERT INTO Person (first_name,last_name,birth_date,phone_number,is_lawyer,is_judge) VALUES ('$fname','$lname','$DOB','$phone','$Attorney','$Judge')";
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
