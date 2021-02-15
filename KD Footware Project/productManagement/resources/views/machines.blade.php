<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProductManagement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    @include('inc.navbar')
    <div class="container">
    <div class="text-center">
        <br>

        <h1>Machines</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                   

                @endforeach
                <br>

                    <table class="table table-condensed1">
                    <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">                   
                    
                    <th>MachinesID</th>
                    <th>MachinesName</th>
                    <th>Status</th>
                    
                    <th>Action</th>
                
                    @foreach($machines as $machine)
                    <tr>
                        <td>{{$machine->id}}</td>
                        <td>{{$machine->name}}</td>
                        <td>{{$machine->status}}</td>
                    <td><a href="{{url('machine/edit/'.$machine->id)}}"class="btn btn-success">Edit</a></td>
                    </tr>
                    @endforeach
                    </table>

              
                    <form method="POST" action="/saveMachine">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" placeholder="Enter your Machine Name">
                    <br>

                    <label for="sel1"></label>
                    <select class="form-control" id="sel1" name="status">
                        <option value="--Select one--">--Select Machine Status--</option>
                        <option>Ready</option>
                        <option>Busy</option>
                        <option>Maintenance</option>
                    
  
                    </select>
                
                    <br>

                    <input type="submit" class="btn btn-primary" value="SAVE">
              

                    </form>
                </div>
            </div>
            </div></div></div></div>
           
      
    
</body>
</html>