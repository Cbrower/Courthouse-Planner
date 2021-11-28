<?php
include("../../Common/MySQLHelpers.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $DOB = $_POST['dob'];
    $person_status = $_POST['person_status'];
    $Attorney = FALSE;
    $Judge = FALSE;
    if($person_status === "Attorney"){
        $Attorney = TRUE;
    }
    if($person_status === "Attorney"){
        $Attorney = FALSE;
    }
    $sql = "INSERT INTO Person (fname,lname,phone,DOB,Attorney,Judge) VALUES ('$fname','$lname','$phone','$DOB','$Attorney','$Judge')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
