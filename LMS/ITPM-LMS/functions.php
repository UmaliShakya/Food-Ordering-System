<?php
/**
 * Created by PhpStorm.
 * User: tt2018143
 * Date: 4/2/2019
 * Time: 1:46 PM
 */



session_start();


function log_update($msg){
    session_start();


    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "ABC";

    $connection = mysqli_connect($host,$user,$pass,$db);

    if($connection){
        mysqli_select_db($connection,$db);

    }else{

        echo '<script type="text/javascript">
            alert("db error'.mysqli_error($connection).' ");
        </script>';

    }

    date_default_timezone_set("Asia/Colombo");
    $time =  date("H:i:sa");
    $date = date("Y-m-d");

    $log_req = "SELECT * FROM `log`  WHERE `log`.`date` = '{$date}'";
    $res_log = mysqli_query($connection, $log_req);
    $log = mysqli_fetch_array($res_log);

    if ($res_log){

        if (mysqli_num_rows($res_log) == 0){

            $mm = "<h4><b>".$date."</b></h4>";
            $qry = "INSERT INTO `abc`.`log` (`date`, `status`) VALUES ('{$date}', '{$mm}');";
            $res = mysqli_query($connection, $qry);


            $log_req = "SELECT * FROM `log`  WHERE `log`.`date` = '{$date}'";
            $res_log = mysqli_query($connection, $log_req);
            $log = mysqli_fetch_array($res_log);
        }

    }


    $log_msg = $log['status']."<br>[".$date." ".$time."] : ".$_SESSION['name']." ".$msg;

    //$log_msg = "[".$date." ".$time."] : ".$_SESSION['name'].$msg."</br>";

    $log_qry = "UPDATE `abc`.`log` SET `status` = '{$log_msg}' WHERE `log`.`date` = '{$date}';";
    $log_res = mysqli_query($connection,$log_qry);


    if (!$log_res){
        echo '<script type="text/javascript">
            alert("log update fail ");
        </script>';
    }
}





?>