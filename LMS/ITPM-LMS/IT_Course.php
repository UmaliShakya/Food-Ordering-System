
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

            <h1>Course Modules</h1>
            <br><br>


            <table class="table table-dark">
                <tr></tr>

                <?php


                $ModuleType = $_SERVER['QUERY_STRING'];
                include('DB_Connect.php');
                $sqlget = "SELECT * FROM course_module where ModuleType = '{$ModuleType}'";
                $sqldata = mysqli_query($con, $sqlget) or die('error getting');

                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                    echo "<tr><td style='font-size: 25px; padding: 25px'><a href='Add_Files.php?".$row['ModuleID']."'>";
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





