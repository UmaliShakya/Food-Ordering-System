<?php include('partials/menu.php');?>


<div class="main-content2">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br><br>

        <?php

        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>
        

        <br><br>

        <!--Add Category form starts-->
        <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
        <label >Title:</label >
        <td><input type="text" name="title" placeholder="Enter Category Title" class="form-control"></td>
        </div>

        <div class="form-group">
        <label >Select Image: </label >
        <td>
            <input type="file" name="image" class="form-control">    
        </td>
        </div>

        <div class="form-group">
        <label>Featured:</label >
        <td>
            <input type="radio" name="featured" value="Yes" class="form-control"> Yes
            <input type="radio" name="featured" value="No" class="form-control"> No
        </td>
        </div>

        <div class="form-group">
        <label >Active:</label >
        <td>
            <input type="radio" name="active" value="Yes" class="form-control">Yes
            <input type="radio" name="active" value="No" class="form-control">No
        </td>
        </div>

        <div class="form-group">
        <label  colspan="2">
            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
        </label >
    </div>

</form>         
        <!--Add Category form ends-->

        <?php

            //Check whether the submit button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //Get the value from category form
                $title = $_POST['title'];

                //For radio input, we need to check whether the button is selected or not
                if(isset($_POST['featured']))
                {
                    //Get the value from form
                    $featured = $_POST['featured'];
                }
                else
                {
                    //Set the default value
                    $featured = "No";
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

                //Check whether the image is selected or not and set the value  for image name accordingly
                //print_r($_FILES['image']);

                //die();//Break the code here

                if(isset($_FILES['image']['name']))
                {
                    //Upload the image
                    //To upload image we need image name, source path and destination path
                    $image_name = $_FILES['image']['name'];
                    
                    //Upload the image only if image is selected
                    if($image_name != "")
                    {
                        //Auto rename our image
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
                            header('location:'.SITEURL.'admin/add-category.php');
                            //Stop the process
                            die();

                        }
                    }
                }
                else
                {
                    //Don't upload image and set the image_name values as blank
                    $image_name="";
                }

                //Create SQL Query to Insert Category into database
                $sql = "INSERT INTO tbl_category SET
                        title = '$title',
                        image_name = '$image_name',
                        featured = '$featured',
                        active = '$active'";

                //Execute the query and save in database
                $res = mysqli_query($conn, $sql);

                // Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query executed and category added
                    $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
                    //Redirect to manage category page
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    //Failed to Add Category
                    $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
                    //Redirect to manage category page
                    header('location:'.SITEURL.'admin/add-category.php');
              
                }

                
            }



        ?>

    </div>
</div>



<?php include('partials/footer.php');?>