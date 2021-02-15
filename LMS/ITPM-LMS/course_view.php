<?php
include("DB_Connect.php");
$ModuleID = $_SERVER['QUERY_STRING'];

$sql2 = "SELECT * FROM `files`WHERE ModuleID = '{$ModuleID}'";
$res = mysqli_query($con, $sql2);

$notify_sql= "UPDATE `notification` SET `notify` = 'false' WHERE `notification`.`id` = 1";
$sqldata1 = mysqli_query($con, $notify_sql) or die('error getting');

if (isset($_POST['upload'])) {


    $fname = $_FILES['attachment']['name'];
    $size = $_FILES['attachment']['size'];
    $type = $_FILES['attachment']['type'];
    $tmp_name = $_FILES['attachment']['tmp_name'];


    if (empty($fname)){
        $location = null;
        $new_f_name = null;
    }else{
        $location = "upload/".$ModuleID."/";
        if (!file_exists($location)){
            mkdir("upload/".$ModuleID);
        }
        //   $new_f_name = 1234+'_'.$fname;
        //   rename( $fname, $new_f_name) ;
        //   echo $_SESSION['update_s_id'].rename( $fname, $new_f_name);
    }

    if(move_uploaded_file($tmp_name, $location.$fname)){
        $fmsg = "Uploaded Successfully";
    }else{
        $fmsg = "Failed to Upload File";
    }

    echo '<script type="text/javascript">alert("'.$fmsg.'")</script>';


    $sql = "INSERT INTO `files` (`FileName`, `ModuleID`) VALUES ('{$fname}', '{$ModuleID}')";


    $sqlget = "SELECT * FROM course_module";
    $sqldata = mysqli_query($con, $sqlget) or die('error getting');

    $notify_sql= "UPDATE `notification` SET `notify` = 'true' WHERE `notification`.`id` = 1";
    $sqldata1 = mysqli_query($con, $notify_sql) or die('error getting');

    header("Location: Add_Files.php?".$ModuleID);

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        //echo '<option value="'.$row['ModuleID'].'"></option>';
    }


    if (mysqli_query($con,$sql)) {

    }
    else{

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php require_once("navbar.php")?>

<div class="container" style=" margin-top: 60px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">


        </div>
        <div class="col-sm-8">
            <h1><u>Cources</u></h1>
            <table  class="table border-0">
                <?php

                while ($row = mysqli_fetch_array($res))

                    echo "<tr>
                    <td><a href='upload/".$row['ModuleID']."/".$row['FileName']."' <h4>".$row['FileName']."</h4></a></td>
                  
                </tr>";

                ?>
            </table>



        </div>

    </div>
</div>
</div>

</div>




<?php
include('DB_Connect.php');
$sqlget = "SELECT * FROM course_module";
$sqldata = mysqli_query($con, $sqlget) or die('error getting');


?>
</body>
</html>
