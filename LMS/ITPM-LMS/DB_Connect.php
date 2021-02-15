<?php

$con = mysqli_connect('127.0.0.1','root', '');

if (!$con)
{
    echo 'Not Connect To Server';
}

if (!mysqli_select_db($con, 'leraning_managemet_system'))
{
    echo 'Databse Not Selected';
}
?>