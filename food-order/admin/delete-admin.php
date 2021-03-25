<?php

//Include constants.php file here
include('../config/constants.php');

//Get the ID  of Admin to be deleted
$id = $_GET['id'];

//Create SQLQuery  to delete Admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the Query
$res = mysqli_query($conn, $sql);
//Check whether the query executed successfully or not
if($res==true)
{
    //Query executed Successfully an admin deleted
    //echo "Admin Deleted";

    //Create SEssion Variable  to display message
    $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";

    //Redirect to Manage Admin Page
    header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
    //Failed  to Delete Admin
    //echo "Failed to Delete Admin";

    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

//Redirect to manage admin page with message (success/error)



?>