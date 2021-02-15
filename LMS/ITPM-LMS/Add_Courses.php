<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php require_once("navbar.php")?>
<div class="container" style=" margin-top: 100px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">



        </div>
        <div class="col-sm-8">

            <h1>Add Courses</h1>
            <br>

            <form class="form-horizontal" action="?" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="CourseName" >Course Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="CourseName"; id="CourseName" placeholder="Enter Course Name">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" value="Insert" name="submit">Submit</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>

<?php

include('DB_Connect.php');

if (isset($_POST['submit'])) {
    $CourseName = $_POST["CourseName"];


    $sql = "INSERT INTO courses (CourseName) VALUES ('$CourseName')";


    if (mysqli_query($con, $sql)) {
        echo 'Data Inserted';
    } else {

        echo 'Not Inserted';
    }

    header("refresh:2; url=Add_Courses.php");
}
?>

</body>
</html>
