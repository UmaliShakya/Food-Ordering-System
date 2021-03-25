<?php include('../config/constants.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login - Food Order System</title>
</head>
<body>
    
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>

        <?php

        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>


        <!--Login form Start  here -->
        <form action="" method="POST" class="text-center">
        <div class="form-group">
            <label>Username: </label>
            <input type="text" name="username"placeholder="Enter Username" class="form-control"><br>
        </div>

        <div class="form-group">
            <label>Password: </label>
        <input type="password" name="password"placeholder="Enter Password" class="form-control"> <br><br>
        </div>
        <input type="submit" name="submit" value="Login" class="btn btn-primary">
        <br><br>
        </form>
        <!--Login form Start  here -->

        <p class="text-center">Created By - <a href="www.umalishakya.com">Umali Shakya</a></p>
    </div>
</body>
</html>

<?php

    //Check whether the submit button is clicked or Not
    if(isset($_POST['submit']))
    {
        //Process for login
        //Get the Data from Login form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //Sql to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
    
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Count rows to check whether the user exists  or not
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            //User Available and login access
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //to check whether the user  is logged is or not and logout will unset it

            //Redirect to home page/dashboard
            header('location:'.SITEURL.'admin/');

        }
        else
        {
            //User not Available and login fail
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";

            //Redirect to home page/dashboard
            header('location:'.SITEURL.'admin/login.php');

        }
    }
?>