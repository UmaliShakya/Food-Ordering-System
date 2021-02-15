<?php
/**
 * Created by PhpStorm.
 * User: tt2018143
 * Date: 4/1/2019
 * Time: 10:28 AM
 */

include ("functions.php");

log_update("Log out");

session_start();

session_destroy();

header('location: index.php');



?>
