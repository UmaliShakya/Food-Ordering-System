<?php include("partials/menu.php");?>

<?php
    //Check whether id is set or not
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL query to get the selected food
        $sql2 = "SELECT * FROM tbl_food WHERE id =$id";

        //Execute the query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the individual value of selected food
        $title = $row2['title'];
        $description = $row2['description'];
        $price = $row2['price'];
        $current_image = $row2['image_name'];
        $current_category = $row2['category_id'];
        $featured = $row2['featured'];
        $active = $row2['active'];

        
    }
    else
    {
        //Redirect to manage food
        header('location:'.SITEURL.'admin/add-food.php');

    }
?>

<div class="main-content2">
    <div class="wrapper">
        <h1>Update Food</h1>
        <br><br><br>

        <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
        <tr>
        <label>Title:</label>
        <td><input type="text" name="title" value="<?php echo $title; ?>" class="form-control"></td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Description:</label>
        <td>
            <textarea name="description"  cols="30" rows="5" class="form-control"> <?php echo $description; ?></textarea>
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Price:</label>
        <td>
        <input type="number" name="price" value="<?php echo $price; ?>" class="form-control">
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Current Image: </label>
        <td>
            <?php
            if($current_image == "")
            {
                //Image not available
            }
            else
            {
                //Image Available
                ?>
                <img src="<?php echo SITEURL; ?>images/food/<?php echo $current_image;?>"  class="form-control" style="width:20%">
                <?php
            }
            ?>
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Select New Image</label>
        <td>
            <input type="file" name="image" class="form-control">
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Category:</label>
        <td>
            <select name="category" id="" class="form-control">
                <?php
                    //Create PHP code to display categories from database
                    // 1. Create Sql to get all active categories from database
                    $sql = "SELECT * FROM tbl_category WHERE active = 'YES'";

                    //Executing category
                    $res = mysqli_query($conn, $sql);

                    //count rows to check whether we have categories or not
                    $count = mysqli_num_rows($res);
                    
                    //if count is greater than zero, we have categories else we do not have categories
                    if($count>0)
                    {
                        //we have categories
                        while($row=mysqli_fetch_assoc($res))
                        {
                            //Get the details of categories
                            $category_id  = $row['id'];
                            $category_title = $row['title'];
                            ?>
                            <option <?php if($current_category==$category_id){echo "Selected";} ?> value="<?php echo $category_id;?>"><?php echo $category_title;?></option>
                            <?php
                        }
                    }
                    else
                    {
                        //we do not have category
                        ?>
                        <option value="0">No Category Found</option>
                        <?php
                    }

                    //2. Display on Database

                ?>
                
            </select>
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Featured:</label>
        <td>
            <input <?php if($featured=="Yes") {echo "checked";}?> type="radio" name="featured" value="Yes" class="form-control"> Yes
            <input <?php if($featured=="No") {echo "checked";}?> type="radio" name="featured" value="No" class="form-control"> No
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label>Active:</label>
        <td>
            <input <?php if($active=="Yes") {echo "checked";} ?> type="radio" name="active" value="Yes" class="form-control"> Yes
            <input <?php if($active=="Yes") {echo "checked";} ?> type="radio" name="active" value="No" class="form-control"> No
        </td>
        </tr>
        </div>

        <div class="form-group">
        <tr>
        <label colspan="2">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
            <input type="submit" name="submit" value="Update Food" class="btn btn-success">

        </label>
        </tr>
        </div>

    </form>  

    <?php

        if(isset($_POST['submit']))
        {
            //1.Get all the details from the form
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $category = $_POST['category'];

            $featured = $_POST['featured'];
            $active = $_POST['active'];


            //2.Upload the image if selected

            //check whether upload button is clicked or not
            if(isset($_FILES['image']['name']))
            {
                //Upload button clicked
                $image_name = $_FILES['image']['name']; //new image name

                //Check whether the file is available or not
                if($image_name != "")
                {
                    //Image is Available
                    //A.Uploading new image
                    //Rename the image
                    $text = end(explode('.',$image_name));//Gets the extension of the image

                    $image_name= "Food-Name-".rand(0000,9999).'.'.$text;//This will be renamed image

                    //Get the Source path and destination path
                    $src_path= $_FILES['image']['tmp_name'];//Source path
                    $dest_path= "../images/food/".$image_name;//Destination path

                    //Upload the image
                    $upload = move_uploaded_file($src_path, $dest_path);

                    //check whether the imag is uploaded or not
                    if($upload==false)
                    {
                        //Failed to Upload
                        $_SESSION['upload'] = "<div  class='error'> Failed to upload New image</div>";
                        //Redirect to  Add category page
                        header('location:'.SITEURL.'admin/manage-food.php');
                        //Stop the process
                        die();
                    }
                    //3.Remove the image if new image is uploaded and current image exists
                    //B. Remove Current image if available
                    if($current_image != "")
                    {
                        //Current Image is Available
                        //remove the image
                        $remove_path = "../images/food/".$current_image;

                        $remove = unlink($remove_path);

                        //Check whether the image is removed or not
                        if($remove==false)
                        {
                            //Failed to remove current image
                            $_SESSION['remove-failed'] = "<div  class='error'> Failed to remove current image</div>";
                            //Redirect to  Add category page
                            header('location:'.SITEURL.'admin/manage-food.php');
                            //Stop the process
                            die();
                        }
                    }

                }
                else
                {
                    $image_name = $current_image;//Default image when image is not selected
                }

            }
            else
            {
                $image_name = $current_image;//Default Image when button is not clicked
            }

            

            //4. Upload the food in database
            $sql3= "UPDATE tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id = '$category',
                    featured = '$featured',
                    active = '$active'
                    WHERE id = $id";

            //Execute the query
            $res3 = mysqli_query($conn, $sql3);

            //check whether the query is executed or not
            if($res3==true)
            {
                //Query executed and food updated
                $_SESSION['update'] = "<div class='success'> Food Updated Successfully</div>";
                //Redirect to  Add category page
                header('location:'.SITEURL.'admin/manage-food.php');
            }
            else
            {
                //Failed to Update Food
                $_SESSION['update'] = "<div class='error'> Failed to Update Food</div>";
                //Redirect to  Add category page
                header('location:'.SITEURL.'admin/manage-food.php');
            }


            // Redirect to manage food with session message
        }

    ?>

    </div>
</div>




<?php include("partials/footer.php");?>