<?php

    //Include Constant Page
    include('../config/constants.php');

    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        //Process  to Delete
       
        //1.Get ID and Image Value
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2. Remove the image if available
        //check whether the image is available or not and delete only if available
        if($image_name != "")
        {
            //IT has image and need to remove from folder
            //Get the Image path
            $path = "../images/food/".$image_name;

            //Remove Image file from folder
            $remove = unlink($path);

            //check whether the image is removed or not
            if($remove==false)
            {
                //Failed to remove image
                $_SESSION['upload'] = "<div class='error'>Failed to Remove Image</div>";
                header('location:'.SITEURL.'admin/manage-food.php');

                //Stop the process
                die();

            }

        }

        //3. Delete food from database
        $sql = "DELETE FROM tbl_food WHERE id=$id";

        //Execute whether the query executed or not set the session message respectively
        $res = mysqli_query($conn, $sql);
        
        //4.Redirect to manage food with session message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else
        {
            //Failed tp Delete Food
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Food</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }

        

    }
    else
    {
        //Redirect to Manage  Food Page
        $_SESSION['unauthorized'] = "<div class='error'>Unauthorized Access</div>";
        header('location:'.SITEURL.'admin/manage-food.php');

    }
?>