<?php include('partials/menu.php');?>


<div class="main-content2">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br>

        <?php
        if(isset($_SESSION['add']))//Checking whether the session is set or not
        {
            echo $_SESSION['add'];//Display the session message if SET
            unset($_SESSION['add']);//Remove Session Message
        }
    ?>
        <form action="" method="POST">

            <div class="form-group">
                <label >Full Name:</label>
                <td><input type="text" name="full_name" placeholder="Enter Full Name" class="form-control"></td>
            </div>

            <div class="form-group">
                <label >Username:</label>
                <td><input type="text" name="username" placeholder="Enter Username" class="form-control"></td>
            </div>

            <div class="form-group">
                <label >Password:</label>
                <td><input type="password" name="password" placeholder="Your Password" class="form-control"></td>
            </div>

            <div class="form-group">
                <label  colspan="2">
                <input type="submit" name="submit" value="Add Admin" class="btn btn-primary">

            </label >
            </div>

        </form>
    </div>
</div>

<?php include('partials/footer.php');?>


<?php

//Process the value from form  and Save it in Database
//Check whether the submit button is clicked or not
if(isset($_POST['submit']))
{
    //Get the Data from form
    $full_name = $_POST["full_name"];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //SQL query to save the Data into database
    $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'";

    //ExecutingQuery and Saving Data into database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //Check whether the data is inserted or not and display appropriate message
    if($res==TRUE)
    {
        //echo "Data Inserted";
        //Create a Session variable to display Message
        $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";

        //Redirect Page  to Manage admin  page
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "Fail to Insert Data";
        //Create a Sesson Variable to display message
        $_SESSION['add'] = "Failed to Add Admin";
        //Redirect Page  to Manage admin  page
        header("location:".SITEURL.'admin/add-admin.php');
    }

}

?>