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

<?php
include("../../Common/MySQLHelpers.php");
$conn = connectToDatabase();


if(isset($_POST['submit']))
{
    $case_ID = $_POST['caseID'];
    $room_ID = $_POST['roomID'];
    $filing_fee = $_POST['filingFee'];
    $penal_code = $_POST['penal_code'];
    $date = $_POST['date'];

    $sql = "INSERT INTO Appointment (case_id,room_id,filing_fee,crime_code, apt_date) VALUES ('$case_ID','$room_ID','$filing_fee','$penal_code','$date')";
    if ($conn->query($sql)) {
        echo '<div style="font-size:1.25em;">New record has been added successfully !</div>';
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else{
    echo '<div style="font-size:1.25em;">Error During Submission. Please Try Again.</div>';
}
