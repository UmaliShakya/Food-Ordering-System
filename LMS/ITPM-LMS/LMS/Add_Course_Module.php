
<?php


date_default_timezone_set("Asia/Colombo");
$time =  date("H:i:sa");
$date = date("Y-m-d");

    include('DB_Connect.php');
    $ModuleNo = $_POST["ModuleNo"];
    $ModuleName = $_POST['ModuleName'];
    $EnrollementKey = $_POST['EnrollementKey'];
    $Year = $_POST['Year'];
    $LecturerID = $_POST['LecturerID'];
    $ModuleType = $_POST['ModuleType'];


    $sql = "INSERT INTO course_module (ModuleNo,ModuleName,EnrollementKey,Year,LecturerID,ModuleType) VALUES ('$ModuleNo','$ModuleName','$EnrollementKey','$Year','$LecturerID','$ModuleType')";


     if (mysqli_query($con,$sql))
     {
         echo 'Data Inserted';

         $log_req = "SELECT * FROM `log` WHERE user_id = '{$_SESSION['user_id']}'";
         $res_log = mysqli_query($con, $log_req);
         $log = mysqli_fetch_array($res_log);

         $log_msg = $log['status']."<br>[".$date." ".$time."] : Request Updated By Owner ";
         $log_req = "UPDATE `irs`.`log` SET `status` = '{$log_msg}' WHERE `log`.`req_id` = '{$req_id}';";
         $res_log = mysqli_query($connection, $log_req);
     }

     else{

         echo 'Not Inserted';
     }

     header("refresh:2; url=Add_Course_Module.html");
   ?>