<?php include("partials/menu.php");?>

<div class="main-content2">
    <div class="wrapper">
        <h1>Add Food</h1>

        <br>

        <?php

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

        ?>

        <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
        <label>Title:</label>
        <td><input type="text" name="title" placeholder="Title of the Food" class="form-control"></td>
        </div>

        <div class="form-group">
        <label>Description:</label>
        <td>
            <textarea name="description"  cols="30" rows="5" placeholder="Description of the Food" class="form-control"></textarea>
        </td>
        </div>

        <div class="form-group">
        <label>Price:</label>
        <td>
        <input type="number" name="price"class="form-control">
        </td>
        </div>

        <div class="form-group">
        <td>Select Image: </td>
        <td>
            <input type="file" name="image"class="form-control">     
        </td>
        </div>

        <div class="form-group">
        <label>Category:</label>
        <td>
            <select name="category" id=""class="form-control">
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
                            $id  = $row['id'];
                            $title = $row['title'];
                            ?>
                            <option value="<?php echo $id;?>"><?php echo $title;?></option>
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
        </div>

        <div class="form-group">
        <label>Featured:</label>
        <td>
            <input type="radio" name="featured" value="Yes"class="form-control"> Yes
            <input type="radio" name="featured" value="No"class="form-control"> No
        </td>
        </div>

        <div class="form-group">
        <label>Active:</label>
        <td>
            <input type="radio" name="active" value="Yes"class="form-control"> Yes
            <input type="radio" name="active" value="No"class="form-control"> No
        </td>
        </div>

        <div class="form-group">
        <label colspan="2">
            <input type="submit" name="submit" value="Add Food" class="btn btn-secondory">

        </label>
        </div>

    </form>  

    <?php

        //check whether the button is clicked or not
        if(isset($_POST['submit']))
        {
            //Add the food in database
            //1.Get the data from form
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            
            //check whether  radio button for featured and active are checked or not
            if(isset($_POST['featured']))
            {
                $featured = $_POST['featured'];
            }
            else
            {
                $featured = "No"; //Setting the default value
            }

            if(isset($_POST['active']))
            {
                $active = $_POST['active'];
            }
            else
            {
                $active = "No"; //Setting the default value
            }


            //2.Upload the image if selected
            //check whether the select image is clicked or not and upload the image only if the image is selected
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
                    $image_name = "Food-Name-".rand(000, 999).'.'.$text;//e.g.food_category_834.jpg


                    $source_path = $_FILES['image']['tmp_name'];

                    $destination_path = "../images/food/".$image_name;

                    //Finally upload the image
                    $upload  = move_uploaded_file($source_path, $destination_path);

                    //Check whether the image is uploaded or not
                    //And if the image is not uploaded then we will stop the process and redirect with error message
                    if($upload==false)
                    {
                        //SEt message
                        $_SESSION['upload'] = "<div  class='error'> Failed to upload image</div>";
                        //Redirect to  Add category page
                        header('location:'.SITEURL.'admin/add-food.php');
                        //Stop the process
                        die();
                    }
                }
            }
            else
            {
                $image_name = ""; //Setting default value as blank
            }

            //3.insert into database

            //Create a SQL query to save or Add Food
            //For Numerical we do not need to pass value inside quotes'' but for string value it id compulsory add quotes ''
            $sql2 = "INSERT INTO tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name= '$image_name',
                    category_id = $category,
                    featured = '$featured',
                    active  = '$active'";
            
            //Execute the query whether data is inserted  or not
            //4.Redirect with message to manage food
           
            $res2 = mysqli_query($conn, $sql2);
            //Check whether data is inserted or not
            if($res2==true)
            {
                //Data inserted successfully
                $_SESSION['add'] = "<div class='success'>Food Added Successfully</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }
            else
            {
                //Failed to Insert Data
                $_SESSION['add'] = "<div class='error'>Failed to Add Food</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }

            

           
        }
        
    
    ?>

    </div>
</div>

<?php include("partials/footer.php");?>