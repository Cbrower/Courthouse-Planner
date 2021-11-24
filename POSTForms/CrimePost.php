<?php
Include("../SQLConnect.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $penal_code = $_POST['penal_code'];
    $law_desc = $_POST['law_desc'];
    $crime_type = $_POST['crime_type'];
    $crime = 0;
    if($crime_type === "Misdemeanor"){
        $crime = 1;
    }
    if($crime_type === "Felony"){
        $crime = 2;
    }
    $sql = "INSERT INTO CrimeDict (penal_code,law_desc,crime_type) VALUES ('$penal_code','$law_desc','$crime')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
