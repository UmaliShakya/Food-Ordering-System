
<?php

    include('DB_Connect.php');
    $ModuleNo = $_POST["ModuleNo"];
    $ModuleName = $_POST['ModuleName'];
    $EnrollementKey = $_POST['EnrollementKey'];
    $Year = $_POST['Year'];
    $LecturerID = $_POST['LecturerID'];
    $ModuleType = $_POST['ModuleType'];


    $sql = "INSERT INTO course_module (ModuleNo,ModuleName,EnrollementKey,Year,LecturerID,ModuleType) VALUES ('$ModuleNo','$ModuleName','$EnrollementKey','$Year','$LecturerID','$ModuleType')";


     if (mysqli_query($con,$sql))
     {
         echo 'Data Inserted';
     }

     else{

         echo 'Not Inserted';
     }

     header("refresh:2; url=Course_module_upload.php");
   ?>