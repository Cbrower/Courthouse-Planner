<?php
Include("../Common/NavPanel.php");
Include("../Common/MySQLHelpers.php");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="../Styles/NavBar.css" />
</head>

<div id="wrapper">
    <div id = "banner">

    </div>
    <?php
    navPanel("../");
    ?>
    <div style="text-align: left;" >
        <h2> Update Person </h2>

        <form action =" " method = "POST"  >
            <input type = "text" name = "pid" placeholder = "Enter the Persons ID for Search"/><br/>
            <input type = "submit" name = "search" value="Search"/>
        </form>

        <?php
        $mysqli = connectToDatabase();

        if(isset($_POST['search']))
        {
            $apt_id = $_POST['pid'];

            $query = "SELECT * FROM Person WHERE pid='$apt_id' ";
            $query_run = $mysqli->query($query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <form action="" method="POST" >
                    <input type = "hidden" name = "pid" value = "<?php echo $row['pid'] ?>"/> <br>
                    <div>
                        <label for = "First Name"> First Name: </label>
                        <input type = "text" name = "first_name" value = "<?php echo $row['first_name'] ?>"/> <br>
                    </div>
                    <div>
                        <label for = "Last Name"> Last Name: </label>
                        <input type = "text" name = "last_name" value = "<?php echo $row['last_name'] ?>"/> <br>

                    </div>

                    <div>
                        <label for = "Date of Birth"> Date of Birth: </label>
                        <input type = "text" name = "birth_date" value = "<?php echo $row['birth_date'] ?>"/> <br>
                    </div>

                    <div>
                        <label for = "Phone Number"> Phone Number: </label>
                        <input type = "text" name = "phone_number" value = "<?php echo $row['phone_number'] ?>"/> <br>
                    </div>
                    <input type = "submit" name = "update" value = "Update Persons Info">
                </form>

                <?php
            }
        }
        ?>
    </div>
</html>

<?php
$mysqli = connectToDatabase();

if(isset($_POST['update']))
{
    $case_id = $_POST['first_name'];
    $room_id = $_POST['last_name'];
    $filing_fee = $_POST['birth_date'];
    $crime_code = $_POST['phone_number'];

    $query = "UPDATE Person SET first_name = '$_POST[first_name]', last_name = '$_POST[last_name]',birth_date = '$_POST[birth_date]',phone_number = '$_POST[phone_number]' WHERE pid='$_POST[pid]' ";
    $query_run = $mysqli->query($query);
    if($query_run)
    {
        echo '<script> alert("Person Updated") </script>';
    }
    else
    {
        echo '<script> alert("ERROR: Person Not Updated") </script>';

    }
}
?>





