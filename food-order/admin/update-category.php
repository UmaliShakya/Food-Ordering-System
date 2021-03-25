<?php include('partials/menu.php');?>


<div class="main-content2">
    <div class="wrapper">
        <h1>Update  Category</h1>
        <br><br><br>

        <?php
            //Check whether the id is set or not
            if(isset($_GET['id']))
            {
                //get the id and all other details
                //echo "getting the data";
                $id = $_GET['id'];
                //Create sql query to get all other details
                $sql = "SELECT * FROM tbl_category WHERE id=$id";

                //Execute the query
                $res = mysqli_query($conn, $sql);

                //Count the rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
                else
                {
                    //redirect to manage category with session message
                    $_SESSION['no-category-found'] = "<div  class='error'> Category not found</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
            
                }
            }
            else
            {
                //redirect to manage category
                header('location:'.SITEURL.'admin/manage-category.php');
            }
        ?>

        <!--Update Category form starts-->
        <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <tr>
                    <label>Title:</label>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>" width="150px" class="form-control">
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <label>Current Image: </label>
                    <td>
                        <?php
                            if($current_image!= "")
                            {
                                //Display the Image
                                ?>
                                <img src="<?php echo SITEURL;?>images/category/<?php echo $current_image; ?>"  class="form-control rounded" style="width:20%">
                                <?php
                            }
                            else
                            {
                                //Display the message
                                echo "<div class='error'>Image Not Added.</div>";
                            }
                        ?>
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <label> New Image: </label>
                    <td>
                    <input type="file" name="image" class="form-control">    
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <label>Featured:</label>
                    <td>
                        <input <?php if($featured=="Yes"){echo "checked";} ?> type="radio" name="featured" value="Yes" class="form-control"> Yes

                        <input <?php if($featured=="No"){echo "checked";} ?> type="radio" name="featured" value="No" class="form-control"> No
                    </td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                    <label>Active:</label>
                    <td>
                        <input <?php if($featured=="Yes"){echo "checked";} ?> type="radio" name="active" value="Yes" class="form-control"> Yes

                        <input <?php if($featured=="No"){echo "checked";} ?> type="radio" name="active" value="No" class="form-control"> No
                    </td>
                </tr>
                </div>
                
                <div class="form-group">
                <tr>
                    <label colspan="2">
                        <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="Update Category" class="btn btn-success">

                    </label>
                </tr>
                </div>

</form>

     
        <?php

            if(isset($_POST['submit']))
            {
                //Get all the values from our form
                $id = $_POST['id'];
                $title = $_POST['title'];
                $current_image = $_POST['current_image'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];

                //Updating new image if selected
                //Check whether the image is selected or not
                if(isset($_FILES['image']['name']))
                {
                    //Get the image details
                    $image_name = $_FILES['image']['name'];

                    //Check whether the image is available or not
                    if($image_name != "")
                    {
                        //Image Available
                        //Upload the new image
                        //A. Auto rename our image
                        //get the extension of our image(jpg,png,gif,etc)
                        $text = end(explode('.', $image_name));

                        //Rename the image
                        $image_name = "food_category_".rand(000, 999).'.'.$text;//e.g.food_category_834.jpg


                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        //Finally upload the image
                        $upload  = move_uploaded_file($source_path, $destination_path);

                        //Check whether the image is uploaded or not
                        //And if the image is not uploaded then we will stop the process and redirect with error message
                        if($upload==false)
                        {
                            //SEt message
                            $_SESSION['upload'] = "<div  class='error'> Failed to upload image</div>";
                            //Redirect to  Add category page
                            header('location:'.SITEURL.'admin/manage-category.php');
                            //Stop the process
                            die();

                        }

                        //B. Remove the current image if available
                        if($current_image != "")
                        {
                            $remove_path = "../images/category/".$current_image;

                            $remove = unlink($remove_path);
    
                            //Check whether the image is removed or not
    
                            //If failed to remove then displayed message and stop the process
                            if($remove==false)
                            {
                                //Failed to remove image
                                $_SESSION['failed-remove'] = "<div class='error'>Failed to remove current Image</div>";
                                header('location:'.SITEURL.'admin/manage-category.php');
                                die();//stop the process
                            }
                        }
 
                    }
                    else
                    {
                        $image_name = $current_image;
                    }
                }
                else
                {
                    $image_name = $current_image;
                }

                //Update the database
                $sql2 = "UPDATE tbl_category SET 
                    title = '$title',
                    image_name = '$image_name',
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id";

                //Execute the query
                $res2 = mysqli_query($conn, $sql2);

                //Redirect to manage category with message
                //Check whether executed or not
                if($res2==true)
                {
                    //Category Updated
                    $_SESSION['update'] = "<div class='success'>Category Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    //failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to Update Category.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }

        ?>
        <!--Update Category form ends-->
    </div>
</div>



<?php include('partials/footer.php');?>