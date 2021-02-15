
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
                <div class="dropdown-menu">
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

            <h1>Computer System Networks</h1>
            <br><br>


            <table class="table table-dark">
                <tr></tr>

                <?php
                $CSN = "Computer System Networks";
                include('DB_Connect.php');
                $sqlget = "SELECT * FROM course_module where ModuleType = '$CSN'";
                $sqldata = mysqli_query($con, $sqlget) or die('error getting');

                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                    echo "<tr><td style='font-size: 25px; padding: 25px'><a href='Add_Files.php'>";
                    echo $row['ModuleName'];
                    echo "</td><td style='font-size: 25px; padding: 25px'>";
                    echo $row['ModuleNo'];
                }


                echo"</table>";

                ?>

        </div>

    </div>
</div>
</div>

</div>



</body>
</html>





