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
                <li class="active">Manage Room Details</li>
                
            </ol>

        </div>

    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                        <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" style=" background: #a41a0e;">
                                        Dashboard
                                </a>
                                <a href="studentM" class="list-group-item list-group-item-action" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Students <span class="badge">100</span></a>
                                <a href="roomM" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Rooms <span class="badge">50</span></a>
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

                                        <div class="col-md-9">
                                            <!--website overview-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading" style=" background: #a41a0e; color:white;"> Rooms</div>
                                                <div class="panel-body">
                                                        <table class="table table-striped table-hover" >
                                                <thead style=" background: black; color:white; " >
                                                  <tr>
                                                    <th>#</th>
                                                    <th>Room No</th>
                                                    <th>Room Category</th>
                                                    <th>Room Rental</th>
                                                    <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                 @foreach ($rooms as $room)
                                                        <tr>
                                                        <td>{{$room->id}}</td>
                                                        <td>{{$room->R_No}}</td>
                                                        <td>{{$room->R_Category}}</td>
                                                        <td>{{$room->R_Rental}}</td>
                                              
                                                          <td>
                                                          <a href="{{url('editroom/'.$room->id)}}" class="btn btn-success" style=" background: #a41a0e; color:white;">Edit</a>
                                                          
                                                          </td>
                                                        </tr>
                                                        @endforeach 
                                                  </tbody>
                                              </table>
                                            </div>                        
                                                 </div>
                                </section>
                        
                                @include('footer')

     <!--Modals-->

            <!--AddRooms-->
           <div class="modal fade" id="addrooms">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                    <div class="modal-header" style="background: #a41a0e;">
                      <h4 class="modal-title" style="color: #cccccc; font-weight: bold;">Add New Room
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></h4>
                      </button>
                    </div>
                    <form action="/saveRoom" method="post">  {{csrf_field()}}
                    <div class="modal-body">
                    <div class="form-row">
                        
                        <div class="form-group">
                        <label for="roomNo">Room No</label>
                        <input type="text" class="form-control" placeholder="Enter Room No" name="R_No" >
                        </div>
    
                        <div class="form-group">
                        <label for="roomcategory">Room Category</label>
                        <select name="R_Category" class="form-control">
                            <option selected>Select Category</option>
                            <option value="Common">With Common Bathroom</option>
                            <option value="Attached">With Attached Bathroom</option>
                          </select>
                        </div>
                                    
                        <div class="form-group">
                        <label for="roomCharges">Room Rental</label>
                        <input type="text" class="form-control" placeholder="Enter Room charges" name="R_Rental">
                        </div>
                    
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-danger">Submit</button>
                      <button type="button" class="btn btn-dark" style="background: #020000; color:white" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </form>
            </div>
  
           
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script     src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
  </html>
  