<?php
Include("../SQLConnect.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $room_id = $_POST['roomID'];
    $district = $_POST['district'];
    $court_name = $_POST['courtName'];
    $room_num = $_POST['roomNum'];
    $sql = "INSERT INTO CourtRoom (room_id, district, court_name, room_num) VALUES ('$room_id','$district','$court_name','$room_num')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
