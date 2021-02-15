<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 5/10/2019
 * Time: 3:25 PM
 */
include("DB_Connect.php");
$file_id = $_SERVER['QUERY_STRING'];
$id = $_GET['id'];

$sql = "DELETE FROM `files` WHERE `files`.`FileID` = '{$file_id}'";
$res = mysqli_query($con, $sql);

header("Location: Add_Files.php?".$id);


?>