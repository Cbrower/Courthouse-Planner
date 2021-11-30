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
    $case_div = $_POST['caseDiv'];
    $def_ID = $_POST['defID'];
    $def_Att_ID = $_POST['defAttorneyID'];
    $pros_Att_ID = $_POST['prosecutionID'];
    $judge_ID = $_POST['judgeID'];
    $sql = "INSERT INTO CourtCase (case_div,def_id,def_att_id,pros_id,jid) VALUES ('$case_div','$def_ID','$def_Att_ID','$pros_Att_ID','$judge_ID')";
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