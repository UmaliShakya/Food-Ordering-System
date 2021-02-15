<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="background: #ffc107; padding: 25px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"style="font-size: 30px; color: white">ABC Institute</a>
        </div>
        <ul class="nav navbar-nav" style="float: right">
            <li class="active"><a href="#" style="font-size: 30px;color: white">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 30px;color: white">
                    Admin <span class="caret"></span></button>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="Add_Courses.php">Add Courses</a><br>
                    <a class="dropdown-item" href="Add_Course_Module.html">Add Course Modules </a>


                </div>
            </li>
            <li><a href="Courses.php" style="font-size: 30px;color: white">Courses</a></li>

        </ul>
    </div>
</nav>
<div class="container" style=" margin-top: 60px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">



        </div>
        <div class="col-sm-8">

            <h1>Upload Files</h1>
            <br><br>

            <form class="form-horizontal" action="?" method="post" enctype="multipart/form-data">

                   <div class="form-group">
                    <label class="control-label col-sm-2" for="File" ">Upload Files:</label>
                    <div class="col-sm-10">
                        <input type="file" name="File"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-dark" style="" name="upload" value="Upload File"  >Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

</div>

<?php
if (isset($_POST['upload'])){

    $FileName = $_FILES['File']['name'];
    $FileType = $_FILES['File']['type'];
    $FileSize = $_FILES['File']['size'];
    $FileLocation = $_FILES['File']['tmp_name'];
    $FileStore = "upload/".$FileName;


    echo '<script type="text/javascript">alert("'.$FileSize.'")</script>';


    if (move_uploaded_file($FileLocation, $FileStore)){
        echo "Files are Uploaded";
    }
}


?>


 <?php

 include('DB_Connect.php');
 $sqlget = "SELECT * FROM course_module";
 $sqldata = mysqli_query($con, $sqlget) or die('error getting');


?>
</body>
</html>
