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
            $case_ID = $_POST['caseID'];
            $room_ID = $_POST['roomID'];
            $filing_fee = $_POST['filingFee'];
            $penal_code = $_POST['penal_code'];
            $date = $_POST['date'];

            $query = "SELECT * FROM Appointment WHERE room_id = " . $room_ID . " AND apt_date = " . $date;
            $res = $conn->query($query);

            $flag = false;
            foreach ($res as $row) {
                $flag = true;
                break;
            }

            if ($flag) {
                echo "<div style=\"font-size:1.25em;\">Error: Appointment already booked on date: " . date("F jS, Y", strtotime($date)) . "</div>";
            } else {
                $sql = "INSERT INTO Appointment (case_id,room_id,filing_fee,crime_code, apt_date) VALUES ('$case_ID','$room_ID','$filing_fee','$penal_code','$date')";
                if ($conn->query($sql)) {
                    echo '<div style="font-size:1.25em;">New record has been added successfully !</div>';
                } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
            }
            mysqli_close($conn);

        }
        else{
            echo '<div style="font-size:1.25em;">Error During Submission. Please Try Again.</div>';
        }
    ?>
</div>
