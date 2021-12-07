<?php
Include("../Common/NavPanel.php");
Include("../Common/MySQLHelpers.php");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="Styles/NavBar.css" />
</head>

<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
    navPanel("./");
    ?>
    <div style="text-align: left;" >
        <h2> Update Appointment </h2>

        <form action =" " method = "POST"  >
            <input type = "text" name = "apt_id" placeholder = "Enter ID for Search"/><br/>
            <input type = "submit" name = "search" value="Search"/>
        </form>

        <?php

        $mysqli = connectToDatabase();
        if(isset($_POST['search']))
        {
            $apt_id = $_POST['apt_id'];

            $query = "SELECT * FROM Appointment where apt_id='$apt_id' ";
            $query_run = $mysqli->query($query);

            for($query_run as $row)
            {
                ?>
                <form action="" method="POST" >
                    <input type = "hidden" name = "apt_id" value = "<?php echo $row['apt_id'] ?>"/> <br>
                    <div>
                        <label for = "Case ID"> Case ID: </label>
                        <input type = "text" name = "case_id" value = "<?php echo $row['case_id'] ?>"/> <br>
                    </div>
                    <div>
                        <label for = "Room ID"> Room ID: </label>
                        <input type = "text" name = "room_id" value = "<?php echo $row['room_id'] ?>"/> <br>

                    </div>

                    <div>
                        <label for = "Filing Fee"> Filing Fee: </label>
                        <input type = "text" name = "filing_fee" value = "<?php echo $row['filing_fee'] ?>"/> <br>
                    </div>

                    <div>
                        <label for = "Crime Code"> Crime Code: </label>
                        <input type = "text" name = "crime_code" value = "<?php echo $row['crime_code'] ?>"/> <br>
                    </div>
                    <input type = "submit" name = "update" value = "Update Appointment">
                </form>

                <?php
            }
        }
        ?>
    </div>
</html>

<?php
$connection = mysqli_connect("localhost","christinasoto","Sparky!746","CourthousePlanner","8889");
$db = mysqli_select_db($connection,'CourthousePlanner');

if(isset($_POST['update']))
{
    $case_id = $_POST['case_id'];
    $room_id = $_POST['room_id'];
    $filing_fee = $_POST['filing_fee'];
    $crime_code = $_POST['crime_code'];

    $query = "UPDATE Appointment SET case_id = '$_POST[case_id]', room_id = '$_POST[room_id]',filing_fee = '$_POST[filing_fee]',crime_code = '$_POST[crime_code]' WHERE apt_id='$_POST[apt_id]' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        echo '<script> alert("Appointment Updated") </script>';
    }
    else
    {
        echo '<script> alert("ERROR: Appointment Not Updated") </script>';

    }
}
?>




