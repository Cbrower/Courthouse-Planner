<?php
Include("../SQLConnect.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $apt_ID = $_POST['apt_id'];
    $case_ID = $_POST['caseID'];
    $room_ID = $_POST['roomID'];
    $filing_fee = $_POST['filingFee'];
    $penal_code = $_POST['penal_code'];

    $sql = "INSERT INTO Appointment (apt_id,case_id,room_id,filing_fee,crime_code) VALUES ('$apt_ID','$case_ID','$room_ID','$filing_fee','$penal_code')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
