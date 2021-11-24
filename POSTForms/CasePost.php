<?php
Include("../SQLConnect.php");
$conn = connectToDatabase();

if(isset($_POST['submit']))
{
    $case_ID = $_POST['caseID'];
    $case_div = $_POST['caseDiv'];
    $def_ID = $_POST['defID'];
    $def_Att_ID = $_POST['defAttorneyID'];
    $pros_Att_ID = $_POST['prosecutionID'];
    $judge_ID = $_POST['judgeID'];
    $sql = "INSERT INTO CourtCase (case_id,case_div,def_id,def_att_id,pros_id,jid) VALUES ('$case_ID','$case_div','$def_ID','$def_Att_ID','$pros_Att_ID','$judge_ID')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
