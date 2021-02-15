<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>Student Management</title>
    <style>

            #header{
            background: #020000;
            color: #ffffff;
            padding-bottom:5px;
            margin-bottom: 15px;
          
        
        }
        h1{
            font-size: 30px;
        }
        #header .create{
            padding-top: 20px;
            margin-left: 70px;
        
        
        }
        .btn{
            background: #a41a0e;
        }
        #header .dashboard{
            margin-left:20px;
        }
        
        /*Broadcrumb*/
        
        .breadcrumb{
            background: #cccccc;
            color: #333333;
           
        
        }
        
        .breadcrumb a{
            color: #333333
        }
        
        /*styles */
        .progress-bar{
            background: #333333;
            color: #ffffff;
        }
        
        .dash-box{
            text-align: center;
        }
        
        </style>
    

    
  <body>

    @include('nav')
    
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Student Details</li>
                
            </ol>

        </div>

    </section>

    <section id="main">
            <div class="container bg-danger">
                <div class="row">
                    <div class="col-md-3">
                            <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active" style=" background: #a41a0e;">
                                            Dashboard
                                    </a>
                                    <a href="studentM" class="list-group-item list-group-item-action" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Students <span class="badge">100</span></a>
                                    <a href="#" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Rooms <span class="badge">50</span></a>
                                    <a href="employeeM" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Employees <span class="badge">25</span></a>
                                    <a href="#" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Users <span class="badge">10</span></a>
                                  </div> 
                                  <div class="well">
                                        <h4>Disk Space Used</h4>
                                        <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
                                              </div>
                                           
    
                                            <h4>Bandwidth Used</h4>
                                            <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                  </div>
                                                </div>
                                            
                                            </div>
                                          
                                            <div class="col-md-9 ">
                                                
                                                <img src="" alt="">
                                            <h2 style="text-align:center; font-weight:bold; text-size:45px;">{{$employee->Emp_Name}}'s Profile</a></h2>
                                                        <div class="row" style="margin-left:80px; font-weight:bold; ">
                                                                        
                                                                <h4 class="container">Employee No: &nbsp;{{$employee->id}}</h4><br>
                                                                <h4 class="container">Employee Name:  &nbsp;{{$employee->Emp_Name}}</h4><br>
                                                                <h4 class="container">Employee Age: &nbsp;{{$employee->Emp_Age}}</h4><br>
                                                                <h4 class="container">Employee NIC: &nbsp;{{$employee->Emp_NIC}}</h4><br>
                                                                <h4 class="container">Employee AccountNO: &nbsp;{{$employee->Emp_AccNo}}</h4><br>
                                                                <h4 class="container">Employee Address: &nbsp;{{$employee->Emp_Address}}</h4><br>
                                                                <h4 class="container">Employee Mobile No: &nbsp;{{$employee->Emp_MobileNo}}</h4><br>
                                                                <h4 class="container">Employee Category: &nbsp;{{$employee->Emp_Category}}</h4><br>
                                                       
                                                </div></div></div></div></div></div>
            </section>
            <br><br><br><br>
            @include('footer')
          
 
     <!--Modals-->

         <!--AddStudents-->
         <div class="modal fade" id="addstudents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="/saveStudent" method="post">  {{csrf_field()}}
                    <div class="modal-header" style="background: #a41a0e;">
                      <h4 class="modal-title" id="exampleModalLabel" style="color: #cccccc; font-weight: bold;">Add New Student
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></h4>
                      </button>
                    </div>
    
                    <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                        <label for="studentname">Student Name</label>
                        <input type="text" class="form-control" id="inputstudentname" placeholder="Enter Student Name" name="Stu_Name" >
                        </div>
    
                        <div class="form-group">
                        <label for="studentno">Student Age</label>
                        <input type="text" class="form-control" id="inputstudentid" placeholder="Enter Student Age" name="stu_Age">
                        </div>
                                    
                        <div class="form-group">
                        <label for="university">University</label>
                        <input type="text" class="form-control" id="university" placeholder="Enter University" name="University">
                        </div>
    
                        <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" id="faculty" placeholder="Enter Faculty" name="Faculty">
                        </div>
    
                        <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Stu_Address">
                        </div>
    
                        <div class="form-group">
                        <label for="studentmobileno">Mobile Number</label>
                        <input type="text" class="form-control" id="inputsmobileno" placeholder="Enter Student Mobile Number" name="Stu_MobileNo">
                        </div>
                                              
                        <div class="form-group">
                        <label for="studentemail">Student Email</label>
                        <input type="text" class="form-control" id="inputstudentemail" placeholder="Enter Student Email"  name="Stu_Emali">
                        </div>
                            
                        <div class="form-group">
                        <label for="inputgardian'sname">Gardian's Name</label>
                        <input type="inputgardian'sname" class="form-control" id="inputgardian'sname" placeholder="Enter Gardian's Name"  name="GardianName">
                        </div>
                                  
                        <div class="form-group">
                        <label for="inputgardian'scontactno">Gardian's Contact Number</label>
                        <input type="text" class="form-control" id="inputgardian'scontactno" placeholder="Enter Gardian's Contact Number" name="Gardi_contactNo">
                        </div>    
                    </div>
                    
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-danger">Submit</button>
                      <button type="button" class="btn btn-dark" style="background: #020000; color:white" data-dismiss="modal">Close</button>
                    </div>
            </form>
            </div>
            </div>
            </div>
            
            <!--AddEmployees-->
     
            <div class="modal fade" id="AddEmployees" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="/saveEmployee" method="post">{{csrf_field()}}
                    <div class="modal-header" style="background: #a41a0e;">
                        <h4 class="modal-title" id="exampleModalLabel" style="color: #cccccc; font-weight: bold;">Add New Employee
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></h4>
                        </button>
                    </div>
    
                    <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                        <label for="employeename">Employee Name</label>
                        <input type="text" class="form-control"  placeholder="Enter Employee Name" name="Emp_Name" >
                        </div>
          
                        <div class="form-group">
                        <label for="employeeage">Employee Age</label>
                        <input type="text" class="form-control"  placeholder="Enter Employee Age" name="Emp_Age">
                        </div>
          
                        <div class="form-group">
                        <label for="employyeaddress">Address</label>
                        <input type="text" class="form-control" placeholder="1234 Main St" name="Emp_Address">
                        </div>
          
                        <div class="form-group">
                        <label for="employeemobileno">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Employee Mobile Number" name="Emp_MobileNo">
                        </div>
          
                        <div class="form-group">
                        <label for="employeeNIC">Employee NIC</label>
                        <input type="text" class="form-control" placeholder="Enter Employee NIC"  name="Emp_NIC">
                        </div>
                              
                        <div class="form-group">
                        <label for="employeeaccountno">Employee Accountno</label>
                        <input type="text" class="form-control" placeholder="Enter Employee Accountno"  name="Emp_AccNo">
                        </div>
                                    
                        <div class="form-group">
                        <label for="employeecategory">Employee Category</label>
                        <input type="text" class="form-control" id="inputgardian'scontactno" placeholder="Enter Employee Category" name="Emp_Category">
                        </div>    
                    </div>
    
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <button type="button" class="btn btn-dark" style="background: #020000; color:white" data-dismiss="modal">Close</button>
                    </div>
            </form>  
            </div>
            </div>
            </div>   
    
  
    
    
             
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script     src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
                                      
                                      </body>
                                    </html>