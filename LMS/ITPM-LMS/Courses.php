
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

<?php require_once("navbar.php")?>

<div class="container" style=" margin-top: 60px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">



        </div>
        <div class="col-sm-8">

            <h1>Courses</h1>
            <br><br>


            <table class="table table-dark">

                <?php

                session_start();
                include('DB_Connect.php');
                $sqlget = "SELECT * FROM Courses";
                $sqldata = mysqli_query($con, $sqlget) or die('error getting');



                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                    echo "<tr><td style='font-size: 25px; padding: 25px'><a href='IT_Course.php?".$row['CourseID']."'>";
                    echo $row['CourseName'];

                    if (!(empty($_SESSION['user_id'])) and ($_SESSION['user_id'] == -1)){
                        echo "<td><a href='update_course.php?".$row['CourseID']."'>edit</a></td>";
                    }

                    echo "</tr>";


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





