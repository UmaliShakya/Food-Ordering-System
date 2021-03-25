<?php include('partials/menu.php');?>

<div class="main-content2">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

        <?php

        //Get the ID of Selected Admin
        $id = $_GET['id'];

        //Create SQL Query to get the details
        $sql= "SELECT * FROM tbl_admin WHERE id=$id";

        //Execute the query
        $res=mysqli_query($conn, $sql);

        //Check whether the query is executed or not
        if($res==true)
        {
            //check whether the data is available or not
            $count = mysqli_num_rows($res);
            //Check whether we have admin data or not
            if($count==1)
            {
                //Get the details
                //echo "Admin Available";
                $row = mysqli_fetch_assoc($res);

                $full_name = $row['full_name'];
                $username = $row['username'];
            }
            else
            {
                //Redirect to manage Admin page
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
        ?>

    <form action="" method="POST">
    
    <div class="form-group">
        <tr>
            <label>Full Name:</label>
            <td>
                <input type="text" name="full_name" value="<?php echo $full_name; ?>" class="form-control">
            </td>
        </tr>
    </div>
    
    <div class="form-group">
        <tr>
            <label>Username:</label>
            <td><input type="text" name="username" value="<?php echo $username; ?>" class="form-control"></td>
        </tr>
    </div>

    <div class="form-group">    
        <tr>
            <label colspan="2">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update Admin" class="btn btn-success">

            </label>
        </tr>
    </div>
    
    
    </form>
    
    </div>
</div>

<?php 
    //Check whether the submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
        //echo "Button Clicked";
        //Get All the value from form to update
        $id =$_POST['id'];
        $full_name =$_POST['full_name'];
        $username =$_POST['username'];

        //Create a SQL Query to update Admin
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id='$id'";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";

            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //Failed to Update
            $_SESSION['update'] = "<div class='error'>Failed to Update Admin .</div>";

            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }
?>
<?php include('partials/footer.php');?>

