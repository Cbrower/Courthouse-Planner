<?php
include("../../Common/MySQLHelpers.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $district = $_POST['district'];
    $court_name = $_POST['courtName'];
    $room_num = $_POST['roomNum'];
    $sql = "INSERT INTO CourtRoom (district, court_name, room_num) VALUES ('$district','$court_name','$room_num')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
