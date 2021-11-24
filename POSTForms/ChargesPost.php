<?php
Include("../SQLConnect.php");
$conn = connectToDatabase();

if (isset($_POST['submit'])) {
    $case_ID = $_POST['caseID'];
    $penal_code = $_POST['penal_code'];
    $charged = $_POST['outcome'];
    $sql = "INSERT INTO Charges (case_id,penal_code,charged) VALUES ('$case_ID','$penal_code','$charged')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
