<?php

include('DB_Connect.php');
$sqlget = "SELECT * FROM notification";
$sqldata = mysqli_query($con, $sqlget) or die('error getting');

$row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC);

?>



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
                    <a class="dropdown-item" href="Course_Module_upload.php">Add Course Modules </a>


                </div>
            </li>
            <li><a href="Courses.php" style="font-size: 30px;color: white">Courses</a></li>

            <?php

            if($row['notify'] == 'true'){

                echo "<button type=\"button\" class=\"btn btn-primary\">
  New Course added
</button>";

            }


            ?>


        </ul>
    </div>
</nav>