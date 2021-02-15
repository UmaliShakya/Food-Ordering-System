<?php
/**
 * Created by PhpStorm.
 * User: tt2018143
 * Date: 4/1/2019
 * Time: 9:53 AM
 */

$host = "localhost";
$user = "root";
$pass = "";

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






?>