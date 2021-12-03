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
