<?php include('partials/menu.php');?>

<div class="main-content2">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        ?>

        <form action="" method="POST">

            <div class="form-group">
            <tr>
                <label>Current Password:</label>
                <td><input type="password" name="current_password" placeholder="Enter Current Password" class="form-control"></td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>New Password:</label>
                <td><input type="password" name="new_password" placeholder="Enter New Password" class="form-control"></td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Confirm Password:</label>
                <td><input type="password" name="confirm_password" placeholder=" Confirm Password" class="form-control"></td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id;  ?>">
                    <input type="submit" name="submit" value="Change Password" class="btn btn-success">

                </label>
            </tr>
            </div>

        </form>
    </div>
</div>

<?php
    //Check whether the submit Button is clicked or not
    if(isset($_POST['submit']))
    {
        //Get the Data from Form
        $id=$_POST['id'];
        $current_password= md5($_POST['current_password']);
        $new_password  = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        //Check whether the user with current ID and Current Password Exists or not
        $sql  = "SELECT * FROM tbl_admin WHERE id=$id AND password = '$current_password'";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            //Check whether data is available or not
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //User Exists and password can be Changed
                //echo "User Found";
                //Check whether the new password and confirm match or not
                if($new_password==$confirm_password)
                {
                    //Update the password
                    $sql2 ="UPDATE tbl_admin SET
                    password = '$new_password'
                    WHERE id=$id";

                    //Execute the query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether the query  executed or not
                    if($res2==true)
                    {
                        //Display Success Message
                        //Redirect to manage admin page with Success message
                        $_SESSION['change-pwd'] = "<div class='success'>Password Changed Successfully.</div>";

                        //Redirect to Manage Admin Page
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else
                    {
                        //Display Error Message
                        //Redirect to manage admin page with error message
                        $_SESSION['change-pwd'] = "<div class='success'>Failed to Change Password.</div>";

                        //Redirect to Manage Admin Page
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    
                }
                else{

                    //Redirect to manage admin page with error message
                    $_SESSION['pwd-not-match'] = "<div class='error'>Password Did Not Match.</div>";

                    //Redirect to Manage Admin Page
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                //User does not Exists set message and redirect
                $_SESSION['user-not-found'] = "<div class='error'>User Not Found.</div>";

                //Redirect to Manage Admin Page
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
    }
?>







<?php include('partials/footer.php');?>