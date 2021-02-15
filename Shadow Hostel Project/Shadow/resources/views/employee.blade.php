<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="modal-content">
        <form action="/saveEmployee" method="post">
          {{csrf_field()}}
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
</body>
</html>